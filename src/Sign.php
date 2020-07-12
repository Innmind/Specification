<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
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

    private static ?self $equality = null;
    private static ?self $inequality = null;
    private static ?self $lessThan = null;
    private static ?self $moreThan = null;
    private static ?self $lessThanOrEqual = null;
    private static ?self $moreThanOrEqual = null;
    private static ?self $isNull = null;
    private static ?self $isNotNull = null;
    private static ?self $startsWith = null;
    private static ?self $endsWith = null;
    private static ?self $contains = null;
    private static ?self $in = null;

    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @psalm-pure
     */
    public static function equality(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$equality ??= new self(self::EQUALITY);
    }

    /**
     * @psalm-pure
     */
    public static function inequality(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$inequality ??= new self(self::INEQUALITY);
    }

    /**
     * @psalm-pure
     */
    public static function lessThan(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$lessThan ??= new self(self::LESS_THAN);
    }

    /**
     * @psalm-pure
     */
    public static function moreThan(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$moreThan ??= new self(self::MORE_THAN);
    }

    /**
     * @psalm-pure
     */
    public static function lessThanOrEqual(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$lessThanOrEqual ??= new self(self::LESS_THAN_OR_EQUAL);
    }

    /**
     * @psalm-pure
     */
    public static function moreThanOrEqual(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$moreThanOrEqual ??= new self(self::MORE_THAN_OR_EQUAL);
    }

    /**
     * @psalm-pure
     */
    public static function isNull(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$isNull ??= new self(self::IS_NULL);
    }

    /**
     * @psalm-pure
     */
    public static function isNotNull(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$isNotNull ??= new self(self::IS_NOT_NULL);
    }

    /**
     * @psalm-pure
     */
    public static function startsWith(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$startsWith ??= new self(self::STARTS_WITH);
    }

    /**
     * @psalm-pure
     */
    public static function endsWith(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$endsWith ??= new self(self::ENDS_WITH);
    }

    /**
     * @psalm-pure
     */
    public static function contains(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$contains ??= new self(self::CONTAINS);
    }

    /**
     * @psalm-pure
     */
    public static function in(): self
    {
        /** @psalm-suppress ImpureStaticProperty */
        return self::$in ??= new self(self::IN);
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
