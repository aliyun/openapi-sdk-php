<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class UpdateMyGroups extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
