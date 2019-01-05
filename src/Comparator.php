<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface Comparator extends Specification
{
    /**
     * Return the property name of an object on which the comparison is applied
     *
     * @return string
     */
    public function property(): string;

    /**
     * Return the sign used for the comparison
     *
     * @return Sign
     */
    public function sign(): Sign;

    /**
     * Return the value against which we apply the comparison
     *
     * @return mixed
     */
    public function value();
}
