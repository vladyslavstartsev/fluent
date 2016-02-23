<?php

namespace LaravelDoctrine\Fluent\Extensions\Gedmo\Hints;

use LaravelDoctrine\Fluent\Extensions\Gedmo\Blameable;
use LaravelDoctrine\Fluent\Extensions\Gedmo\IpTraceable;
use LaravelDoctrine\Fluent\Extensions\Gedmo\Sluggable;
use LaravelDoctrine\Fluent\Extensions\Gedmo\Softdeleteable;
use LaravelDoctrine\Fluent\Extensions\Gedmo\Timestampable;

/**
 * Trait only meant for type hinting
 *
 * @method Blameable      blameable()
 * @method IpTraceable    ipTraceable()
 * @method void           locale()
 * @method Sluggable      sluggable(mixed $fields)
 * @method Softdeleteable softDelete()
 * @method void           sortableGroup()
 * @method void           sortablePosition()
 * @method Timestampable  timestampable()
 * @method void           translatable()
 * @method void           treeLeft()
 * @method void           treeLevel()
 * @method void           treeLockTime()
 * @method void           treeParent()
 * @method void           treePath($separator = '|')
 * @method void           treePathHash()
 * @method void           treePathSource()
 * @method void           treeRight()
 * @method void           treeRoot()
 * @method void           asFileMimeType()
 * @method void           asFileName()
 * @method void           asFilePath()
 * @method void           asFileSize()
 * @method void           versioned()
 */
trait GedmoFieldHints
{
}
