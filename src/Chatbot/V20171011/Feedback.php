<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getFeedback()
 * @method $this withFeedback($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 */
class Feedback extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
