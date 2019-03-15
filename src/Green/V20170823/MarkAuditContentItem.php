<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getAuditIllegalReasons()
 * @method $this withAuditIllegalReasons($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class MarkAuditContentItem extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
