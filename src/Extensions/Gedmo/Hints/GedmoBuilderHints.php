<?php

namespace LaravelDoctrine\Fluent\Extensions\Gedmo\Hints;

use LaravelDoctrine\Fluent\Extensions\Gedmo\Softdeleteable;
use LaravelDoctrine\Fluent\Extensions\Gedmo\TranslationClass;
use LaravelDoctrine\Fluent\Extensions\Gedmo\Tree;
use LaravelDoctrine\Fluent\Extensions\Gedmo\Uploadable;

/**
 * Trait only meant for type hinting
 * 
 * @method void             loggable(string $logEntry = null)
 * @method Softdeleteable   softDelete(string $fieldName = 'deletedAt', string $type = 'dateTime')
 * @method void             timestamps(string $createdAt = 'createdAt', string $updatedAt = 'updatedAt', string $type = 'dateTime')
 * @method TranslationClass translationClass(string $class)
 * @method Tree             tree(string $strategy = 'nested')
 * @method Uploadable       uploadable()
 */
trait GedmoBuilderHints
{
}
