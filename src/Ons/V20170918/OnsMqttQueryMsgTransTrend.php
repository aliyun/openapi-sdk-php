<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * Api OnsMqttQueryMsgTransTrend
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getQos()
 * @method string getTransType()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getTpsType()
 * @method string getParentTopic()
 * @method string getMsgType()
 * @method string getSubTopic()
 */
class OnsMqttQueryMsgTransTrend extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';

    /**
     * @param string $preventCache
     *
     * @return $this
     */
    public function withPreventCache($preventCache)
    {
        $this->data['PreventCache'] = $preventCache;
        $this->options['query']['PreventCache'] = $preventCache;

        return $this;
    }

    /**
     * @param string $onsRegionId
     *
     * @return $this
     */
    public function withOnsRegionId($onsRegionId)
    {
        $this->data['OnsRegionId'] = $onsRegionId;
        $this->options['query']['OnsRegionId'] = $onsRegionId;

        return $this;
    }

    /**
     * @param string $onsPlatform
     *
     * @return $this
     */
    public function withOnsPlatform($onsPlatform)
    {
        $this->data['OnsPlatform'] = $onsPlatform;
        $this->options['query']['OnsPlatform'] = $onsPlatform;

        return $this;
    }

    /**
     * @param string $qos
     *
     * @return $this
     */
    public function withQos($qos)
    {
        $this->data['Qos'] = $qos;
        $this->options['query']['Qos'] = $qos;

        return $this;
    }

    /**
     * @param string $transType
     *
     * @return $this
     */
    public function withTransType($transType)
    {
        $this->data['TransType'] = $transType;
        $this->options['query']['TransType'] = $transType;

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
     * @param string $beginTime
     *
     * @return $this
     */
    public function withBeginTime($beginTime)
    {
        $this->data['BeginTime'] = $beginTime;
        $this->options['query']['BeginTime'] = $beginTime;

        return $this;
    }

    /**
     * @param string $tpsType
     *
     * @return $this
     */
    public function withTpsType($tpsType)
    {
        $this->data['TpsType'] = $tpsType;
        $this->options['query']['TpsType'] = $tpsType;

        return $this;
    }

    /**
     * @param string $parentTopic
     *
     * @return $this
     */
    public function withParentTopic($parentTopic)
    {
        $this->data['ParentTopic'] = $parentTopic;
        $this->options['query']['ParentTopic'] = $parentTopic;

        return $this;
    }

    /**
     * @param string $msgType
     *
     * @return $this
     */
    public function withMsgType($msgType)
    {
        $this->data['MsgType'] = $msgType;
        $this->options['query']['MsgType'] = $msgType;

        return $this;
    }

    /**
     * @param string $subTopic
     *
     * @return $this
     */
    public function withSubTopic($subTopic)
    {
        $this->data['SubTopic'] = $subTopic;
        $this->options['query']['SubTopic'] = $subTopic;

        return $this;
    }
}
