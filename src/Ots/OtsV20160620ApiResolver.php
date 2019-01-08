<?php

namespace AlibabaCloud\Ots;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ots based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ots
 *
 * @method V20160620\BindInstance2Vpc bindInstance2Vpc(array $options = [])
 * @method V20160620\DeleteInstance deleteInstance(array $options = [])
 * @method V20160620\DeleteTags deleteTags(array $options = [])
 * @method V20160620\GetInstance getInstance(array $options = [])
 * @method V20160620\InsertInstance insertInstance(array $options = [])
 * @method V20160620\InsertTags insertTags(array $options = [])
 * @method V20160620\ListClusterType listClusterType(array $options = [])
 * @method V20160620\ListInstance listInstance(array $options = [])
 * @method V20160620\ListTags listTags(array $options = [])
 * @method V20160620\ListVpcInfoByInstance listVpcInfoByInstance(array $options = [])
 * @method V20160620\ListVpcInfoByVpc listVpcInfoByVpc(array $options = [])
 * @method V20160620\UnbindInstance2Vpc unbindInstance2Vpc(array $options = [])
 * @method V20160620\UpdateInstance updateInstance(array $options = [])
 */
class OtsV20160620ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ots\\V20160620';
}
