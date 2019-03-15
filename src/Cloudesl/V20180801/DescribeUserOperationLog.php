<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getOperateUserId()
 * @method $this withOperateUserId($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getOperateStatus()
 * @method $this withOperateStatus($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromDate()
 * @method $this withFromDate($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getToDate()
 * @method $this withToDate($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeUserOperationLog extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
