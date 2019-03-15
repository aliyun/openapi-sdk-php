<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 */
class UpdateMediaWorkflowTriggerMode extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
