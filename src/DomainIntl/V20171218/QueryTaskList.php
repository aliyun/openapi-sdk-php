<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api QueryTaskList
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTaskList extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
