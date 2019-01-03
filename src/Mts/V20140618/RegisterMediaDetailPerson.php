<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterMediaDetailPerson
 *
 * @method string getResourceOwnerId()
 * @method string getImages()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPersonLib()
 * @method string getOwnerId()
 * @method string getCategory()
 * @method string getPersonName()
 */
class RegisterMediaDetailPerson extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'RegisterMediaDetailPerson';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @deprecated deprecated since version 2.0, Use withImages() instead.
     *
     * @param string $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        return $this->withImages($images);
    }

    /**
     * @param string $images
     *
     * @return $this
     */
    public function withImages($images)
    {
        $this->data['Images'] = $images;
        $this->options['query']['Images'] = $images;

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
     * @deprecated deprecated since version 2.0, Use withPersonLib() instead.
     *
     * @param string $personLib
     *
     * @return $this
     */
    public function setPersonLib($personLib)
    {
        return $this->withPersonLib($personLib);
    }

    /**
     * @param string $personLib
     *
     * @return $this
     */
    public function withPersonLib($personLib)
    {
        $this->data['PersonLib'] = $personLib;
        $this->options['query']['PersonLib'] = $personLib;

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
