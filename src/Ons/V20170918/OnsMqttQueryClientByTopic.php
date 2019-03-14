<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * Api OnsMqttQueryClientByTopic
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getParentTopic()
 * @method string getSubTopic()
 */
class OnsMqttQueryClientByTopic extends Rpc
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
