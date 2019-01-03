<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OnsMqttQueryMsgTransTrend
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
class OnsMqttQueryMsgTransTrend extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ons';

    /**
     * @var string
     */
    public $version = '2017-09-18';

    /**
     * @var string
     */
    public $action = 'OnsMqttQueryMsgTransTrend';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPreventCache() instead.
     *
     * @param string $preventCache
     *
     * @return $this
     */
    public function setPreventCache($preventCache)
    {
        return $this->withPreventCache($preventCache);
    }

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
     * @deprecated deprecated since version 2.0, Use withOnsRegionId() instead.
     *
     * @param string $onsRegionId
     *
     * @return $this
     */
    public function setOnsRegionId($onsRegionId)
    {
        return $this->withOnsRegionId($onsRegionId);
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
     * @deprecated deprecated since version 2.0, Use withOnsPlatform() instead.
     *
     * @param string $onsPlatform
     *
     * @return $this
     */
    public function setOnsPlatform($onsPlatform)
    {
        return $this->withOnsPlatform($onsPlatform);
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
     * @deprecated deprecated since version 2.0, Use withQos() instead.
     *
     * @param string $qos
     *
     * @return $this
     */
    public function setQos($qos)
    {
        return $this->withQos($qos);
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
     * @deprecated deprecated since version 2.0, Use withTransType() instead.
     *
     * @param string $transType
     *
     * @return $this
     */
    public function setTransType($transType)
    {
        return $this->withTransType($transType);
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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use withBeginTime() instead.
     *
     * @param string $beginTime
     *
     * @return $this
     */
    public function setBeginTime($beginTime)
    {
        return $this->withBeginTime($beginTime);
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
     * @deprecated deprecated since version 2.0, Use withTpsType() instead.
     *
     * @param string $tpsType
     *
     * @return $this
     */
    public function setTpsType($tpsType)
    {
        return $this->withTpsType($tpsType);
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
     * @deprecated deprecated since version 2.0, Use withParentTopic() instead.
     *
     * @param string $parentTopic
     *
     * @return $this
     */
    public function setParentTopic($parentTopic)
    {
        return $this->withParentTopic($parentTopic);
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
     * @deprecated deprecated since version 2.0, Use withMsgType() instead.
     *
     * @param string $msgType
     *
     * @return $this
     */
    public function setMsgType($msgType)
    {
        return $this->withMsgType($msgType);
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
     * @deprecated deprecated since version 2.0, Use withSubTopic() instead.
     *
     * @param string $subTopic
     *
     * @return $this
     */
    public function setSubTopic($subTopic)
    {
        return $this->withSubTopic($subTopic);
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
