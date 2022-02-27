<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
enum Sign
{
    case equality;
    case inequality;
    case lessThan;
    case moreThan;
    case lessThanOrEqual;
    case moreThanOrEqual;
    case isNull;
    case isNotNull;
    case startsWith;
    case endsWith;
    case contains;
    case in;
}
