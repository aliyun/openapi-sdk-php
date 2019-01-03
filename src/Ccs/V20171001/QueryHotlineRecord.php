<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryHotlineRecord
 *
 * @method string getAgentId()
 * @method string getMaxTalkDuration()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getSatisfaction()
 * @method string getMinTalkDuratoin()
 * @method string getCategoryIds()
 * @method string getVisitorProvince()
 * @method string getPageSize()
 * @method string getCallType()
 * @method string getCcsInstanceId()
 * @method string getVisitorPhone()
 * @method string getVisitorId()
 * @method string getStatus()
 */
class QueryHotlineRecord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'QueryHotlineRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withAgentId() instead.
     *
     * @param string $agentId
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        return $this->withAgentId($agentId);
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['AgentId'] = $agentId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxTalkDuration() instead.
     *
     * @param string $maxTalkDuration
     *
     * @return $this
     */
    public function setMaxTalkDuration($maxTalkDuration)
    {
        return $this->withMaxTalkDuration($maxTalkDuration);
    }

    /**
     * @param string $maxTalkDuration
     *
     * @return $this
     */
    public function withMaxTalkDuration($maxTalkDuration)
    {
        $this->data['MaxTalkDuration'] = $maxTalkDuration;
        $this->options['query']['MaxTalkDuration'] = $maxTalkDuration;

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

    /**
     * @deprecated deprecated since version 2.0, Use withSatisfaction() instead.
     *
     * @param string $satisfaction
     *
     * @return $this
     */
    public function setSatisfaction($satisfaction)
    {
        return $this->withSatisfaction($satisfaction);
    }

    /**
     * @param string $satisfaction
     *
     * @return $this
     */
    public function withSatisfaction($satisfaction)
    {
        $this->data['Satisfaction'] = $satisfaction;
        $this->options['query']['Satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMinTalkDuratoin() instead.
     *
     * @param string $minTalkDuratoin
     *
     * @return $this
     */
    public function setMinTalkDuratoin($minTalkDuratoin)
    {
        return $this->withMinTalkDuratoin($minTalkDuratoin);
    }

    /**
     * @param string $minTalkDuratoin
     *
     * @return $this
     */
    public function withMinTalkDuratoin($minTalkDuratoin)
    {
        $this->data['MinTalkDuratoin'] = $minTalkDuratoin;
        $this->options['query']['MinTalkDuratoin'] = $minTalkDuratoin;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCategoryIds() instead.
     *
     * @param string $categoryIds
     *
     * @return $this
     */
    public function setCategoryIds($categoryIds)
    {
        return $this->withCategoryIds($categoryIds);
    }

    /**
     * @param string $categoryIds
     *
     * @return $this
     */
    public function withCategoryIds($categoryIds)
    {
        $this->data['CategoryIds'] = $categoryIds;
        $this->options['query']['CategoryIds'] = $categoryIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVisitorProvince() instead.
     *
     * @param string $visitorProvince
     *
     * @return $this
     */
    public function setVisitorProvince($visitorProvince)
    {
        return $this->withVisitorProvince($visitorProvince);
    }

    /**
     * @param string $visitorProvince
     *
     * @return $this
     */
    public function withVisitorProvince($visitorProvince)
    {
        $this->data['VisitorProvince'] = $visitorProvince;
        $this->options['query']['VisitorProvince'] = $visitorProvince;

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
     * @deprecated deprecated since version 2.0, Use withCallType() instead.
     *
     * @param string $callType
     *
     * @return $this
     */
    public function setCallType($callType)
    {
        return $this->withCallType($callType);
    }

    /**
     * @param string $callType
     *
     * @return $this
     */
    public function withCallType($callType)
    {
        $this->data['CallType'] = $callType;
        $this->options['query']['CallType'] = $callType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVisitorPhone() instead.
     *
     * @param string $visitorPhone
     *
     * @return $this
     */
    public function setVisitorPhone($visitorPhone)
    {
        return $this->withVisitorPhone($visitorPhone);
    }

    /**
     * @param string $visitorPhone
     *
     * @return $this
     */
    public function withVisitorPhone($visitorPhone)
    {
        $this->data['VisitorPhone'] = $visitorPhone;
        $this->options['query']['VisitorPhone'] = $visitorPhone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVisitorId() instead.
     *
     * @param string $visitorId
     *
     * @return $this
     */
    public function setVisitorId($visitorId)
    {
        return $this->withVisitorId($visitorId);
    }

    /**
     * @param string $visitorId
     *
     * @return $this
     */
    public function withVisitorId($visitorId)
    {
        $this->data['VisitorId'] = $visitorId;
        $this->options['query']['VisitorId'] = $visitorId;

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
