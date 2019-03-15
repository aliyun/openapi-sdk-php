<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getEslStatus()
 * @method $this withEslStatus($value)
 * @method string getToBatteryLevel()
 * @method $this withToBatteryLevel($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromBatteryLevel()
 * @method $this withFromBatteryLevel($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBeBind()
 * @method $this withBeBind($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeEslDevices extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
