<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCoreWordName()
 * @method $this withCoreWordName($value)
 * @method string getKnowledgeTitle()
 * @method $this withKnowledgeTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class QueryKnowledges extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';
}
