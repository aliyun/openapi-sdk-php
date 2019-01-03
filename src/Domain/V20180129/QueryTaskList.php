<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTaskList
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTaskList extends RpcRequest
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
    public $action = 'QueryTaskList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBeginCreateTime() instead.
     *
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function setBeginCreateTime($beginCreateTime)
    {
        return $this->withBeginCreateTime($beginCreateTime);
    }

    /**
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function withBeginCreateTime($beginCreateTime)
    {
        $this->data['BeginCreateTime'] = $beginCreateTime;
        $this->options['query']['BeginCreateTime'] = $beginCreateTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndCreateTime() instead.
     *
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function setEndCreateTime($endCreateTime)
    {
        return $this->withEndCreateTime($endCreateTime);
    }

    /**
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function withEndCreateTime($endCreateTime)
    {
        $this->data['EndCreateTime'] = $endCreateTime;
        $this->options['query']['EndCreateTime'] = $endCreateTime;

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
}
