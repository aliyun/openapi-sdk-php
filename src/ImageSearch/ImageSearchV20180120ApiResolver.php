<?php

namespace AlibabaCloud\ImageSearch;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ImageSearch based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ImageSearch
 *
 * @method V20180120\AddItem addItem(array $options = [])
 * @method V20180120\DeleteItem deleteItem(array $options = [])
 * @method V20180120\SearchItem searchItem(array $options = [])
 */
class ImageSearchV20180120ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ImageSearch\\V20180120';
}
