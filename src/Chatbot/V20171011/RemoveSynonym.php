<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveSynonym
 *
 * @method string getSynonym()
 * @method string getCoreWordName()
 */
class RemoveSynonym extends RpcRequest
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
    public $action = 'RemoveSynonym';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $synonym
     *
     * @return $this
     */
    public function withSynonym($synonym)
    {
        $this->data['Synonym'] = $synonym;
        $this->options['query']['Synonym'] = $synonym;

        return $this;
    }

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
