<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTimeStart()
 * @method $this withTimeStart($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getParentEventTypes()
 * @method $this withParentEventTypes($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ExportSuspEvents extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
