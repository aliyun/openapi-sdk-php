<?php

namespace AlibabaCloud\ITaaS\V20170505;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method UpdateRoomName updateRoomName(array $options = [])
 * @method RemoveIPSegment removeIPSegment(array $options = [])
 * @method RemoveRegisterBox removeRegisterBox(array $options = [])
 * @method SetWelcomePageURI setWelcomePageURI(array $options = [])
 * @method UpdateEnterpriseConfig updateEnterpriseConfig(array $options = [])
 * @method UpdateIPSegment updateIPSegment(array $options = [])
 * @method GetRegisterBoxList getRegisterBoxList(array $options = [])
 * @method GetRegisterBoxNumber getRegisterBoxNumber(array $options = [])
 * @method GetRegisterHistoryList getRegisterHistoryList(array $options = [])
 * @method GetWelcomePageURI getWelcomePageURI(array $options = [])
 * @method RemoveBoxCode removeBoxCode(array $options = [])
 * @method GetBoxCodeList getBoxCodeList(array $options = [])
 * @method GetEnterpriseConfig getEnterpriseConfig(array $options = [])
 * @method GetIPSegmentsList getIPSegmentsList(array $options = [])
 * @method AddIPSegment addIPSegment(array $options = [])
 * @method CreateBoxCode createBoxCode(array $options = [])
 * @method CreateEnterprise createEnterprise(array $options = [])
 */
class ITaaSApiResolver
{
    use ApiResolverTrait;
}

class V20170505Rpc extends Rpc
{
    /** @var string */
    public $product = 'ITaaS';

    /** @var string */
    public $version = '2017-05-05';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getDrname()
 * @method $this withDrname($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getScreencode()
 * @method $this withScreencode($value)
 */
class UpdateRoomName extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class RemoveIPSegment extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getDrsessionid()
 * @method $this withDrsessionid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class RemoveRegisterBox extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getWelcomeuri()
 * @method $this withWelcomeuri($value)
 */
class SetWelcomePageURI extends V20170505Rpc
{
}

/**
 * @method string getConfigKey()
 * @method $this withConfigKey($value)
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class UpdateEnterpriseConfig extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getIpsegment()
 * @method $this withIpsegment($value)
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class UpdateIPSegment extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetRegisterBoxList extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetRegisterBoxNumber extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetRegisterHistoryList extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetWelcomePageURI extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class RemoveBoxCode extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetBoxCodeList extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetEnterpriseConfig extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class GetIPSegmentsList extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getIpsegment()
 * @method $this withIpsegment($value)
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class AddIPSegment extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class CreateBoxCode extends V20170505Rpc
{
}

/**
 * @method string getClientappid()
 * @method $this withClientappid($value)
 * @method string getServiceFlag()
 * @method $this withServiceFlag($value)
 * @method string getSysfrom()
 * @method $this withSysfrom($value)
 * @method string getBoxNumber()
 * @method $this withBoxNumber($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 */
class CreateEnterprise extends V20170505Rpc
{
}
