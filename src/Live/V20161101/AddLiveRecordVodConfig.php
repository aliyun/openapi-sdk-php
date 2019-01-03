<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveRecordVodConfig
 *
 * @method string getAppName()
 * @method string getAutoCompose()
 * @method string getDomainName()
 * @method string getCycleDuration()
 * @method string getOwnerId()
 * @method string getComposeVodTranscodeGroupId()
 * @method string getStreamName()
 * @method string getVodTranscodeGroupId()
 */
class AddLiveRecordVodConfig extends RpcRequest
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
    public $action = 'AddLiveRecordVodConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @deprecated deprecated since version 2.0, Use withAutoCompose() instead.
     *
     * @param string $autoCompose
     *
     * @return $this
     */
    public function setAutoCompose($autoCompose)
    {
        return $this->withAutoCompose($autoCompose);
    }

    /**
     * @param string $autoCompose
     *
     * @return $this
     */
    public function withAutoCompose($autoCompose)
    {
        $this->data['AutoCompose'] = $autoCompose;
        $this->options['query']['AutoCompose'] = $autoCompose;

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
     * @deprecated deprecated since version 2.0, Use withCycleDuration() instead.
     *
     * @param string $cycleDuration
     *
     * @return $this
     */
    public function setCycleDuration($cycleDuration)
    {
        return $this->withCycleDuration($cycleDuration);
    }

    /**
     * @param string $cycleDuration
     *
     * @return $this
     */
    public function withCycleDuration($cycleDuration)
    {
        $this->data['CycleDuration'] = $cycleDuration;
        $this->options['query']['CycleDuration'] = $cycleDuration;

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
     * @deprecated deprecated since version 2.0, Use withComposeVodTranscodeGroupId() instead.
     *
     * @param string $composeVodTranscodeGroupId
     *
     * @return $this
     */
    public function setComposeVodTranscodeGroupId($composeVodTranscodeGroupId)
    {
        return $this->withComposeVodTranscodeGroupId($composeVodTranscodeGroupId);
    }

    /**
     * @param string $composeVodTranscodeGroupId
     *
     * @return $this
     */
    public function withComposeVodTranscodeGroupId($composeVodTranscodeGroupId)
    {
        $this->data['ComposeVodTranscodeGroupId'] = $composeVodTranscodeGroupId;
        $this->options['query']['ComposeVodTranscodeGroupId'] = $composeVodTranscodeGroupId;

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
     * @deprecated deprecated since version 2.0, Use withVodTranscodeGroupId() instead.
     *
     * @param string $vodTranscodeGroupId
     *
     * @return $this
     */
    public function setVodTranscodeGroupId($vodTranscodeGroupId)
    {
        return $this->withVodTranscodeGroupId($vodTranscodeGroupId);
    }

    /**
     * @param string $vodTranscodeGroupId
     *
     * @return $this
     */
    public function withVodTranscodeGroupId($vodTranscodeGroupId)
    {
        $this->data['VodTranscodeGroupId'] = $vodTranscodeGroupId;
        $this->options['query']['VodTranscodeGroupId'] = $vodTranscodeGroupId;

        return $this;
    }
}
