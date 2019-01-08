<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryKnowledges
 *
 * @method string getPageSize()
 * @method string getCoreWordName()
 * @method string getKnowledgeTitle()
 * @method string getPageNumber()
 */
class QueryKnowledges extends RpcRequest
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
    public $action = 'QueryKnowledges';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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

    /**
     * @param string $knowledgeTitle
     *
     * @return $this
     */
    public function withKnowledgeTitle($knowledgeTitle)
    {
        $this->data['KnowledgeTitle'] = $knowledgeTitle;
        $this->options['query']['KnowledgeTitle'] = $knowledgeTitle;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
