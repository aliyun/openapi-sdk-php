<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetCasterChannel
 *
 * @method string getResourceId()
 * @method string getPlayStatus()
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getSeekOffset()
 * @method string getChannelId()
 */
class SetCasterChannel extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'SetCasterChannel';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        return $this->withResourceId($resourceId);
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPlayStatus() instead.
     *
     * @param string $playStatus
     *
     * @return $this
     */
    public function setPlayStatus($playStatus)
    {
        return $this->withPlayStatus($playStatus);
    }

    /**
     * @param string $playStatus
     *
     * @return $this
     */
    public function withPlayStatus($playStatus)
    {
        $this->data['PlayStatus'] = $playStatus;
        $this->options['query']['PlayStatus'] = $playStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCasterId() instead.
     *
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        return $this->withCasterId($casterId);
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function withCasterId($casterId)
    {
        $this->data['CasterId'] = $casterId;
        $this->options['query']['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSeekOffset() instead.
     *
     * @param string $seekOffset
     *
     * @return $this
     */
    public function setSeekOffset($seekOffset)
    {
        return $this->withSeekOffset($seekOffset);
    }

    /**
     * @param string $seekOffset
     *
     * @return $this
     */
    public function withSeekOffset($seekOffset)
    {
        $this->data['SeekOffset'] = $seekOffset;
        $this->options['query']['SeekOffset'] = $seekOffset;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
