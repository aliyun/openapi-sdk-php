<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class CreateMountTarget extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
