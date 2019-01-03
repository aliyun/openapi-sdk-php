<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OnsMqttQueryClientByTopic
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getParentTopic()
 * @method string getSubTopic()
 */
class OnsMqttQueryClientByTopic extends RpcRequest
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
    public $action = 'OnsMqttQueryClientByTopic';

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
