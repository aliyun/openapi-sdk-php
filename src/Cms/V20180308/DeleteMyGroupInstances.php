<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMyGroupInstances extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
