<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListAlarmHistory extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
