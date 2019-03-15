<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBePromotion()
 * @method $this withBePromotion($value)
 * @method string getShelfCode()
 * @method $this withShelfCode($value)
 * @method string getItemTitle()
 * @method $this withItemTitle($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getSkuId()
 * @method $this withSkuId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getItemBarCode()
 * @method $this withItemBarCode($value)
 */
class DescribeItems extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
