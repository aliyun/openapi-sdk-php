<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OnsMessageSend
 *
 * @method string getPreventCache()
 * @method string getOnsRegionId()
 * @method string getOnsPlatform()
 * @method string getTopic()
 * @method string getProducerId()
 * @method string getTag()
 * @method string getMessage()
 * @method string getKey()
 */
class OnsMessageSend extends RpcRequest
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
    public $action = 'OnsMessageSend';

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
     * @deprecated deprecated since version 2.0, Use withProducerId() instead.
     *
     * @param string $producerId
     *
     * @return $this
     */
    public function setProducerId($producerId)
    {
        return $this->withProducerId($producerId);
    }

    /**
     * @param string $producerId
     *
     * @return $this
     */
    public function withProducerId($producerId)
    {
        $this->data['ProducerId'] = $producerId;
        $this->options['query']['ProducerId'] = $producerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        return $this->withTag($tag);
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function withTag($tag)
    {
        $this->data['Tag'] = $tag;
        $this->options['query']['Tag'] = $tag;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMessage() instead.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->withMessage($message);
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message)
    {
        $this->data['Message'] = $message;
        $this->options['query']['Message'] = $message;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKey() instead.
     *
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        return $this->withKey($key);
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function withKey($key)
    {
        $this->data['Key'] = $key;
        $this->options['query']['Key'] = $key;

        return $this;
    }
}
