<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSerialNumbers()
 * @method $this withSerialNumbers($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class NodeList extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
