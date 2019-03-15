<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getShowDelService()
 * @method $this withShowDelService($value)
 * @method string getCasShowType()
 * @method $this withCasShowType($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindServiceList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';
}
