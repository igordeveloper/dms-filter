<?php

declare(strict_types=1);

namespace DMS\Filter\Rules;

use Attribute;

/**
 * StripTags Rule
 *
 * @Annotation
 */
#[Attribute]
class StripTags extends Rule
{
    /**
     * String of allowed tags. Ex: <b><i><a>
     */
    public string|null $allowed = null;

    public function getDefaultOption(): string|null
    {
        return 'allowed';
    }
}
