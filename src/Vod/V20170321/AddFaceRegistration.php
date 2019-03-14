<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api AddFaceRegistration
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
class AddFaceRegistration extends Rpc
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
