<?php

namespace AlibabaCloud\Snsuapi\V20180709;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method MobileStatusQuery mobileStatusQuery(array $options = [])
 * @method MobileStopSpeedUp mobileStopSpeedUp(array $options = [])
 * @method MobileStartSpeedUp mobileStartSpeedUp(array $options = [])
 * @method BandOfferOrder bandOfferOrder(array $options = [])
 * @method BandStartSpeedUp bandStartSpeedUp(array $options = [])
 * @method BandStatusQuery bandStatusQuery(array $options = [])
 * @method BandStopSpeedUp bandStopSpeedUp(array $options = [])
 * @method OrderSnsuKdjs orderSnsuKdjs(array $options = [])
 * @method BandPrecheck bandPrecheck(array $options = [])
 */
class SnsuapiApiResolver
{
    use ApiResolverTrait;
}

class V20180709Rpc extends Rpc
{
    /** @var string */
    public $product = 'Snsuapi';

    /** @var string */
    public $version = '2018-07-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'snsuapi';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCorrelationId()
 * @method $this withCorrelationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MobileStatusQuery extends V20180709Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCorrelationId()
 * @method $this withCorrelationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MobileStopSpeedUp extends V20180709Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getDestinationIpAddress()
 * @method $this withDestinationIpAddress($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getPublicPort()
 * @method $this withPublicPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class MobileStartSpeedUp extends V20180709Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandId()
 * @method $this withBandId($value)
 * @method string getOfferId()
 * @method $this withOfferId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BandOfferOrder extends V20180709Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getBandId()
 * @method $this withBandId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetBandwidth()
 * @method $this withTargetBandwidth($value)
 * @method string getBandScene()
 * @method $this withBandScene($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class BandStartSpeedUp extends V20180709Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandId()
 * @method $this withBandId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BandStatusQuery extends V20180709Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getBandId()
 * @method $this withBandId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class BandStopSpeedUp extends V20180709Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandId()
 * @method $this withBandId($value)
 * @method string getOfferId()
 * @method $this withOfferId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OrderSnsuKdjs extends V20180709Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BandPrecheck extends V20180709Rpc
{
}
