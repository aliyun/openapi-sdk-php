<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAuditContent
 *
 * @method string getTotalCount()
 * @method string getSuggestion()
 * @method string getCurrentPage()
 * @method string getLabel()
 * @method string getStartDate()
 * @method string getResourceType()
 * @method string getScene()
 * @method string getBizType()
 * @method string getEndDate()
 * @method string getSourceIp()
 * @method string getDataId()
 * @method string getAuditResult()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getTaskId()
 */
class DescribeAuditContent extends RpcRequest
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
    public $action = 'DescribeAuditContent';

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
     * @deprecated deprecated since version 2.0, Use withLabel() instead.
     *
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        return $this->withLabel($label);
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function withLabel($label)
    {
        $this->data['Label'] = $label;
        $this->options['query']['Label'] = $label;

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
     * @deprecated deprecated since version 2.0, Use withBizType() instead.
     *
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        return $this->withBizType($bizType);
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function withBizType($bizType)
    {
        $this->data['BizType'] = $bizType;
        $this->options['query']['BizType'] = $bizType;

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
     * @deprecated deprecated since version 2.0, Use withDataId() instead.
     *
     * @param string $dataId
     *
     * @return $this
     */
    public function setDataId($dataId)
    {
        return $this->withDataId($dataId);
    }

    /**
     * @param string $dataId
     *
     * @return $this
     */
    public function withDataId($dataId)
    {
        $this->data['DataId'] = $dataId;
        $this->options['query']['DataId'] = $dataId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuditResult() instead.
     *
     * @param string $auditResult
     *
     * @return $this
     */
    public function setAuditResult($auditResult)
    {
        return $this->withAuditResult($auditResult);
    }

    /**
     * @param string $auditResult
     *
     * @return $this
     */
    public function withAuditResult($auditResult)
    {
        $this->data['AuditResult'] = $auditResult;
        $this->options['query']['AuditResult'] = $auditResult;

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
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
