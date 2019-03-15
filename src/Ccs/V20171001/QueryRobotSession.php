<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getAnswerSource()
 * @method $this withAnswerSource($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSatisfaction()
 * @method $this withSatisfaction($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class QueryRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
