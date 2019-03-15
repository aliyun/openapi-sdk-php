<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getRemoveType()
 * @method $this withRemoveType($value)
 * @method string getMember()
 * @method $this withMember($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class RemoveEntityMember extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
