<?php

namespace AlibabaCloud\Uis;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Uis based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Uis
 *
 * @method V20180821\AddHighPriorityIp addHighPriorityIp(array $options = [])
 * @method V20180821\AddUisNodeIp addUisNodeIp(array $options = [])
 * @method V20180821\CreateUis createUis(array $options = [])
 * @method V20180821\CreateUisConnection createUisConnection(array $options = [])
 * @method V20180821\CreateUisNode createUisNode(array $options = [])
 * @method V20180821\DeleteHighPriorityIp deleteHighPriorityIp(array $options = [])
 * @method V20180821\DeleteUis deleteUis(array $options = [])
 * @method V20180821\DeleteUisConnection deleteUisConnection(array $options = [])
 * @method V20180821\DeleteUisNode deleteUisNode(array $options = [])
 * @method V20180821\DeleteUisNodeIp deleteUisNodeIp(array $options = [])
 * @method V20180821\DescribeHighPriorityIp describeHighPriorityIp(array $options = [])
 * @method V20180821\DescribeUisConnections describeUisConnections(array $options = [])
 * @method V20180821\DescribeUisNodes describeUisNodes(array $options = [])
 * @method V20180821\DescribeUises describeUises(array $options = [])
 * @method V20180821\GetDroppedIpList getDroppedIpList(array $options = [])
 * @method V20180821\ModifyHighPriorityIp modifyHighPriorityIp(array $options = [])
 * @method V20180821\ModifyUisAttribute modifyUisAttribute(array $options = [])
 * @method V20180821\ModifyUisConnectionAttribute modifyUisConnectionAttribute(array $options = [])
 * @method V20180821\ModifyUisNodeAttribute modifyUisNodeAttribute(array $options = [])
 */
class UisV20180821ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Uis\\V20180821';
}
