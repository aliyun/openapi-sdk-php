<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryRobotSession
 *
 * @method string getAnswerSource()
 * @method string getSceneId()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getSatisfaction()
 * @method string getCcsInstanceId()
 * @method string getUtterance()
 */
class QueryRobotSession extends RpcRequest
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
    public $action = 'QueryRobotSession';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withAnswerSource() instead.
     *
     * @param string $answerSource
     *
     * @return $this
     */
    public function setAnswerSource($answerSource)
    {
        return $this->withAnswerSource($answerSource);
    }

    /**
     * @param string $answerSource
     *
     * @return $this
     */
    public function withAnswerSource($answerSource)
    {
        $this->data['AnswerSource'] = $answerSource;
        $this->options['query']['AnswerSource'] = $answerSource;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSceneId() instead.
     *
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        return $this->withSceneId($sceneId);
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
     * @deprecated deprecated since version 2.0, Use withUtterance() instead.
     *
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        return $this->withUtterance($utterance);
    }

    /**
     * @param string $utterance
     *
     * @return $this
     */
    public function withUtterance($utterance)
    {
        $this->data['Utterance'] = $utterance;
        $this->options['query']['Utterance'] = $utterance;

        return $this;
    }
}
