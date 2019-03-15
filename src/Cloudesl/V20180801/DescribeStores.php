<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getToDate()
 * @method $this withToDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getGroups()
 * @method $this withGroups($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getBrand()
 * @method $this withBrand($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFromDate()
 * @method $this withFromDate($value)
 */
class DescribeStores extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
