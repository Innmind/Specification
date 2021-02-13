# Specification

[![Build Status](https://github.com/innmind/specification/workflows/CI/badge.svg?branch=master)](https://github.com/innmind/specification/actions?query=workflow%3ACI)
[![codecov](https://codecov.io/gh/innmind/specification/branch/develop/graph/badge.svg)](https://codecov.io/gh/innmind/specification)
[![Type Coverage](https://shepherd.dev/github/innmind/specification/coverage.svg)](https://shepherd.dev/github/innmind/specification)

Library containing interfaces allowing to compose a tree of specification. As you may want to type hint the object you to test against, the interfaces does **not** enforce a method `isSatisfiedBy`, it will be up to you to create such method.

The goal here is to have a set of interfaces so a specification can be composed easily, _and_ decomposed afterward.

The decomposition part is useful in the case you want to translate your specification into, let's say, a doctrine query (or anything you wish).

## Implementation example

```php
use Innmind\Specification\{
    Specification,
    Composite,
    Operator,
    Not,
    Comparator,
    Sign,
};

class User
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class AndSpecification implements Composite
{
    private $left;
    private $right;

    public function __construct(Specification $left, Specification $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function left(): Specification
    {
        return $this->left;
    }

    public function operator(): Operator
    {
        return Operator::and();
    }

    public function right(): Specification
    {
        return $this->right;
    }

    public function isSatisfiedBy(User $user): bool
    {
        return $this->left->isSatisfiedBy($user) && $this->right->isSatisfiedBy($user);
    }
}

class OrSpecification implements Composite
{
    private $left;
    private $right;

    public function __construct(Specification $left, Specification $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function left(): Specification
    {
        return $this->left;
    }

    public function operator(): Operator
    {
        return Operator::or();
    }

    public function right(): Specification
    {
        return $this->right;
    }

    public function isSatisfiedBy(User $user): bool
    {
        return $this->left->isSatisfiedBy($user) || $this->right->isSatisfiedBy($user);
    }
}

class NotSpecification implements Not
{
    private $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function specification(): Specification
    {
        return $this->specification;
    }

    public function isSatisfiedBy(User $user): bool
    {
        return !$this->specification->isSatisfiedBy($user);
    }
}

class NameSpecification implements Comparator
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function and(Specification $specification): Composite
    {
        return new AndSpecification($this, $specification);
    }

    public function or(Specification $specification): Composite
    {
        return new OrSpecification($this, $specification);
    }

    public function not(): Not
    {
        return new NotSpecification($this);
    }

    public function property(): string
    {
        return 'name';
    }

    public function sign(): Sign
    {
        return Sign::equality();
    }

    public function value()
    {
        return $this->name;
    }

    public function isSatisfiedBy(User $user): bool
    {
        return $user->name === $this->name;
    }
}

$spec = (new NameSpecification('John'))
    ->or(new NameSpecification('Doe'))
    ->or((new NameSpecification('John Doe'))->not());
$spec->isSatisfiedBy(new User('John')); //true
$spec->isSatisfiedBy(new User('Doe')); //true
$spec->isSatisfiedBy(new User('John Doe')); //false
$spec->isSatisfiedBy(new User('42')); //true
```

The object `$spec` could be easily decomposed to create the given `WHERE` statement of a sql query: `WHERE name = "John" or name = "Doe" or name != "John Doe"`.
