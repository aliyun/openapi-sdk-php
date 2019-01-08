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
