<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryServiceRecord
 *
 * @method string getVisitorProvince()
 * @method string getPageSize()
 * @method string getSceneId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getCcsInstanceId()
 * @method string getVisitorId()
 */
class QueryServiceRecord extends RpcRequest
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
    public $action = 'QueryServiceRecord';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

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
     * @param string $sceneId
     *
     * @return $this
     */
    public function withSceneId($sceneId)
    {
        $this->data['SceneId'] = $sceneId;
        $this->options['query']['SceneId'] = $sceneId;

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
}
