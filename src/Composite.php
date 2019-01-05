<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface Composite extends Specification
{
    /**
     * Return the left side of the composition
     *
     * @return Specification
     */
    public function left(): Specification;

    /**
     * Return the right side of the composition
     *
     * @return Specification
     */
    public function right(): Specification;

    /**
     * Return the operator
     *
     * @return Operator
     */
    public function operator(): Operator;
}
