<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateVideoAnalyseTask
 *
 * @method string getNotifyTopicName()
 * @method string getGrabType()
 * @method string getProject()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getVideoUri()
 * @method string getSaveType()
 * @method string getNotifyEndpoint()
 * @method string getInterval()
 * @method string getTgtUri()
 */
class CreateVideoAnalyseTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'CreateVideoAnalyseTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyTopicName() instead.
     *
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        return $this->withNotifyTopicName($notifyTopicName);
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function withNotifyTopicName($notifyTopicName)
    {
        $this->data['NotifyTopicName'] = $notifyTopicName;
        $this->options['query']['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGrabType() instead.
     *
     * @param string $grabType
     *
     * @return $this
     */
    public function setGrabType($grabType)
    {
        return $this->withGrabType($grabType);
    }

    /**
     * @param string $grabType
     *
     * @return $this
     */
    public function withGrabType($grabType)
    {
        $this->data['GrabType'] = $grabType;
        $this->options['query']['GrabType'] = $grabType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

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
     * @deprecated deprecated since version 2.0, Use withVideoUri() instead.
     *
     * @param string $videoUri
     *
     * @return $this
     */
    public function setVideoUri($videoUri)
    {
        return $this->withVideoUri($videoUri);
    }

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function withVideoUri($videoUri)
    {
        $this->data['VideoUri'] = $videoUri;
        $this->options['query']['VideoUri'] = $videoUri;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSaveType() instead.
     *
     * @param string $saveType
     *
     * @return $this
     */
    public function setSaveType($saveType)
    {
        return $this->withSaveType($saveType);
    }

    /**
     * @param string $saveType
     *
     * @return $this
     */
    public function withSaveType($saveType)
    {
        $this->data['SaveType'] = $saveType;
        $this->options['query']['SaveType'] = $saveType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyEndpoint() instead.
     *
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        return $this->withNotifyEndpoint($notifyEndpoint);
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function withNotifyEndpoint($notifyEndpoint)
    {
        $this->data['NotifyEndpoint'] = $notifyEndpoint;
        $this->options['query']['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTgtUri() instead.
     *
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        return $this->withTgtUri($tgtUri);
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function withTgtUri($tgtUri)
    {
        $this->data['TgtUri'] = $tgtUri;
        $this->options['query']['TgtUri'] = $tgtUri;

        return $this;
    }
}
