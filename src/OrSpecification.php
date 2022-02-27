<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
class OrSpecification implements Composite
{
    use Composable;

    private Specification $left;
    private Specification $right;

    public function __construct(Specification $left, Specification $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function left(): Specification
    {
        return $this->left;
    }

    public function right(): Specification
    {
        return $this->right;
    }

    public function operator(): Operator
    {
        return Operator::or;
    }
}
