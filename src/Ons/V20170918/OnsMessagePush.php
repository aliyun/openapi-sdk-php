<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OnsMessagePush
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getClientId()
 * @method string getOnsPlatform()
 * @method string getConsumerId()
 * @method string getMsgId()
 * @method string getTopic()
 */
class OnsMessagePush extends RpcRequest
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
    public $action = 'OnsMessagePush';

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
     * @deprecated deprecated since version 2.0, Use withClientId() instead.
     *
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        return $this->withClientId($clientId);
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function withClientId($clientId)
    {
        $this->data['ClientId'] = $clientId;
        $this->options['query']['ClientId'] = $clientId;

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
     * @deprecated deprecated since version 2.0, Use withMsgId() instead.
     *
     * @param string $msgId
     *
     * @return $this
     */
    public function setMsgId($msgId)
    {
        return $this->withMsgId($msgId);
    }

    /**
     * @param string $msgId
     *
     * @return $this
     */
    public function withMsgId($msgId)
    {
        $this->data['MsgId'] = $msgId;
        $this->options['query']['MsgId'] = $msgId;

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
}
