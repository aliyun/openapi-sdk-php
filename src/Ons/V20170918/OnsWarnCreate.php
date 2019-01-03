<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OnsWarnCreate
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getBlockTime()
 * @method string getLevel()
 * @method string getConsumerId()
 * @method string getDelayTime()
 * @method string getTopic()
 * @method string getThreshold()
 * @method string getAlertTime()
 * @method string getContacts()
 */
class OnsWarnCreate extends RpcRequest
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
    public $action = 'OnsWarnCreate';

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
     * @deprecated deprecated since version 2.0, Use withBlockTime() instead.
     *
     * @param string $blockTime
     *
     * @return $this
     */
    public function setBlockTime($blockTime)
    {
        return $this->withBlockTime($blockTime);
    }

    /**
     * @param string $blockTime
     *
     * @return $this
     */
    public function withBlockTime($blockTime)
    {
        $this->data['BlockTime'] = $blockTime;
        $this->options['query']['BlockTime'] = $blockTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLevel() instead.
     *
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        return $this->withLevel($level);
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['Level'] = $level;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConsumerId() instead.
     *
     * @param string $consumerId
     *
     * @return $this
     */
    public function setConsumerId($consumerId)
    {
        return $this->withConsumerId($consumerId);
    }

    /**
     * @param string $consumerId
     *
     * @return $this
     */
    public function withConsumerId($consumerId)
    {
        $this->data['ConsumerId'] = $consumerId;
        $this->options['query']['ConsumerId'] = $consumerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDelayTime() instead.
     *
     * @param string $delayTime
     *
     * @return $this
     */
    public function setDelayTime($delayTime)
    {
        return $this->withDelayTime($delayTime);
    }

    /**
     * @param string $delayTime
     *
     * @return $this
     */
    public function withDelayTime($delayTime)
    {
        $this->data['DelayTime'] = $delayTime;
        $this->options['query']['DelayTime'] = $delayTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTopic() instead.
     *
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        return $this->withTopic($topic);
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function withTopic($topic)
    {
        $this->data['Topic'] = $topic;
        $this->options['query']['Topic'] = $topic;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withThreshold() instead.
     *
     * @param string $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        return $this->withThreshold($threshold);
    }

    /**
     * @param string $threshold
     *
     * @return $this
     */
    public function withThreshold($threshold)
    {
        $this->data['Threshold'] = $threshold;
        $this->options['query']['Threshold'] = $threshold;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAlertTime() instead.
     *
     * @param string $alertTime
     *
     * @return $this
     */
    public function setAlertTime($alertTime)
    {
        return $this->withAlertTime($alertTime);
    }

    /**
     * @param string $alertTime
     *
     * @return $this
     */
    public function withAlertTime($alertTime)
    {
        $this->data['AlertTime'] = $alertTime;
        $this->options['query']['AlertTime'] = $alertTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContacts() instead.
     *
     * @param string $contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        return $this->withContacts($contacts);
    }

    /**
     * @param string $contacts
     *
     * @return $this
     */
    public function withContacts($contacts)
    {
        $this->data['Contacts'] = $contacts;
        $this->options['query']['Contacts'] = $contacts;

        return $this;
    }
}
