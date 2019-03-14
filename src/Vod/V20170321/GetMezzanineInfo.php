<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api GetMezzanineInfo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getPreviewSegment()
 * @method string getOutputType()
 * @method string getAdditionType()
 * @method string getOwnerId()
 * @method string getAuthTimeout()
 */
class GetMezzanineInfo extends Rpc
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
     * @param string $previewSegment
     *
     * @return $this
     */
    public function withPreviewSegment($previewSegment)
    {
        $this->data['PreviewSegment'] = $previewSegment;
        $this->options['query']['PreviewSegment'] = $previewSegment;

        return $this;
    }

    /**
     * @param string $outputType
     *
     * @return $this
     */
    public function withOutputType($outputType)
    {
        $this->data['OutputType'] = $outputType;
        $this->options['query']['OutputType'] = $outputType;

        return $this;
    }

    /**
     * @param string $additionType
     *
     * @return $this
     */
    public function withAdditionType($additionType)
    {
        $this->data['AdditionType'] = $additionType;
        $this->options['query']['AdditionType'] = $additionType;

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
     * @param string $authTimeout
     *
     * @return $this
     */
    public function withAuthTimeout($authTimeout)
    {
        $this->data['AuthTimeout'] = $authTimeout;
        $this->options['query']['AuthTimeout'] = $authTimeout;

        return $this;
    }
}
