<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddLiveRecordVodConfig
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
class AddLiveRecordVodConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
