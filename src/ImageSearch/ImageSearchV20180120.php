<?php

namespace AlibabaCloud\ImageSearch;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ImageSearch based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ImageSearch
 *
 * @method static V20180120\AddItem addItem(array $options = [])
 * @method static V20180120\DeleteItem deleteItem(array $options = [])
 * @method static V20180120\SearchItem searchItem(array $options = [])
 */
class ImageSearchV20180120
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ImageSearch\\V20180120';
}
