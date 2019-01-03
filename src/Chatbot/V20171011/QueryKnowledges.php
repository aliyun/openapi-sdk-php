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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withKnowledgeTitle() instead.
     *
     * @param string $knowledgeTitle
     *
     * @return $this
     */
    public function setKnowledgeTitle($knowledgeTitle)
    {
        return $this->withKnowledgeTitle($knowledgeTitle);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
