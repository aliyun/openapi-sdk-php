<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getMaxBandWidth()
 * @method $this withMaxBandWidth($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getReceiverTown()
 * @method $this withReceiverTown($value)
 * @method string getReceiverDistrict()
 * @method $this withReceiverDistrict($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getReceiverAddress()
 * @method $this withReceiverAddress($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBuyerMessage()
 * @method $this withBuyerMessage($value)
 * @method string getHardWareSpec()
 * @method $this withHardWareSpec($value)
 * @method string getReceiverEmail()
 * @method $this withReceiverEmail($value)
 * @method string getReceiverState()
 * @method $this withReceiverState($value)
 * @method string getReceiverCity()
 * @method $this withReceiverCity($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getReceiverMobile()
 * @method $this withReceiverMobile($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReceiverPhone()
 * @method $this withReceiverPhone($value)
 * @method string getReceiverName()
 * @method $this withReceiverName($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getReceiverCountry()
 * @method $this withReceiverCountry($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 * @method string getReceiverZip()
 * @method $this withReceiverZip($value)
 */
class CreateSmartAccessGateway extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';
}
