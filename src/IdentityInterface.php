<?php

namespace PhpCleanArch\Identity;

use Stringable;
use PhpCleanArch\ValueObjects\ValueObjectInterface;

/**
 * Some unique identity for our entities, should be unique in every collection of the same type
 *
 * @see \Stringagle
 * @see \MyCleanArchBootstrap\Domain\ValueObjects\ValueObjectInterface
 */
interface IdentityInterface extends Stringable, ValueObjectInterface
{
    /**
    * @return int|string - the representation of the identity, in its native type
    */
    public function nativeFormat(): int|string;
}
