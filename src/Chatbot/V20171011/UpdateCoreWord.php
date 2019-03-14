<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api UpdateCoreWord
 *
 * @method string getCoreWordName()
 * @method string getCoreWordCode()
 */
class UpdateCoreWord extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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

    /**
     * @param string $coreWordCode
     *
     * @return $this
     */
    public function withCoreWordCode($coreWordCode)
    {
        $this->data['CoreWordCode'] = $coreWordCode;
        $this->options['query']['CoreWordCode'] = $coreWordCode;

        return $this;
    }
}
