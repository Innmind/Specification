<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface Specification
{
    /**
     * Compose the current specification with the given one through an AND operator
     *
     * @param self $specification
     *
     * @return Composite
     */
    public function and(self $specification): Composite;

    /**
     * Compose the current specification with the given one through an OR operator
     *
     * @param self $specification
     *
     * @return Composite
     */
    public function or(self $specification): Composite;

    /**
     * Negate the current specification
     *
     * @return Not
     */
    public function not(): Not;
}
