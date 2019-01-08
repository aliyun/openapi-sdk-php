<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTaskInfoHistory
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getTaskNoCursor()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getCreateTimeCursor()
 */
class QueryTaskInfoHistory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'QueryTaskInfoHistory';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $taskNoCursor
     *
     * @return $this
     */
    public function withTaskNoCursor($taskNoCursor)
    {
        $this->data['TaskNoCursor'] = $taskNoCursor;
        $this->options['query']['TaskNoCursor'] = $taskNoCursor;

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
     * @param string $createTimeCursor
     *
     * @return $this
     */
    public function withCreateTimeCursor($createTimeCursor)
    {
        $this->data['CreateTimeCursor'] = $createTimeCursor;
        $this->options['query']['CreateTimeCursor'] = $createTimeCursor;

        return $this;
    }
}
