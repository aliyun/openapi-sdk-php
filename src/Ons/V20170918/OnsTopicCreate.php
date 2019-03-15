<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getQueueNum()
 * @method $this withQueueNum($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getQps()
 * @method $this withQps($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getAppkey()
 * @method $this withAppkey($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class OnsTopicCreate extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
