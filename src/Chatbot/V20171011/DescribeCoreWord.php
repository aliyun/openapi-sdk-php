<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCoreWord
 *
 * @method string getCoreWordName()
 */
class DescribeCoreWord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'DescribeCoreWord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $coreWordName
     *
     * @return $this
     */
    public function withCoreWordName($coreWordName)
    {
        $this->data['CoreWordName'] = $coreWordName;
        $this->options['query']['CoreWordName'] = $coreWordName;

        return $this;
    }
}
