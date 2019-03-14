<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * Api OnsConsumerAccumulate
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getConsumerId()
 * @method string getDetail()
 */
class OnsConsumerAccumulate extends Rpc
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
     * @param string $detail
     *
     * @return $this
     */
    public function withDetail($detail)
    {
        $this->data['Detail'] = $detail;
        $this->options['query']['Detail'] = $detail;

        return $this;
    }
}
