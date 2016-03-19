<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface NotInterface extends SpecificationInterface
{
    /**
     * Return the specification that is negated
     *
     * @return SpecificationInterface
     */
    public function specification(): SpecificationInterface;
}
