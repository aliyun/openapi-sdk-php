<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListServerLock
 *
 * @method string getLockProductId()
 * @method string getEndStartDate()
 * @method string getServerLockStatus()
 * @method string getStartExpireDate()
 * @method string getDomainName()
 * @method string getPageSize()
 * @method string getUserClientIp()
 * @method string getEndExpireDate()
 * @method string getPageNum()
 * @method string getLang()
 * @method string getBeginStartDate()
 */
class ListServerLock extends RpcRequest
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
    public $action = 'ListServerLock';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withLockProductId() instead.
     *
     * @param string $lockProductId
     *
     * @return $this
     */
    public function setLockProductId($lockProductId)
    {
        return $this->withLockProductId($lockProductId);
    }

    /**
     * @param string $lockProductId
     *
     * @return $this
     */
    public function withLockProductId($lockProductId)
    {
        $this->data['LockProductId'] = $lockProductId;
        $this->options['query']['LockProductId'] = $lockProductId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndStartDate() instead.
     *
     * @param string $endStartDate
     *
     * @return $this
     */
    public function setEndStartDate($endStartDate)
    {
        return $this->withEndStartDate($endStartDate);
    }

    /**
     * @param string $endStartDate
     *
     * @return $this
     */
    public function withEndStartDate($endStartDate)
    {
        $this->data['EndStartDate'] = $endStartDate;
        $this->options['query']['EndStartDate'] = $endStartDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServerLockStatus() instead.
     *
     * @param string $serverLockStatus
     *
     * @return $this
     */
    public function setServerLockStatus($serverLockStatus)
    {
        return $this->withServerLockStatus($serverLockStatus);
    }

    /**
     * @param string $serverLockStatus
     *
     * @return $this
     */
    public function withServerLockStatus($serverLockStatus)
    {
        $this->data['ServerLockStatus'] = $serverLockStatus;
        $this->options['query']['ServerLockStatus'] = $serverLockStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartExpireDate() instead.
     *
     * @param string $startExpireDate
     *
     * @return $this
     */
    public function setStartExpireDate($startExpireDate)
    {
        return $this->withStartExpireDate($startExpireDate);
    }

    /**
     * @param string $startExpireDate
     *
     * @return $this
     */
    public function withStartExpireDate($startExpireDate)
    {
        $this->data['StartExpireDate'] = $startExpireDate;
        $this->options['query']['StartExpireDate'] = $startExpireDate;

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
     * @deprecated deprecated since version 2.0, Use withEndExpireDate() instead.
     *
     * @param string $endExpireDate
     *
     * @return $this
     */
    public function setEndExpireDate($endExpireDate)
    {
        return $this->withEndExpireDate($endExpireDate);
    }

    /**
     * @param string $endExpireDate
     *
     * @return $this
     */
    public function withEndExpireDate($endExpireDate)
    {
        $this->data['EndExpireDate'] = $endExpireDate;
        $this->options['query']['EndExpireDate'] = $endExpireDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

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
     * @deprecated deprecated since version 2.0, Use withBeginStartDate() instead.
     *
     * @param string $beginStartDate
     *
     * @return $this
     */
    public function setBeginStartDate($beginStartDate)
    {
        return $this->withBeginStartDate($beginStartDate);
    }

    /**
     * @param string $beginStartDate
     *
     * @return $this
     */
    public function withBeginStartDate($beginStartDate)
    {
        $this->data['BeginStartDate'] = $beginStartDate;
        $this->options['query']['BeginStartDate'] = $beginStartDate;

        return $this;
    }
}
