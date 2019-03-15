<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getEslBarCode()
 * @method $this withEslBarCode($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 */
class BindEslDeviceShelf extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
