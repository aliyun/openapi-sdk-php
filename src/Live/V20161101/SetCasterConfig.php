<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api SetCasterConfig
 *
 * @method string getSideOutputUrl()
 * @method string getCasterId()
 * @method string getChannelEnable()
 * @method string getDomainName()
 * @method string getProgramEffect()
 * @method string getProgramName()
 * @method string getOwnerId()
 * @method string getRecordConfig()
 * @method string getUrgentMaterialId()
 * @method string getTranscodeConfig()
 * @method string getDelay()
 * @method string getCasterName()
 * @method string getCallbackUrl()
 */
class SetCasterConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function withSideOutputUrl($sideOutputUrl)
    {
        $this->data['SideOutputUrl'] = $sideOutputUrl;
        $this->options['query']['SideOutputUrl'] = $sideOutputUrl;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function withCasterId($casterId)
    {
        $this->data['CasterId'] = $casterId;
        $this->options['query']['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $channelEnable
     *
     * @return $this
     */
    public function withChannelEnable($channelEnable)
    {
        $this->data['ChannelEnable'] = $channelEnable;
        $this->options['query']['ChannelEnable'] = $channelEnable;

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
     * @param string $programEffect
     *
     * @return $this
     */
    public function withProgramEffect($programEffect)
    {
        $this->data['ProgramEffect'] = $programEffect;
        $this->options['query']['ProgramEffect'] = $programEffect;

        return $this;
    }

    /**
     * @param string $programName
     *
     * @return $this
     */
    public function withProgramName($programName)
    {
        $this->data['ProgramName'] = $programName;
        $this->options['query']['ProgramName'] = $programName;

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
     * @param string $recordConfig
     *
     * @return $this
     */
    public function withRecordConfig($recordConfig)
    {
        $this->data['RecordConfig'] = $recordConfig;
        $this->options['query']['RecordConfig'] = $recordConfig;

        return $this;
    }

    /**
     * @param string $urgentMaterialId
     *
     * @return $this
     */
    public function withUrgentMaterialId($urgentMaterialId)
    {
        $this->data['UrgentMaterialId'] = $urgentMaterialId;
        $this->options['query']['UrgentMaterialId'] = $urgentMaterialId;

        return $this;
    }

    /**
     * @param string $transcodeConfig
     *
     * @return $this
     */
    public function withTranscodeConfig($transcodeConfig)
    {
        $this->data['TranscodeConfig'] = $transcodeConfig;
        $this->options['query']['TranscodeConfig'] = $transcodeConfig;

        return $this;
    }

    /**
     * @param string $delay
     *
     * @return $this
     */
    public function withDelay($delay)
    {
        $this->data['Delay'] = $delay;
        $this->options['query']['Delay'] = $delay;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function withCasterName($casterName)
    {
        $this->data['CasterName'] = $casterName;
        $this->options['query']['CasterName'] = $casterName;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function withCallbackUrl($callbackUrl)
    {
        $this->data['CallbackUrl'] = $callbackUrl;
        $this->options['query']['CallbackUrl'] = $callbackUrl;

        return $this;
    }
}
