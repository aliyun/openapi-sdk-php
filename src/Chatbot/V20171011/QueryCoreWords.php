<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getSynonym()
 * @method $this withSynonym($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryCoreWords extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
