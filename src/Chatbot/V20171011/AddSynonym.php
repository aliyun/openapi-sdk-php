<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api AddSynonym
 *
 * @method string getSynonym()
 * @method string getCoreWordName()
 */
class AddSynonym extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
