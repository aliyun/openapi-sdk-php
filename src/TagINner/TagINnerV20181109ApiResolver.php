<?php

namespace AlibabaCloud\TagINner;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the TagINner based on the method name as the Api name.
 *
 * @package   AlibabaCloud\TagINner
 *
 * @method V20181109\InnerListTagResources innerListTagResources(array $options = [])
 * @method V20181109\InnerTagResources innerTagResources(array $options = [])
 * @method V20181109\InnerUntagResources innerUntagResources(array $options = [])
 * @method V20181109\ListTagKeys listTagKeys(array $options = [])
 * @method V20181109\ListTagValues listTagValues(array $options = [])
 * @method V20181109\QueryServiceCode queryServiceCode(array $options = [])
 * @method V20181109\TagResourcesSystemTags tagResourcesSystemTags(array $options = [])
 */
class TagINnerV20181109ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\TagINner\\V20181109';
}
