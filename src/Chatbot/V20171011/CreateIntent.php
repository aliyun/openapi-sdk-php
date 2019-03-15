<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getIntentDefinition()
 * @method $this withIntentDefinition($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class CreateIntent extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
