<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsSubscriptionSearch extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
