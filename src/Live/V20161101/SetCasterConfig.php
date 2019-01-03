<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetCasterConfig
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
class SetCasterConfig extends RpcRequest
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
    public $action = 'SetCasterConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withSideOutputUrl() instead.
     *
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function setSideOutputUrl($sideOutputUrl)
    {
        return $this->withSideOutputUrl($sideOutputUrl);
    }

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
     * @deprecated deprecated since version 2.0, Use withCasterId() instead.
     *
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        return $this->withCasterId($casterId);
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
     * @deprecated deprecated since version 2.0, Use withChannelEnable() instead.
     *
     * @param string $channelEnable
     *
     * @return $this
     */
    public function setChannelEnable($channelEnable)
    {
        return $this->withChannelEnable($channelEnable);
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
     * @deprecated deprecated since version 2.0, Use withProgramEffect() instead.
     *
     * @param string $programEffect
     *
     * @return $this
     */
    public function setProgramEffect($programEffect)
    {
        return $this->withProgramEffect($programEffect);
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
     * @deprecated deprecated since version 2.0, Use withProgramName() instead.
     *
     * @param string $programName
     *
     * @return $this
     */
    public function setProgramName($programName)
    {
        return $this->withProgramName($programName);
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
     * @deprecated deprecated since version 2.0, Use withRecordConfig() instead.
     *
     * @param string $recordConfig
     *
     * @return $this
     */
    public function setRecordConfig($recordConfig)
    {
        return $this->withRecordConfig($recordConfig);
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
     * @deprecated deprecated since version 2.0, Use withUrgentMaterialId() instead.
     *
     * @param string $urgentMaterialId
     *
     * @return $this
     */
    public function setUrgentMaterialId($urgentMaterialId)
    {
        return $this->withUrgentMaterialId($urgentMaterialId);
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
     * @deprecated deprecated since version 2.0, Use withTranscodeConfig() instead.
     *
     * @param string $transcodeConfig
     *
     * @return $this
     */
    public function setTranscodeConfig($transcodeConfig)
    {
        return $this->withTranscodeConfig($transcodeConfig);
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
     * @deprecated deprecated since version 2.0, Use withDelay() instead.
     *
     * @param string $delay
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        return $this->withDelay($delay);
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
     * @deprecated deprecated since version 2.0, Use withCasterName() instead.
     *
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        return $this->withCasterName($casterName);
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
     * @deprecated deprecated since version 2.0, Use withCallbackUrl() instead.
     *
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        return $this->withCallbackUrl($callbackUrl);
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
