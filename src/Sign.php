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
        return new self(self::EQUALITY);
    }

    /**
     * @psalm-pure
     */
    public static function inequality(): self
    {
        return new self(self::INEQUALITY);
    }

    /**
     * @psalm-pure
     */
    public static function lessThan(): self
    {
        return new self(self::LESS_THAN);
    }

    /**
     * @psalm-pure
     */
    public static function moreThan(): self
    {
        return new self(self::MORE_THAN);
    }

    /**
     * @psalm-pure
     */
    public static function lessThanOrEqual(): self
    {
        return new self(self::LESS_THAN_OR_EQUAL);
    }

    /**
     * @psalm-pure
     */
    public static function moreThanOrEqual(): self
    {
        return new self(self::MORE_THAN_OR_EQUAL);
    }

    /**
     * @psalm-pure
     */
    public static function isNull(): self
    {
        return new self(self::IS_NULL);
    }

    /**
     * @psalm-pure
     */
    public static function isNotNull(): self
    {
        return new self(self::IS_NOT_NULL);
    }

    /**
     * @psalm-pure
     */
    public static function startsWith(): self
    {
        return new self(self::STARTS_WITH);
    }

    /**
     * @psalm-pure
     */
    public static function endsWith(): self
    {
        return new self(self::ENDS_WITH);
    }

    /**
     * @psalm-pure
     */
    public static function contains(): self
    {
        return new self(self::CONTAINS);
    }

    /**
     * @psalm-pure
     */
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
