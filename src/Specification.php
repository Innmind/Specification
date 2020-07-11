<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Specification
{
    /**
     * Compose the current specification with the given one through an AND operator
     */
    public function and(self $specification): Composite;

    /**
     * Compose the current specification with the given one through an OR operator
     */
    public function or(self $specification): Composite;

    /**
     * Negate the current specification
     */
    public function not(): Not;
}
