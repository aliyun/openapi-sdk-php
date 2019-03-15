<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVertexId()
 * @method $this withVertexId($value)
 * @method string getStartType()
 * @method $this withStartType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeTraceInfoNodeList extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
