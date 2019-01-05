<?php
declare(strict_types = 1);

namespace Innmind\Specification;

final class Operator
{
    private const AND = 'AND';
    private const OR = 'OR';

    private $operator;

    private function __construct(string $operator)
    {
        $this->operator = $operator;
    }

    public static function and(): self
    {
        return new self(self::AND);
    }

    public static function or(): self
    {
        return new self(self::OR);
    }

    public function equals(self $self): bool
    {
        return (string) $this === (string) $self;
    }

    public function __toString(): string
    {
        return $this->operator;
    }
}
