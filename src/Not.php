<?php
declare(strict_types = 1);

namespace Innmind\Specification;

interface Not extends Specification
{
    /**
     * Return the specification that is negated
     */
    public function specification(): Specification;
}
