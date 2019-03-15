<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteZoneRecord extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

    public $serviceCode = 'pvtz';
}
