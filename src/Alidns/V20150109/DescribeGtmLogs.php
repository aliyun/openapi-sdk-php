<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGtmLogs
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getKeyword()
 * @method string getStartTimestamp()
 * @method string getPageNumber()
 * @method string getEndTimestamp()
 */
class DescribeGtmLogs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'DescribeGtmLogs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @deprecated deprecated since version 2.0, Use withKeyword() instead.
     *
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        return $this->withKeyword($keyword);
    }

    /**
     * @param string $keyword
     *
     * @return $this
     */
    public function withKeyword($keyword)
    {
        $this->data['Keyword'] = $keyword;
        $this->options['query']['Keyword'] = $keyword;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTimestamp() instead.
     *
     * @param string $startTimestamp
     *
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        return $this->withStartTimestamp($startTimestamp);
    }

    /**
     * @param string $startTimestamp
     *
     * @return $this
     */
    public function withStartTimestamp($startTimestamp)
    {
        $this->data['StartTimestamp'] = $startTimestamp;
        $this->options['query']['StartTimestamp'] = $startTimestamp;

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

    /**
     * @deprecated deprecated since version 2.0, Use withEndTimestamp() instead.
     *
     * @param string $endTimestamp
     *
     * @return $this
     */
    public function setEndTimestamp($endTimestamp)
    {
        return $this->withEndTimestamp($endTimestamp);
    }

    /**
     * @param string $endTimestamp
     *
     * @return $this
     */
    public function withEndTimestamp($endTimestamp)
    {
        $this->data['EndTimestamp'] = $endTimestamp;
        $this->options['query']['EndTimestamp'] = $endTimestamp;

        return $this;
    }
}
