<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ForbidLiveStream
 *
 * @method string getResumeTime()
 * @method string getAppName()
 * @method string getLiveStreamType()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getOneshot()
 * @method string getStreamName()
 * @method string getControlStreamAction()
 */
class ForbidLiveStream extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'ForbidLiveStream';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $resumeTime
     *
     * @return $this
     */
    public function withResumeTime($resumeTime)
    {
        $this->data['ResumeTime'] = $resumeTime;
        $this->options['query']['ResumeTime'] = $resumeTime;

        return $this;
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName'] = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $liveStreamType
     *
     * @return $this
     */
    public function withLiveStreamType($liveStreamType)
    {
        $this->data['LiveStreamType'] = $liveStreamType;
        $this->options['query']['LiveStreamType'] = $liveStreamType;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $oneshot
     *
     * @return $this
     */
    public function withOneshot($oneshot)
    {
        $this->data['Oneshot'] = $oneshot;
        $this->options['query']['Oneshot'] = $oneshot;

        return $this;
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function withStreamName($streamName)
    {
        $this->data['StreamName'] = $streamName;
        $this->options['query']['StreamName'] = $streamName;

        return $this;
    }

    /**
     * @param string $controlStreamAction
     *
     * @return $this
     */
    public function withControlStreamAction($controlStreamAction)
    {
        $this->data['ControlStreamAction'] = $controlStreamAction;
        $this->options['query']['ControlStreamAction'] = $controlStreamAction;

        return $this;
    }
}
