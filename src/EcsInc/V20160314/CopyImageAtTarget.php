<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopyImageAtTarget
 *
 * @method string getResourceOwnerId()
 * @method string getFromSnapshotListBase64()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getImageSnapshotMappingsBase64()
 * @method string getDestinationImageName()
 * @method string getResourceMetaMappingsBase64()
 * @method string getOwnerAccount()
 * @method string getDestinationRegionId()
 * @method string getOwnerId()
 * @method string getFromRegionId()
 * @method string getFromRegionName()
 * @method string getFromImageBase64()
 * @method string getDestinationRegionPriId()
 * @method string getDestinationDescription()
 */
class CopyImageAtTarget extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'CopyImageAtTarget';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withFromSnapshotListBase64() instead.
     *
     * @param string $fromSnapshotListBase64
     *
     * @return $this
     */
    public function setFromSnapshotListBase64($fromSnapshotListBase64)
    {
        return $this->withFromSnapshotListBase64($fromSnapshotListBase64);
    }

    /**
     * @param string $fromSnapshotListBase64
     *
     * @return $this
     */
    public function withFromSnapshotListBase64($fromSnapshotListBase64)
    {
        $this->data['FromSnapshotListBase64'] = $fromSnapshotListBase64;
        $this->options['query']['FromSnapshotListBase64'] = $fromSnapshotListBase64;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use withImageSnapshotMappingsBase64() instead.
     *
     * @param string $imageSnapshotMappingsBase64
     *
     * @return $this
     */
    public function setImageSnapshotMappingsBase64($imageSnapshotMappingsBase64)
    {
        return $this->withImageSnapshotMappingsBase64($imageSnapshotMappingsBase64);
    }

    /**
     * @param string $imageSnapshotMappingsBase64
     *
     * @return $this
     */
    public function withImageSnapshotMappingsBase64($imageSnapshotMappingsBase64)
    {
        $this->data['ImageSnapshotMappingsBase64'] = $imageSnapshotMappingsBase64;
        $this->options['query']['ImageSnapshotMappingsBase64'] = $imageSnapshotMappingsBase64;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationImageName() instead.
     *
     * @param string $destinationImageName
     *
     * @return $this
     */
    public function setDestinationImageName($destinationImageName)
    {
        return $this->withDestinationImageName($destinationImageName);
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
     * @deprecated deprecated since version 2.0, Use withResourceMetaMappingsBase64() instead.
     *
     * @param string $resourceMetaMappingsBase64
     *
     * @return $this
     */
    public function setResourceMetaMappingsBase64($resourceMetaMappingsBase64)
    {
        return $this->withResourceMetaMappingsBase64($resourceMetaMappingsBase64);
    }

    /**
     * @param string $resourceMetaMappingsBase64
     *
     * @return $this
     */
    public function withResourceMetaMappingsBase64($resourceMetaMappingsBase64)
    {
        $this->data['ResourceMetaMappingsBase64'] = $resourceMetaMappingsBase64;
        $this->options['query']['ResourceMetaMappingsBase64'] = $resourceMetaMappingsBase64;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withDestinationRegionId() instead.
     *
     * @param string $destinationRegionId
     *
     * @return $this
     */
    public function setDestinationRegionId($destinationRegionId)
    {
        return $this->withDestinationRegionId($destinationRegionId);
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
     * @deprecated deprecated since version 2.0, Use withFromRegionId() instead.
     *
     * @param string $fromRegionId
     *
     * @return $this
     */
    public function setFromRegionId($fromRegionId)
    {
        return $this->withFromRegionId($fromRegionId);
    }

    /**
     * @param string $fromRegionId
     *
     * @return $this
     */
    public function withFromRegionId($fromRegionId)
    {
        $this->data['FromRegionId'] = $fromRegionId;
        $this->options['query']['FromRegionId'] = $fromRegionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFromRegionName() instead.
     *
     * @param string $fromRegionName
     *
     * @return $this
     */
    public function setFromRegionName($fromRegionName)
    {
        return $this->withFromRegionName($fromRegionName);
    }

    /**
     * @param string $fromRegionName
     *
     * @return $this
     */
    public function withFromRegionName($fromRegionName)
    {
        $this->data['FromRegionName'] = $fromRegionName;
        $this->options['query']['FromRegionName'] = $fromRegionName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFromImageBase64() instead.
     *
     * @param string $fromImageBase64
     *
     * @return $this
     */
    public function setFromImageBase64($fromImageBase64)
    {
        return $this->withFromImageBase64($fromImageBase64);
    }

    /**
     * @param string $fromImageBase64
     *
     * @return $this
     */
    public function withFromImageBase64($fromImageBase64)
    {
        $this->data['FromImageBase64'] = $fromImageBase64;
        $this->options['query']['FromImageBase64'] = $fromImageBase64;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationRegionPriId() instead.
     *
     * @param string $destinationRegionPriId
     *
     * @return $this
     */
    public function setDestinationRegionPriId($destinationRegionPriId)
    {
        return $this->withDestinationRegionPriId($destinationRegionPriId);
    }

    /**
     * @param string $destinationRegionPriId
     *
     * @return $this
     */
    public function withDestinationRegionPriId($destinationRegionPriId)
    {
        $this->data['DestinationRegionPriId'] = $destinationRegionPriId;
        $this->options['query']['DestinationRegionPriId'] = $destinationRegionPriId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationDescription() instead.
     *
     * @param string $destinationDescription
     *
     * @return $this
     */
    public function setDestinationDescription($destinationDescription)
    {
        return $this->withDestinationDescription($destinationDescription);
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
