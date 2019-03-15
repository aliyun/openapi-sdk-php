<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAlertLevels()
 * @method $this withAlertLevels($value)
 * @method string getInvalidWarningKeepDays()
 * @method $this withInvalidWarningKeepDays($value)
 */
class CreateUserSetting extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
