<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListEventRules extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
