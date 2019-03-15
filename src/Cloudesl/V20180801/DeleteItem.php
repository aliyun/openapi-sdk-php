<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DeleteItem extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
