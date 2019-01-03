<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddFaceRegistration
 *
 * @method string getResourceOwnerId()
 * @method string getPersonLibrary()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPersonId()
 * @method string getOwnerId()
 * @method string getCategory()
 * @method string getImageIds()
 * @method string getPersonName()
 */
class AddFaceRegistration extends RpcRequest
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
    public $action = 'AddFaceRegistration';

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
     * @deprecated deprecated since version 2.0, Use withPersonLibrary() instead.
     *
     * @param string $personLibrary
     *
     * @return $this
     */
    public function setPersonLibrary($personLibrary)
    {
        return $this->withPersonLibrary($personLibrary);
    }

    /**
     * @param string $personLibrary
     *
     * @return $this
     */
    public function withPersonLibrary($personLibrary)
    {
        $this->data['PersonLibrary'] = $personLibrary;
        $this->options['query']['PersonLibrary'] = $personLibrary;

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
     * @deprecated deprecated since version 2.0, Use withPersonId() instead.
     *
     * @param string $personId
     *
     * @return $this
     */
    public function setPersonId($personId)
    {
        return $this->withPersonId($personId);
    }

    /**
     * @param string $personId
     *
     * @return $this
     */
    public function withPersonId($personId)
    {
        $this->data['PersonId'] = $personId;
        $this->options['query']['PersonId'] = $personId;

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
     * @deprecated deprecated since version 2.0, Use withCategory() instead.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        return $this->withCategory($category);
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageIds() instead.
     *
     * @param string $imageIds
     *
     * @return $this
     */
    public function setImageIds($imageIds)
    {
        return $this->withImageIds($imageIds);
    }

    /**
     * @param string $imageIds
     *
     * @return $this
     */
    public function withImageIds($imageIds)
    {
        $this->data['ImageIds'] = $imageIds;
        $this->options['query']['ImageIds'] = $imageIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPersonName() instead.
     *
     * @param string $personName
     *
     * @return $this
     */
    public function setPersonName($personName)
    {
        return $this->withPersonName($personName);
    }

    /**
     * @param string $personName
     *
     * @return $this
     */
    public function withPersonName($personName)
    {
        $this->data['PersonName'] = $personName;
        $this->options['query']['PersonName'] = $personName;

        return $this;
    }
}
