<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetMezzanineInfo
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
class GetMezzanineInfo extends RpcRequest
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
    public $action = 'GetMezzanineInfo';

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
     * @deprecated deprecated since version 2.0, Use withPreviewSegment() instead.
     *
     * @param string $previewSegment
     *
     * @return $this
     */
    public function setPreviewSegment($previewSegment)
    {
        return $this->withPreviewSegment($previewSegment);
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
     * @deprecated deprecated since version 2.0, Use withOutputType() instead.
     *
     * @param string $outputType
     *
     * @return $this
     */
    public function setOutputType($outputType)
    {
        return $this->withOutputType($outputType);
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
     * @deprecated deprecated since version 2.0, Use withAdditionType() instead.
     *
     * @param string $additionType
     *
     * @return $this
     */
    public function setAdditionType($additionType)
    {
        return $this->withAdditionType($additionType);
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
     * @deprecated deprecated since version 2.0, Use withAuthTimeout() instead.
     *
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        return $this->withAuthTimeout($authTimeout);
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
