<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * @method string getErrorType()
 * @method $this withErrorType($value)
 * @method string getToAlarmTime()
 * @method $this withToAlarmTime($value)
 * @method string getAlarmType()
 * @method $this withAlarmType($value)
 * @method string getFromAlarmTime()
 * @method $this withFromAlarmTime($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStoreId()
 * @method $this withStoreId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAlarmStatus()
 * @method $this withAlarmStatus($value)
 */
class DescribeAlarms extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';
}
