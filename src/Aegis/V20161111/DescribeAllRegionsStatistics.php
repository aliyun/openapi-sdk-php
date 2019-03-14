<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAllRegionsStatistics
 *
 * @method string getStatusList()
 * @method string getSaleId()
 * @method string getRuleType()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getRemark()
 * @method string getDealed()
 * @method string getCurrentPage()
 * @method string getStartTime()
 * @method string getType()
 * @method string getUuid()
 * @method string getSecureToken()
 * @method string getSourceIp()
 * @method string getWebGroupId()
 * @method string getPageSize()
 * @method string getAction1()
 * @method string getTag()
 * @method string getFlow()
 * @method string getStatus()
 */
class DescribeAllRegionsStatistics extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $statusList
     *
     * @return $this
     */
    public function withStatusList($statusList)
    {
        $this->data['StatusList'] = $statusList;
        $this->options['query']['StatusList'] = $statusList;

        return $this;
    }

    /**
     * @param string $saleId
     *
     * @return $this
     */
    public function withSaleId($saleId)
    {
        $this->data['SaleId'] = $saleId;
        $this->options['query']['SaleId'] = $saleId;

        return $this;
    }

    /**
     * @param string $ruleType
     *
     * @return $this
     */
    public function withRuleType($ruleType)
    {
        $this->data['RuleType'] = $ruleType;
        $this->options['query']['RuleType'] = $ruleType;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function withDealed($dealed)
    {
        $this->data['Dealed'] = $dealed;
        $this->options['query']['Dealed'] = $dealed;

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
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function withUuid($uuid)
    {
        $this->data['Uuid'] = $uuid;
        $this->options['query']['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @param string $secureToken
     *
     * @return $this
     */
    public function withSecureToken($secureToken)
    {
        $this->data['SecureToken'] = $secureToken;
        $this->options['query']['SecureToken'] = $secureToken;

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
     * @param string $webGroupId
     *
     * @return $this
     */
    public function withWebGroupId($webGroupId)
    {
        $this->data['WebGroupId'] = $webGroupId;
        $this->options['query']['WebGroupId'] = $webGroupId;

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
     * @param string $action1
     *
     * @return $this
     */
    public function withAction1($action1)
    {
        $this->data['Action1'] = $action1;
        $this->options['query']['Action1'] = $action1;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function withTag($tag)
    {
        $this->data['Tag'] = $tag;
        $this->options['query']['Tag'] = $tag;

        return $this;
    }

    /**
     * @param string $flow
     *
     * @return $this
     */
    public function withFlow($flow)
    {
        $this->data['Flow'] = $flow;
        $this->options['query']['Flow'] = $flow;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
