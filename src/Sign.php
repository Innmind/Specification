<?php
declare(strict_types = 1);

namespace Innmind\Specification;

final class Sign
{
    private const EQUALITY = '=';
    private const INEQUALITY = '<>';
    private const LESS_THAN = '<';
    private const MORE_THAN = '>';
    private const LESS_THAN_OR_EQUAL = '<=';
    private const MORE_THAN_OR_EQUAL = '>=';
    private const IS_NULL = 'IS NULL';
    private const IS_NOT_NULL = 'IS NOT NULL';
    private const STARTS_WITH = 'STARTS WITH';
    private const ENDS_WITH = 'ENDS WITH';
    private const CONTAINS = 'CONTAINS';
    private const IN = 'IN';

    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function equality(): self
    {
        return new self(self::EQUALITY);
    }

    public static function inequality(): self
    {
        return new self(self::INEQUALITY);
    }

    public static function lessThan(): self
    {
        return new self(self::LESS_THAN);
    }

    public static function moreThan(): self
    {
        return new self(self::MORE_THAN);
    }

    public static function lessThanOrEqual(): self
    {
        return new self(self::LESS_THAN_OR_EQUAL);
    }

    public static function moreThanOrEqual(): self
    {
        return new self(self::MORE_THAN_OR_EQUAL);
    }

    public static function isNull(): self
    {
        return new self(self::IS_NULL);
    }

    public static function isNotNull(): self
    {
        return new self(self::IS_NOT_NULL);
    }

    public static function startsWith(): self
    {
        return new self(self::STARTS_WITH);
    }

    public static function endsWith(): self
    {
        return new self(self::ENDS_WITH);
    }

    public static function contains(): self
    {
        return new self(self::CONTAINS);
    }

    public static function in(): self
    {
        return new self(self::IN);
    }

    public function equals(self $self): bool
    {
        return (string) $this === (string) $self;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
