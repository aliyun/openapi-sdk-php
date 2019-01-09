<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ots based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ots\V20160620
 *
 * @method BindInstance2Vpc bindInstance2Vpc(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteTags deleteTags(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method InsertInstance insertInstance(array $options = [])
 * @method InsertTags insertTags(array $options = [])
 * @method ListClusterType listClusterType(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListVpcInfoByInstance listVpcInfoByInstance(array $options = [])
 * @method ListVpcInfoByVpc listVpcInfoByVpc(array $options = [])
 * @method UnbindInstance2Vpc unbindInstance2Vpc(array $options = [])
 * @method UpdateInstance updateInstance(array $options = [])
 */
class OtsApiResolver
{
    use ApiResolverTrait;
}
