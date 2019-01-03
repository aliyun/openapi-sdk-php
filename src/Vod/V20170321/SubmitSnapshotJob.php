<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitSnapshotJob
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCount()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getSpecifiedOffsetTime()
 * @method string getWidth()
 * @method string getInterval()
 * @method string getSpriteSnapshotConfig()
 * @method string getSnapshotTemplateId()
 * @method string getHeight()
 */
class SubmitSnapshotJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'SubmitSnapshotJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCount() instead.
     *
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        return $this->withCount($count);
    }

    /**
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideoId() instead.
     *
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        return $this->withVideoId($videoId);
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function withVideoId($videoId)
    {
        $this->data['VideoId'] = $videoId;
        $this->options['query']['VideoId'] = $videoId;

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
     * @deprecated deprecated since version 2.0, Use withSpecifiedOffsetTime() instead.
     *
     * @param string $specifiedOffsetTime
     *
     * @return $this
     */
    public function setSpecifiedOffsetTime($specifiedOffsetTime)
    {
        return $this->withSpecifiedOffsetTime($specifiedOffsetTime);
    }

    /**
     * @param string $specifiedOffsetTime
     *
     * @return $this
     */
    public function withSpecifiedOffsetTime($specifiedOffsetTime)
    {
        $this->data['SpecifiedOffsetTime'] = $specifiedOffsetTime;
        $this->options['query']['SpecifiedOffsetTime'] = $specifiedOffsetTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWidth() instead.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        return $this->withWidth($width);
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function withWidth($width)
    {
        $this->data['Width'] = $width;
        $this->options['query']['Width'] = $width;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSpriteSnapshotConfig() instead.
     *
     * @param string $spriteSnapshotConfig
     *
     * @return $this
     */
    public function setSpriteSnapshotConfig($spriteSnapshotConfig)
    {
        return $this->withSpriteSnapshotConfig($spriteSnapshotConfig);
    }

    /**
     * @param string $spriteSnapshotConfig
     *
     * @return $this
     */
    public function withSpriteSnapshotConfig($spriteSnapshotConfig)
    {
        $this->data['SpriteSnapshotConfig'] = $spriteSnapshotConfig;
        $this->options['query']['SpriteSnapshotConfig'] = $spriteSnapshotConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshotTemplateId() instead.
     *
     * @param string $snapshotTemplateId
     *
     * @return $this
     */
    public function setSnapshotTemplateId($snapshotTemplateId)
    {
        return $this->withSnapshotTemplateId($snapshotTemplateId);
    }

    /**
     * @param string $snapshotTemplateId
     *
     * @return $this
     */
    public function withSnapshotTemplateId($snapshotTemplateId)
    {
        $this->data['SnapshotTemplateId'] = $snapshotTemplateId;
        $this->options['query']['SnapshotTemplateId'] = $snapshotTemplateId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHeight() instead.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        return $this->withHeight($height);
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function withHeight($height)
    {
        $this->data['Height'] = $height;
        $this->options['query']['Height'] = $height;

        return $this;
    }
}
