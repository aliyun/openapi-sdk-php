<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCopyProgressAtOrigin
 *
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method string getResourceOwnerId()
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFromRegionNo()
 * @method string getTag3Key()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class DescribeCopyProgressAtOrigin extends RpcRequest
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
    public $action = 'DescribeCopyProgressAtOrigin';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withTag4Value() instead.
     *
     * @param string $tag4Value
     *
     * @return $this
     */
    public function setTag4Value($tag4Value)
    {
        return $this->withTag4Value($tag4Value);
    }

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
     * @deprecated deprecated since version 2.0, Use withTag2Key() instead.
     *
     * @param string $tag2Key
     *
     * @return $this
     */
    public function setTag2Key($tag2Key)
    {
        return $this->withTag2Key($tag2Key);
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
     * @deprecated deprecated since version 2.0, Use withTag5Key() instead.
     *
     * @param string $tag5Key
     *
     * @return $this
     */
    public function setTag5Key($tag5Key)
    {
        return $this->withTag5Key($tag5Key);
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
     * @deprecated deprecated since version 2.0, Use withFromRegionNo() instead.
     *
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function setFromRegionNo($fromRegionNo)
    {
        return $this->withFromRegionNo($fromRegionNo);
    }

    /**
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function withFromRegionNo($fromRegionNo)
    {
        $this->data['FromRegionNo'] = $fromRegionNo;
        $this->options['query']['FromRegionNo'] = $fromRegionNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag3Key() instead.
     *
     * @param string $tag3Key
     *
     * @return $this
     */
    public function setTag3Key($tag3Key)
    {
        return $this->withTag3Key($tag3Key);
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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
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
     * @deprecated deprecated since version 2.0, Use withTag5Value() instead.
     *
     * @param string $tag5Value
     *
     * @return $this
     */
    public function setTag5Value($tag5Value)
    {
        return $this->withTag5Value($tag5Value);
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
     * @deprecated deprecated since version 2.0, Use withTag1Key() instead.
     *
     * @param string $tag1Key
     *
     * @return $this
     */
    public function setTag1Key($tag1Key)
    {
        return $this->withTag1Key($tag1Key);
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
     * @deprecated deprecated since version 2.0, Use withTag1Value() instead.
     *
     * @param string $tag1Value
     *
     * @return $this
     */
    public function setTag1Value($tag1Value)
    {
        return $this->withTag1Value($tag1Value);
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
     * @deprecated deprecated since version 2.0, Use withTag2Value() instead.
     *
     * @param string $tag2Value
     *
     * @return $this
     */
    public function setTag2Value($tag2Value)
    {
        return $this->withTag2Value($tag2Value);
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
     * @deprecated deprecated since version 2.0, Use withTag4Key() instead.
     *
     * @param string $tag4Key
     *
     * @return $this
     */
    public function setTag4Key($tag4Key)
    {
        return $this->withTag4Key($tag4Key);
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
     * @deprecated deprecated since version 2.0, Use withTag3Value() instead.
     *
     * @param string $tag3Value
     *
     * @return $this
     */
    public function setTag3Value($tag3Value)
    {
        return $this->withTag3Value($tag3Value);
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
