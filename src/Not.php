<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Not extends Specification
{
    /**
     * Return the specification that is negated
     */
    #[\NoDiscard]
    public function specification(): Specification;
}
