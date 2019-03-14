<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * Api CreateTemplate
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
class CreateTemplate extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';

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
