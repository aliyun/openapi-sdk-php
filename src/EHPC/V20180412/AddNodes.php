<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEcsChargeType()
 * @method $this withEcsChargeType($value)
 * @method string getCreateMode()
 * @method $this withCreateMode($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 */
class AddNodes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
