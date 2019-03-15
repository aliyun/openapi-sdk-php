<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getRegex()
 * @method $this withRegex($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getMembers()
 * @method $this withMembers($value)
 * @method string getEntityName()
 * @method $this withEntityName($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 */
class CreateEntity extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
