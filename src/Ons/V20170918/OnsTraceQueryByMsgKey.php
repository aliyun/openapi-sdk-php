<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getMsgKey()
 * @method $this withMsgKey($value)
 */
class OnsTraceQueryByMsgKey extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
