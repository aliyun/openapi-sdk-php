<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getVisitorProvince()
 * @method $this withVisitorProvince($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 */
class QueryServiceRecord extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
