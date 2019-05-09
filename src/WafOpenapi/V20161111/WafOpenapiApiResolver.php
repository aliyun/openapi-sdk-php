<?php

namespace AlibabaCloud\WafOpenapi\V20161111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 */
class WafOpenapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'waf-openapi';

    /** @var string */
    public $version = '2016-11-11';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExtBandwidth()
 * @method $this withExtBandwidth($value)
 * @method string getPackageCode()
 * @method $this withPackageCode($value)
 * @method string getExtDomainPackage()
 * @method $this withExtDomainPackage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeInstance extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseInstance extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExtBandwidth()
 * @method $this withExtBandwidth($value)
 * @method string getPackageCode()
 * @method $this withPackageCode($value)
 * @method string getExtDomainPackage()
 * @method $this withExtDomainPackage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 */
class CreateInstance extends Rpc
{
}
