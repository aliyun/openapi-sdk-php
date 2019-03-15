<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getNotes()
 * @method $this withNotes($value)
 * @method string getEventMetaVersion()
 * @method $this withEventMetaVersion($value)
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getSourceARN()
 * @method $this withSourceARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleARN()
 * @method $this withRoleARN($value)
 * @method string getEventMetaName()
 * @method $this withEventMetaName($value)
 */
class AddFCTrigger extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
