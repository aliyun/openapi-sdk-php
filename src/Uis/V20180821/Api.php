<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeHighPriorityIps describeHighPriorityIps(array $options = [])
 * @method DeleteAccessLog deleteAccessLog(array $options = [])
 * @method SetAccessLog setAccessLog(array $options = [])
 * @method DescribeUiseNodeStatus describeUiseNodeStatus(array $options = [])
 * @method DescribeUisNetworkInterfaces describeUisNetworkInterfaces(array $options = [])
 * @method DeleteUisNetworkInterface deleteUisNetworkInterface(array $options = [])
 * @method CreateUisNetworkInterface createUisNetworkInterface(array $options = [])
 * @method ModifyDnatEntry modifyDnatEntry(array $options = [])
 * @method DescribeDnatEntries describeDnatEntries(array $options = [])
 * @method DeleteDnatEntry deleteDnatEntry(array $options = [])
 * @method CreateDnatEntry createDnatEntry(array $options = [])
 * @method DescribeAreas describeAreas(array $options = [])
 * @method GetDroppedIpList getDroppedIpList(array $options = [])
 * @method DeleteUisNodeIp deleteUisNodeIp(array $options = [])
 * @method AddUisNodeIp addUisNodeIp(array $options = [])
 * @method DescribeHighPriorityIp describeHighPriorityIp(array $options = [])
 * @method ModifyHighPriorityIp modifyHighPriorityIp(array $options = [])
 * @method DeleteHighPriorityIp deleteHighPriorityIp(array $options = [])
 * @method AddHighPriorityIp addHighPriorityIp(array $options = [])
 * @method DescribeUisConnections describeUisConnections(array $options = [])
 * @method ModifyUisConnectionAttribute modifyUisConnectionAttribute(array $options = [])
 * @method DeleteUisConnection deleteUisConnection(array $options = [])
 * @method DescribeUises describeUises(array $options = [])
 * @method CreateUisConnection createUisConnection(array $options = [])
 * @method DescribeUisNodes describeUisNodes(array $options = [])
 * @method ModifyUisNodeAttribute modifyUisNodeAttribute(array $options = [])
 * @method DeleteUisNode deleteUisNode(array $options = [])
 * @method CreateUisNode createUisNode(array $options = [])
 * @method DeleteUis deleteUis(array $options = [])
 * @method CreateUis createUis(array $options = [])
 * @method ModifyUisAttribute modifyUisAttribute(array $options = [])
 */
class UisApiResolver
{
    use ApiResolverTrait;
}

class V20180821Rpc extends Rpc
{
    /** @var string */
    public $product = 'Uis';

    /** @var string */
    public $version = '2018-08-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'uis';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeHighPriorityIps extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAreaId()
 * @method $this withAreaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccessLog extends V20180821Rpc
{
}

/**
 * @method string getLogProjectName()
 * @method $this withLogProjectName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAreaId()
 * @method $this withAreaId($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetAccessLog extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUiseNodeStatus extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUisEniId()
 * @method $this withUisEniId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeUisNetworkInterfaces extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisEniId()
 * @method $this withUisEniId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteUisNetworkInterface extends V20180821Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUisNetworkInterface extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOriginalPort()
 * @method $this withOriginalPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOriginalIp()
 * @method $this withOriginalIp($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getUisDnatId()
 * @method $this withUisDnatId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDnatEntry extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisDnatId()
 * @method $this withUisDnatId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDnatEntries extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisDnatId()
 * @method $this withUisDnatId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDnatEntry extends V20180821Rpc
{
}

/**
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOriginalPort()
 * @method $this withOriginalPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOriginalIp()
 * @method $this withOriginalIp($value)
 */
class CreateDnatEntry extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAreas extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getChartDate()
 * @method $this withChartDate($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetDroppedIpList extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUisNodeIpAddress()
 * @method $this withUisNodeIpAddress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteUisNodeIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpAddrsNum()
 * @method $this withIpAddrsNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddUisNodeIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHighPriorityIp()
 * @method $this withHighPriorityIp($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeHighPriorityIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHighPriorityIp()
 * @method $this withHighPriorityIp($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHighPriorityIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHighPriorityIp()
 * @method $this withHighPriorityIp($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHighPriorityIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHighPriorityIp()
 * @method $this withHighPriorityIp($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddHighPriorityIp extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getUisConnectionId()
 * @method $this withUisConnectionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeUisConnections extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisConnectionId()
 * @method $this withUisConnectionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSslConfig()
 * @method $this withSslConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUisProtocol()
 * @method $this withUisProtocol($value)
 * @method string getGreConfig()
 * @method $this withGreConfig($value)
 */
class ModifyUisConnectionAttribute extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisConnectionId()
 * @method $this withUisConnectionId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteUisConnection extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeUises extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUisProtocol()
 * @method $this withUisProtocol($value)
 * @method string getSslConfig()
 * @method $this withSslConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGreConfig()
 * @method $this withGreConfig($value)
 */
class CreateUisConnection extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeUisNodes extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeBandwidth()
 * @method $this withUisNodeBandwidth($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyUisNodeAttribute extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteUisNode extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeBandwidth()
 * @method $this withUisNodeBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUisNodeAreaId()
 * @method $this withUisNodeAreaId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpAddrsNum()
 * @method $this withIpAddrsNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUisNode extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteUis extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUis extends V20180821Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUisId()
 * @method $this withUisId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyUisAttribute extends V20180821Rpc
{
}
