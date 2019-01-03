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
     * @deprecated deprecated since version 2.0, Use withSynonym() instead.
     *
     * @param string $synonym
     *
     * @return $this
     */
    public function setSynonym($synonym)
    {
        return $this->withSynonym($synonym);
    }

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
     * @deprecated deprecated since version 2.0, Use withCoreWordName() instead.
     *
     * @param string $coreWordName
     *
     * @return $this
     */
    public function setCoreWordName($coreWordName)
    {
        return $this->withCoreWordName($coreWordName);
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
