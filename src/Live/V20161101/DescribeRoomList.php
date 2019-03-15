<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAnchorId()
 * @method $this withAnchorId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRoomStatus()
 * @method $this withRoomStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRoomList extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
