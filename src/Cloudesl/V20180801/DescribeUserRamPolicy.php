<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class DescribeUserRamPolicy extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
