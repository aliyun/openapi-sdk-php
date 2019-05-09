<?php

namespace AlibabaCloud\ITaaS\V20170505;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateRoomName updateRoomName(array $options = [])
 * @method UpdateIPSegment updateIPSegment(array $options = [])
 * @method UpdateEnterpriseConfig updateEnterpriseConfig(array $options = [])
 * @method SetWelcomePageURI setWelcomePageURI(array $options = [])
 * @method RemoveRegisterBox removeRegisterBox(array $options = [])
 * @method RemoveIPSegment removeIPSegment(array $options = [])
 * @method RemoveBoxCode removeBoxCode(array $options = [])
 * @method GetWelcomePageURI getWelcomePageURI(array $options = [])
 * @method GetRegisterHistoryList getRegisterHistoryList(array $options = [])
 * @method GetRegisterBoxNumber getRegisterBoxNumber(array $options = [])
 * @method GetRegisterBoxList getRegisterBoxList(array $options = [])
 * @method GetIPSegmentsList getIPSegmentsList(array $options = [])
 * @method GetEnterpriseConfig getEnterpriseConfig(array $options = [])
 * @method GetBoxCodeList getBoxCodeList(array $options = [])
 * @method CreateEnterprise createEnterprise(array $options = [])
 * @method CreateBoxCode createBoxCode(array $options = [])
 * @method AddIPSegment addIPSegment(array $options = [])
 */
class ITaaSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
class UpdateRoomName extends Rpc
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
class UpdateIPSegment extends Rpc
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
class UpdateEnterpriseConfig extends Rpc
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
class SetWelcomePageURI extends Rpc
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
class RemoveRegisterBox extends Rpc
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
class RemoveIPSegment extends Rpc
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
class RemoveBoxCode extends Rpc
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
class GetWelcomePageURI extends Rpc
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
class GetRegisterHistoryList extends Rpc
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
class GetRegisterBoxNumber extends Rpc
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
class GetRegisterBoxList extends Rpc
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
class GetIPSegmentsList extends Rpc
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
class GetEnterpriseConfig extends Rpc
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
class GetBoxCodeList extends Rpc
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
class CreateEnterprise extends Rpc
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
class CreateBoxCode extends Rpc
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
class AddIPSegment extends Rpc
{
}
