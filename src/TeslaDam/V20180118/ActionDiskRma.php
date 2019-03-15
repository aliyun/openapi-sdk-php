<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Rpc;

/**
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getDiskSlot()
 * @method $this withDiskSlot($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getDiskMount()
 * @method $this withDiskMount($value)
 * @method string getDiskReason()
 * @method $this withDiskReason($value)
 * @method string getDiskSn()
 * @method $this withDiskSn($value)
 */
class ActionDiskRma extends Rpc
{
    public $product = 'TeslaDam';

    public $version = '2018-01-18';
}
