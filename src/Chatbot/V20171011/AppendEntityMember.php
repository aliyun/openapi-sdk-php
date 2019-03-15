<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getMember()
 * @method $this withMember($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 */
class AppendEntityMember extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
