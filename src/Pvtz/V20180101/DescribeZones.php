<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeZones
 *
 * @method string getQueryVpcId()
 * @method string getPageSize()
 * @method string getUserClientIp()
 * @method string getSearchMode()
 * @method string getLang()
 * @method string getKeyword()
 * @method string getPageNumber()
 * @method string getQueryRegionId()
 */
class DescribeZones extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

    public $serviceCode = 'pvtz';

    /**
     * @param string $queryVpcId
     *
     * @return $this
     */
    public function withQueryVpcId($queryVpcId)
    {
        $this->data['QueryVpcId'] = $queryVpcId;
        $this->options['query']['QueryVpcId'] = $queryVpcId;

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
     * @param string $searchMode
     *
     * @return $this
     */
    public function withSearchMode($searchMode)
    {
        $this->data['SearchMode'] = $searchMode;
        $this->options['query']['SearchMode'] = $searchMode;

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
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function withQueryRegionId($queryRegionId)
    {
        $this->data['QueryRegionId'] = $queryRegionId;
        $this->options['query']['QueryRegionId'] = $queryRegionId;

        return $this;
    }
}
