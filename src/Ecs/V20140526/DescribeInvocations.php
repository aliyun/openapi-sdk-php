<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInvokeStatus()
 * @method $this withInvokeStatus($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommandType()
 * @method $this withCommandType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInvocations extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
