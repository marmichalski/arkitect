<?php
declare(strict_types=1);

namespace Arkitect\Expression;

use Arkitect\Analyzer\ClassDescription;

/**
 * A class implementing this interface represents a property a php class may or may not have.
 *
 * @example ResideInNamespace Expression tells if a class is in a particular namespace
 * @example HaveNameMatching tells if a class has a name matching a pattern
 */
interface Expression
{
    /**
     * Returns a human readable description of the expression
     * $theClass can be used to add contextual information.
     */
    public function describe(ClassDescription $theClass): string;

    /**
     * Evaluates the expression for the class passed as parameter.
     * It should return true if $theClass has the property, false otherwise.
     */
    public function evaluate(ClassDescription $theClass): bool;
}