<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryEntities
 *
 * @method string getEntityName()
 * @method string getPageSize()
 * @method string getDialogId()
 * @method string getPageNumber()
 */
class QueryEntities extends RpcRequest
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
    public $action = 'QueryEntities';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withEntityName() instead.
     *
     * @param string $entityName
     *
     * @return $this
     */
    public function setEntityName($entityName)
    {
        return $this->withEntityName($entityName);
    }

    /**
     * @param string $entityName
     *
     * @return $this
     */
    public function withEntityName($entityName)
    {
        $this->data['EntityName'] = $entityName;
        $this->options['query']['EntityName'] = $entityName;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withDialogId() instead.
     *
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        return $this->withDialogId($dialogId);
    }

    /**
     * @param string $dialogId
     *
     * @return $this
     */
    public function withDialogId($dialogId)
    {
        $this->data['DialogId'] = $dialogId;
        $this->options['query']['DialogId'] = $dialogId;

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
