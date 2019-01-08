<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of IndexVideo
 *
 * @method string getGrabType()
 * @method string getRemarksB()
 * @method string getProject()
 * @method string getRemarksA()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getVideoUri()
 * @method string getSaveType()
 * @method string getSetId()
 * @method string getInterval()
 * @method string getTgtUri()
 */
class IndexVideo extends RpcRequest
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
    public $action = 'IndexVideo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

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
     * @param string $remarksB
     *
     * @return $this
     */
    public function withRemarksB($remarksB)
    {
        $this->data['RemarksB'] = $remarksB;
        $this->options['query']['RemarksB'] = $remarksB;

        return $this;
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
     * @param string $remarksA
     *
     * @return $this
     */
    public function withRemarksA($remarksA)
    {
        $this->data['RemarksA'] = $remarksA;
        $this->options['query']['RemarksA'] = $remarksA;

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
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
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
