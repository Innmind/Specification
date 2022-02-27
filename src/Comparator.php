<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Comparator extends Specification
{
    /**
     * @return non-empty-string
     */
    public function property(): string;
    public function sign(): Sign;

    /**
     * @return mixed
     */
    public function value();
}
