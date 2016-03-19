<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface SpecificationInterface
{
    /**
     * Compose the current specification with the given one through an AND operator
     *
     * @param self $specification
     *
     * @return CompositeInterface
     */
    public function andX(self $specification): CompositeInterface;

    /**
     * Compose the current specification with the given one through an OR operator
     *
     * @param self $specification
     *
     * @return CompositeInterface
     */
    public function orX(self $specification): CompositeInterface;

    /**
     * Negate the current specification
     *
     * @return NotInterface
     */
    public function not(): NotInterface;
}
