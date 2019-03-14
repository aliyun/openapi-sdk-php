<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api DescribeOssResultItems
 *
 * @method string getTotalCount()
 * @method string getMinScore()
 * @method string getSuggestion()
 * @method string getCurrentPage()
 * @method string getMaxScore()
 * @method string getStartDate()
 * @method string getResourceType()
 * @method string getScene()
 * @method string getQueryId()
 * @method string getBucket()
 * @method string getEndDate()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getStock()
 */
class DescribeOssResultItems extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function withTotalCount($totalCount)
    {
        $this->data['TotalCount'] = $totalCount;
        $this->options['query']['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @param string $minScore
     *
     * @return $this
     */
    public function withMinScore($minScore)
    {
        $this->data['MinScore'] = $minScore;
        $this->options['query']['MinScore'] = $minScore;

        return $this;
    }

    /**
     * @param string $suggestion
     *
     * @return $this
     */
    public function withSuggestion($suggestion)
    {
        $this->data['Suggestion'] = $suggestion;
        $this->options['query']['Suggestion'] = $suggestion;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $maxScore
     *
     * @return $this
     */
    public function withMaxScore($maxScore)
    {
        $this->data['MaxScore'] = $maxScore;
        $this->options['query']['MaxScore'] = $maxScore;

        return $this;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function withStartDate($startDate)
    {
        $this->data['StartDate'] = $startDate;
        $this->options['query']['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }

    /**
     * @param string $queryId
     *
     * @return $this
     */
    public function withQueryId($queryId)
    {
        $this->data['QueryId'] = $queryId;
        $this->options['query']['QueryId'] = $queryId;

        return $this;
    }

    /**
     * @param string $bucket
     *
     * @return $this
     */
    public function withBucket($bucket)
    {
        $this->data['Bucket'] = $bucket;
        $this->options['query']['Bucket'] = $bucket;

        return $this;
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function withEndDate($endDate)
    {
        $this->data['EndDate'] = $endDate;
        $this->options['query']['EndDate'] = $endDate;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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
     * @param string $stock
     *
     * @return $this
     */
    public function withStock($stock)
    {
        $this->data['Stock'] = $stock;
        $this->options['query']['Stock'] = $stock;

        return $this;
    }
}
