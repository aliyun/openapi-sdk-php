<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopyImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getEncrypted()
 * @method string getResourceOwnerAccount()
 * @method string getDestinationImageName()
 * @method string getDestinationRegionId()
 * @method string getOwnerAccount()
 * @method array getTag()
 * @method string getOwnerId()
 * @method string getDestinationDescription()
 */
class CopyImage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'CopyImage';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $encrypted
     *
     * @return $this
     */
    public function withEncrypted($encrypted)
    {
        $this->data['Encrypted'] = $encrypted;
        $this->options['query']['Encrypted'] = $encrypted;

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
     * @param string $destinationImageName
     *
     * @return $this
     */
    public function withDestinationImageName($destinationImageName)
    {
        $this->data['DestinationImageName'] = $destinationImageName;
        $this->options['query']['DestinationImageName'] = $destinationImageName;

        return $this;
    }

    /**
     * @param string $destinationRegionId
     *
     * @return $this
     */
    public function withDestinationRegionId($destinationRegionId)
    {
        $this->data['DestinationRegionId'] = $destinationRegionId;
        $this->options['query']['DestinationRegionId'] = $destinationRegionId;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

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
     * @param string $destinationDescription
     *
     * @return $this
     */
    public function withDestinationDescription($destinationDescription)
    {
        $this->data['DestinationDescription'] = $destinationDescription;
        $this->options['query']['DestinationDescription'] = $destinationDescription;

        return $this;
    }
}
