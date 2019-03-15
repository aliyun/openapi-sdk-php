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
 * @method string getProducerId()
 * @method $this withProducerId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class OnsMessageSend extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
