<?php
declare(strict_types = 1);

namespace Innmind\Specification;

final class Operator
{
    const AND = 'AND';
    const OR = 'OR';

    private $operator;

    public function __construct(string $operator)
    {
        if (!in_array($operator, [self::AND, self::OR])) {
            throw new \InvalidArgumentException;
        }

        $this->operator = $operator;
    }

    public function __toString(): string
    {
        return $this->operator;
    }
}
