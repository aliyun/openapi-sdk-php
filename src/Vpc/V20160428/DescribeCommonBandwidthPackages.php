<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCommonBandwidthPackages extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
