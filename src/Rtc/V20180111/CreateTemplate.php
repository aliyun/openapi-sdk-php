<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getServiceMode()
 * @method $this withServiceMode($value)
 * @method array getLiveConfig()
 * @method string getMediaConfig()
 * @method $this withMediaConfig($value)
 * @method string getMaxMixStreamCount()
 * @method $this withMaxMixStreamCount($value)
 * @method array getRecordConfig()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getLayOut()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
 */
class CreateTemplate extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';

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
}
