<?php

namespace AlibabaCloud\Alimt;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Alimt based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Alimt
 *
 * @method static V20181012\TranslateECommerce translateECommerce(array $options = [])
 * @method static V20181012\TranslateGeneral translateGeneral(array $options = [])
 */
class AlimtV20181012
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Alimt\\V20181012';
}
