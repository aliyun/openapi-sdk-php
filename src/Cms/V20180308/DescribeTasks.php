<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTasks extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
