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
 * @method string getBlockTime()
 * @method $this withBlockTime($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getAlertTime()
 * @method $this withAlertTime($value)
 * @method string getContacts()
 * @method $this withContacts($value)
 */
class OnsWarnCreate extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
