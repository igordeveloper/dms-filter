<?php
declare(strict_types=1);

namespace DMS\Filter\Rules;

/**
 * Digits Rule
 *
 * @Annotation
 */
#[\Attribute]
class Digits extends RegExp
{
    /**
     * Allow Whitespace or not
     */
    public bool $allowWhitespace = true;

    public function getDefaultOption(): ?string
    {
        return 'allowWhitespace';
    }
}
