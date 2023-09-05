<?php

declare(strict_types=1);

namespace DMS\Filter\Rules;

use Attribute;

/**
 * Laminas Rule
 *
 * Allows the use for Laminas Filters
 *
 * @Annotation
 */
#[Attribute]
class Laminas extends Rule
{
    /**
     * Laminas\Filter class, can be either a FQN or just Boolean for example
     */
    public string $class;

    /**
     * Array of options to be passed into the Laminas Filter
     *
     * @var mixed[]
     */
    public array $laminasOptions = [];

    public function getDefaultOption(): string|null
    {
        return 'class';
    }
}
