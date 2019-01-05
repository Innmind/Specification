<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface CompositeInterface extends SpecificationInterface
{
    /**
     * Return the left side of the composition
     *
     * @return SpecificationInterface
     */
    public function left(): SpecificationInterface;

    /**
     * Return the right side of the composition
     *
     * @return SpecificationInterface
     */
    public function right(): SpecificationInterface;

    /**
     * Return the operator
     *
     * @return Operator
     */
    public function operator(): Operator;
}
