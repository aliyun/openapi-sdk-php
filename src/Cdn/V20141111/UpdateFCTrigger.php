<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getNotes()
 * @method $this withNotes($value)
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getSourceARN()
 * @method $this withSourceARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleARN()
 * @method $this withRoleARN($value)
 * @method string getFunctionARN()
 * @method $this withFunctionARN($value)
 */
class UpdateFCTrigger extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
