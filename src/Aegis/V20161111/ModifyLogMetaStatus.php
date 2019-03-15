<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyLogMetaStatus extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
