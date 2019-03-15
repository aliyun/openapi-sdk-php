<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getIntentName()
 * @method $this withIntentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryIntents extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
