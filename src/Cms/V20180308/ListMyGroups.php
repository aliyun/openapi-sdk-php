<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getSelectContactGroups()
 * @method $this withSelectContactGroups($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class ListMyGroups extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
