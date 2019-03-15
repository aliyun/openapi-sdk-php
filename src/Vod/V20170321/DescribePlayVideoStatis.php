<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayVideoStatis extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
