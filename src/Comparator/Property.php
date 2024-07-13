<?php
declare(strict_types = 1);

namespace Innmind\Specification\Comparator;

use Innmind\Specification\{
    Comparator,
    Composable,
    Sign,
};

/**
 * @psalm-immutable
 */
final class Property implements Comparator
{
    use Composable;

    /**
     * @param non-empty-string $property
     */
    private function __construct(
        private string $property,
        private Sign $sign,
        private mixed $value,
    ) {}

    /**
     * @psalm-pure
     *
     * @param non-empty-string $property
     */
    public static function of(
        string $property,
        Sign $sign,
        mixed $value,
    ): self {
        return new self($property, $sign, $value);
    }

    public function property(): string
    {
        return $this->property;
    }

    public function sign(): Sign
    {
        return $this->sign;
    }

    public function value(): mixed
    {
        return $this->value;
    }
}
