<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTemplate
 *
 * @method string getServiceMode()
 * @method array getLiveConfig()
 * @method string getMediaConfig()
 * @method string getMaxMixStreamCount()
 * @method array getRecordConfig()
 * @method string getOwnerId()
 * @method array getLayOut()
 * @method string getAppId()
 * @method string getCallBack()
 * @method string getMixMode()
 */
class CreateTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'CreateTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @deprecated deprecated since version 2.0, Use withServiceMode() instead.
     *
     * @param string $serviceMode
     *
     * @return $this
     */
    public function setServiceMode($serviceMode)
    {
        return $this->withServiceMode($serviceMode);
    }

    /**
     * @param string $serviceMode
     *
     * @return $this
     */
    public function withServiceMode($serviceMode)
    {
        $this->data['ServiceMode'] = $serviceMode;
        $this->options['query']['ServiceMode'] = $serviceMode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getLiveConfig() instead.
     *
     * @return array
     */
    public function getLiveConfigs()
    {
        return $this->getLiveConfig();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLiveConfig() instead.
     *
     * @param array $liveConfigs
     *
     * @return $this
     */
    public function setLiveConfigs(array $liveConfigs)
    {
        return $this->withLiveConfig($liveConfigs);
    }

    /**
     * @param array $liveConfig
     *
     * @return $this
     */
    public function withLiveConfig(array $liveConfig)
    {
        $this->data['LiveConfig'] = $liveConfig;
        foreach ($liveConfig as $i => $iValue) {
            $this->options['query']['LiveConfig.' . ($i + 1) . '.DomainName'] = $liveConfig[$i]['DomainName'];
            $this->options['query']['LiveConfig.' . ($i + 1) . '.AppName'] = $liveConfig[$i]['AppName'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMediaConfig() instead.
     *
     * @param string $mediaConfig
     *
     * @return $this
     */
    public function setMediaConfig($mediaConfig)
    {
        return $this->withMediaConfig($mediaConfig);
    }

    /**
     * @param string $mediaConfig
     *
     * @return $this
     */
    public function withMediaConfig($mediaConfig)
    {
        $this->data['MediaConfig'] = $mediaConfig;
        $this->options['query']['MediaConfig'] = $mediaConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxMixStreamCount() instead.
     *
     * @param string $maxMixStreamCount
     *
     * @return $this
     */
    public function setMaxMixStreamCount($maxMixStreamCount)
    {
        return $this->withMaxMixStreamCount($maxMixStreamCount);
    }

    /**
     * @param string $maxMixStreamCount
     *
     * @return $this
     */
    public function withMaxMixStreamCount($maxMixStreamCount)
    {
        $this->data['MaxMixStreamCount'] = $maxMixStreamCount;
        $this->options['query']['MaxMixStreamCount'] = $maxMixStreamCount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getRecordConfig() instead.
     *
     * @return array
     */
    public function getRecordConfigs()
    {
        return $this->getRecordConfig();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecordConfig() instead.
     *
     * @param array $recordConfigs
     *
     * @return $this
     */
    public function setRecordConfigs(array $recordConfigs)
    {
        return $this->withRecordConfig($recordConfigs);
    }

    /**
     * @param array $recordConfig
     *
     * @return $this
     */
    public function withRecordConfig(array $recordConfig)
    {
        $this->data['RecordConfig'] = $recordConfig;
        foreach ($recordConfig as $i => $iValue) {
            $this->options['query']['RecordConfig.' . ($i + 1) . '.StorageType'] = $recordConfig[$i]['StorageType'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.FileFormat'] = $recordConfig[$i]['FileFormat'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.OssEndPoint'] = $recordConfig[$i]['OssEndPoint'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.OssBucket'] = $recordConfig[$i]['OssBucket'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.VodTransCodeGroupId'] = $recordConfig[$i]['VodTransCodeGroupId'];
        }

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
     * @deprecated deprecated since version 2.0, Use getLayOut() instead.
     *
     * @return array
     */
    public function getLayOuts()
    {
        return $this->getLayOut();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLayOut() instead.
     *
     * @param array $layOuts
     *
     * @return $this
     */
    public function setLayOuts(array $layOuts)
    {
        return $this->withLayOut($layOuts);
    }

    /**
     * @param array $layOut
     *
     * @return $this
     */
    public function withLayOut(array $layOut)
    {
        $this->data['LayOut'] = $layOut;
        foreach ($layOut as $i => $iValue) {
            $this->options['query']['LayOut.' . ($i + 1) . '.Color'] = $layOut[$i]['Color'];
            $this->options['query']['LayOut.' . ($i + 1) . '.CutMode'] = $layOut[$i]['CutMode'];
            $this->options['query']['LayOut.' . ($i + 1) . '.LayOutId'] = $layOut[$i]['LayOutId'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallBack() instead.
     *
     * @param string $callBack
     *
     * @return $this
     */
    public function setCallBack($callBack)
    {
        return $this->withCallBack($callBack);
    }

    /**
     * @param string $callBack
     *
     * @return $this
     */
    public function withCallBack($callBack)
    {
        $this->data['CallBack'] = $callBack;
        $this->options['query']['CallBack'] = $callBack;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixMode() instead.
     *
     * @param string $mixMode
     *
     * @return $this
     */
    public function setMixMode($mixMode)
    {
        return $this->withMixMode($mixMode);
    }

    /**
     * @param string $mixMode
     *
     * @return $this
     */
    public function withMixMode($mixMode)
    {
        $this->data['MixMode'] = $mixMode;
        $this->options['query']['MixMode'] = $mixMode;

        return $this;
    }
}
