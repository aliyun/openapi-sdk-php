<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api SetCasterChannel
 *
 * @method string getResourceId()
 * @method string getPlayStatus()
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getSeekOffset()
 * @method string getChannelId()
 */
class SetCasterChannel extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
