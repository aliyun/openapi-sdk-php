<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api ListServerLock
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
class ListServerLock extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
