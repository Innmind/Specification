<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
final class Operator
{
    private const AND = 'AND';
    private const OR = 'OR';

    private static ?self $and = null;
    private static ?self $or = null;

    private $operator;

    private function __construct(string $operator)
    {
        $this->operator = $operator;
    }

    public function __toString(): string
    {
        return $this->operator;
    }

    /**
     * @psalm-pure
     */
    public static function and(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$and ??= new self(self::AND);
    }

    /**
     * @psalm-pure
     */
    public static function or(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$or ??= new self(self::OR);
    }

    public function equals(self $self): bool
    {
        return (string) $this === (string) $self;
    }
}
