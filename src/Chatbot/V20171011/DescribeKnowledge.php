<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 */
class DescribeKnowledge extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
