<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTaskDetailHistory
 *
 * @method string getTaskStatus()
 * @method string getUserClientIp()
 * @method string getTaskNo()
 * @method string getDomainName()
 * @method string getPageSize()
 * @method string getTaskDetailNoCursor()
 * @method string getLang()
 * @method string getDomainNameCursor()
 */
class QueryTaskDetailHistory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'QueryTaskDetailHistory';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTaskStatus() instead.
     *
     * @param string $taskStatus
     *
     * @return $this
     */
    public function setTaskStatus($taskStatus)
    {
        return $this->withTaskStatus($taskStatus);
    }

    /**
     * @param string $taskStatus
     *
     * @return $this
     */
    public function withTaskStatus($taskStatus)
    {
        $this->data['TaskStatus'] = $taskStatus;
        $this->options['query']['TaskStatus'] = $taskStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskNo() instead.
     *
     * @param string $taskNo
     *
     * @return $this
     */
    public function setTaskNo($taskNo)
    {
        return $this->withTaskNo($taskNo);
    }

    /**
     * @param string $taskNo
     *
     * @return $this
     */
    public function withTaskNo($taskNo)
    {
        $this->data['TaskNo'] = $taskNo;
        $this->options['query']['TaskNo'] = $taskNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
     * @deprecated deprecated since version 2.0, Use withTaskDetailNoCursor() instead.
     *
     * @param string $taskDetailNoCursor
     *
     * @return $this
     */
    public function setTaskDetailNoCursor($taskDetailNoCursor)
    {
        return $this->withTaskDetailNoCursor($taskDetailNoCursor);
    }

    /**
     * @param string $taskDetailNoCursor
     *
     * @return $this
     */
    public function withTaskDetailNoCursor($taskDetailNoCursor)
    {
        $this->data['TaskDetailNoCursor'] = $taskDetailNoCursor;
        $this->options['query']['TaskDetailNoCursor'] = $taskDetailNoCursor;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainNameCursor() instead.
     *
     * @param string $domainNameCursor
     *
     * @return $this
     */
    public function setDomainNameCursor($domainNameCursor)
    {
        return $this->withDomainNameCursor($domainNameCursor);
    }

    /**
     * @param string $domainNameCursor
     *
     * @return $this
     */
    public function withDomainNameCursor($domainNameCursor)
    {
        $this->data['DomainNameCursor'] = $domainNameCursor;
        $this->options['query']['DomainNameCursor'] = $domainNameCursor;

        return $this;
    }
}
