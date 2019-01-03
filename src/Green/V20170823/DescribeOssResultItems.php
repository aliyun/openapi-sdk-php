<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeOssResultItems
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
class DescribeOssResultItems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'DescribeOssResultItems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withTotalCount() instead.
     *
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        return $this->withTotalCount($totalCount);
    }

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
     * @deprecated deprecated since version 2.0, Use withMinScore() instead.
     *
     * @param string $minScore
     *
     * @return $this
     */
    public function setMinScore($minScore)
    {
        return $this->withMinScore($minScore);
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
     * @deprecated deprecated since version 2.0, Use withSuggestion() instead.
     *
     * @param string $suggestion
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        return $this->withSuggestion($suggestion);
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
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
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
     * @deprecated deprecated since version 2.0, Use withMaxScore() instead.
     *
     * @param string $maxScore
     *
     * @return $this
     */
    public function setMaxScore($maxScore)
    {
        return $this->withMaxScore($maxScore);
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
     * @deprecated deprecated since version 2.0, Use withStartDate() instead.
     *
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        return $this->withStartDate($startDate);
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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
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
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        return $this->withScene($scene);
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
     * @deprecated deprecated since version 2.0, Use withQueryId() instead.
     *
     * @param string $queryId
     *
     * @return $this
     */
    public function setQueryId($queryId)
    {
        return $this->withQueryId($queryId);
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
     * @deprecated deprecated since version 2.0, Use withBucket() instead.
     *
     * @param string $bucket
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        return $this->withBucket($bucket);
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
     * @deprecated deprecated since version 2.0, Use withEndDate() instead.
     *
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        return $this->withEndDate($endDate);
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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withStock() instead.
     *
     * @param string $stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        return $this->withStock($stock);
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
