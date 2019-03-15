<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMinAvgConsume()
 * @method $this withMinAvgConsume($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxAvgConsume()
 * @method $this withMaxAvgConsume($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getMinAvgScanRows()
 * @method $this withMinAvgScanRows($value)
 * @method string getSqType()
 * @method $this withSqType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxAvgScanRows()
 * @method $this withMaxAvgScanRows($value)
 */
class DescribeTemplatesList extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
