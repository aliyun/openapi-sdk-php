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
     * @deprecated deprecated since version 2.0, Use withResumeTime() instead.
     *
     * @param string $resumeTime
     *
     * @return $this
     */
    public function setResumeTime($resumeTime)
    {
        return $this->withResumeTime($resumeTime);
    }

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
     * @deprecated deprecated since version 2.0, Use withAppName() instead.
     *
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        return $this->withAppName($appName);
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
     * @deprecated deprecated since version 2.0, Use withLiveStreamType() instead.
     *
     * @param string $liveStreamType
     *
     * @return $this
     */
    public function setLiveStreamType($liveStreamType)
    {
        return $this->withLiveStreamType($liveStreamType);
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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withOneshot() instead.
     *
     * @param string $oneshot
     *
     * @return $this
     */
    public function setOneshot($oneshot)
    {
        return $this->withOneshot($oneshot);
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
     * @deprecated deprecated since version 2.0, Use withStreamName() instead.
     *
     * @param string $streamName
     *
     * @return $this
     */
    public function setStreamName($streamName)
    {
        return $this->withStreamName($streamName);
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
     * @deprecated deprecated since version 2.0, Use withControlStreamAction() instead.
     *
     * @param string $controlStreamAction
     *
     * @return $this
     */
    public function setControlStreamAction($controlStreamAction)
    {
        return $this->withControlStreamAction($controlStreamAction);
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
