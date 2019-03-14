<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api QueryHotlineRecord
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
class QueryHotlineRecord extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';

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
