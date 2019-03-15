<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getReaders()
 * @method $this withReaders($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMasters()
 * @method $this withMasters($value)
 */
class UpdateMyGroupMembers extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
