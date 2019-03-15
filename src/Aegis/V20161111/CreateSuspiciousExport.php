<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventNameRemark()
 * @method $this withEventNameRemark($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class CreateSuspiciousExport extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
