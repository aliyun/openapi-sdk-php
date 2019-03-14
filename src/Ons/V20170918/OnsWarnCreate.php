<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * Api OnsWarnCreate
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
class OnsWarnCreate extends Rpc
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
