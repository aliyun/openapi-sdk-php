<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api SubmitSnapshotJob
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
class SubmitSnapshotJob extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
