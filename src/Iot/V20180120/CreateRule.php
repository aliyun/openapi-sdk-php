<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 */
class CreateRule extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
