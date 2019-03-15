<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeRenewalPrice extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
