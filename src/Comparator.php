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
     * Return the ign used used for the comparison
     *
     * May it be "==", "in", ">" or anything you can think of
     *
     * @return string
     */
    public function sign(): string;

    /**
     * Return the value against which we apply the comparison
     *
     * @return mixed
     */
    public function value();
}
