<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Comparator extends Specification
{
    /**
     * @return non-empty-string
     */
    #[\NoDiscard]
    public function property(): string;
    #[\NoDiscard]
    public function sign(): Sign;
    #[\NoDiscard]
    public function value(): mixed;
}
