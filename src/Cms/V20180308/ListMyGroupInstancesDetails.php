<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMyGroupInstancesDetails extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
