<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getPerspectiveId()
 * @method $this withPerspectiveId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePerspective extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
