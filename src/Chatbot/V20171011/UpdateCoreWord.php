<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getCoreWordCode()
 * @method $this withCoreWordCode($value)
 */
class UpdateCoreWord extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
