<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTotalStatistics
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
 * @method string getFrom()
 * @method string getAction1()
 * @method string getTag()
 * @method string getFlow()
 * @method string getStatus()
 */
class DescribeTotalStatistics extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeTotalStatistics';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withStatusList() instead.
     *
     * @param string $statusList
     *
     * @return $this
     */
    public function setStatusList($statusList)
    {
        return $this->withStatusList($statusList);
    }

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
     * @deprecated deprecated since version 2.0, Use withSaleId() instead.
     *
     * @param string $saleId
     *
     * @return $this
     */
    public function setSaleId($saleId)
    {
        return $this->withSaleId($saleId);
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
     * @deprecated deprecated since version 2.0, Use withRuleType() instead.
     *
     * @param string $ruleType
     *
     * @return $this
     */
    public function setRuleType($ruleType)
    {
        return $this->withRuleType($ruleType);
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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withDealed() instead.
     *
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        return $this->withDealed($dealed);
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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withUuid() instead.
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        return $this->withUuid($uuid);
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
     * @deprecated deprecated since version 2.0, Use withSecureToken() instead.
     *
     * @param string $secureToken
     *
     * @return $this
     */
    public function setSecureToken($secureToken)
    {
        return $this->withSecureToken($secureToken);
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
     * @deprecated deprecated since version 2.0, Use withWebGroupId() instead.
     *
     * @param string $webGroupId
     *
     * @return $this
     */
    public function setWebGroupId($webGroupId)
    {
        return $this->withWebGroupId($webGroupId);
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
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAction1() instead.
     *
     * @param string $action1
     *
     * @return $this
     */
    public function setAction1($action1)
    {
        return $this->withAction1($action1);
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
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        return $this->withTag($tag);
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
     * @deprecated deprecated since version 2.0, Use withFlow() instead.
     *
     * @param string $flow
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        return $this->withFlow($flow);
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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
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
