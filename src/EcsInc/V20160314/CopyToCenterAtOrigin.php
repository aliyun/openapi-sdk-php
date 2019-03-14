<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api CopyToCenterAtOrigin
 *
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method string getResourceOwnerId()
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTag3Key()
 * @method string getFromRegionId()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class CopyToCenterAtOrigin extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $tag4Value
     *
     * @return $this
     */
    public function withTag4Value($tag4Value)
    {
        $this->data['Tag4Value'] = $tag4Value;
        $this->options['query']['Tag.4.Value'] = $tag4Value;

        return $this;
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
     * @param string $tag2Key
     *
     * @return $this
     */
    public function withTag2Key($tag2Key)
    {
        $this->data['Tag2Key'] = $tag2Key;
        $this->options['query']['Tag.2.Key'] = $tag2Key;

        return $this;
    }

    /**
     * @param string $tag5Key
     *
     * @return $this
     */
    public function withTag5Key($tag5Key)
    {
        $this->data['Tag5Key'] = $tag5Key;
        $this->options['query']['Tag.5.Key'] = $tag5Key;

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
     * @param string $tag3Key
     *
     * @return $this
     */
    public function withTag3Key($tag3Key)
    {
        $this->data['Tag3Key'] = $tag3Key;
        $this->options['query']['Tag.3.Key'] = $tag3Key;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $tag5Value
     *
     * @return $this
     */
    public function withTag5Value($tag5Value)
    {
        $this->data['Tag5Value'] = $tag5Value;
        $this->options['query']['Tag.5.Value'] = $tag5Value;

        return $this;
    }

    /**
     * @param string $tag1Key
     *
     * @return $this
     */
    public function withTag1Key($tag1Key)
    {
        $this->data['Tag1Key'] = $tag1Key;
        $this->options['query']['Tag.1.Key'] = $tag1Key;

        return $this;
    }

    /**
     * @param string $tag1Value
     *
     * @return $this
     */
    public function withTag1Value($tag1Value)
    {
        $this->data['Tag1Value'] = $tag1Value;
        $this->options['query']['Tag.1.Value'] = $tag1Value;

        return $this;
    }

    /**
     * @param string $tag2Value
     *
     * @return $this
     */
    public function withTag2Value($tag2Value)
    {
        $this->data['Tag2Value'] = $tag2Value;
        $this->options['query']['Tag.2.Value'] = $tag2Value;

        return $this;
    }

    /**
     * @param string $tag4Key
     *
     * @return $this
     */
    public function withTag4Key($tag4Key)
    {
        $this->data['Tag4Key'] = $tag4Key;
        $this->options['query']['Tag.4.Key'] = $tag4Key;

        return $this;
    }

    /**
     * @param string $tag3Value
     *
     * @return $this
     */
    public function withTag3Value($tag3Value)
    {
        $this->data['Tag3Value'] = $tag3Value;
        $this->options['query']['Tag.3.Value'] = $tag3Value;

        return $this;
    }
}
