<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateKwsDictionary
 *
 * @method string getResourceOwnerId()
 * @method string getListDesc()
 * @method string getKeywords()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDictionaryId()
 * @method string getOwnerId()
 * @method string getExtendConfig()
 */
class UpdateKwsDictionary extends RpcRequest
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
    public $action = 'UpdateKwsDictionary';

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
     * @deprecated deprecated since version 2.0, Use withListDesc() instead.
     *
     * @param string $listDesc
     *
     * @return $this
     */
    public function setListDesc($listDesc)
    {
        return $this->withListDesc($listDesc);
    }

    /**
     * @param string $listDesc
     *
     * @return $this
     */
    public function withListDesc($listDesc)
    {
        $this->data['ListDesc'] = $listDesc;
        $this->options['query']['ListDesc'] = $listDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeywords() instead.
     *
     * @param string $keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        return $this->withKeywords($keywords);
    }

    /**
     * @param string $keywords
     *
     * @return $this
     */
    public function withKeywords($keywords)
    {
        $this->data['Keywords'] = $keywords;
        $this->options['query']['Keywords'] = $keywords;

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
     * @deprecated deprecated since version 2.0, Use withDictionaryId() instead.
     *
     * @param string $dictionaryId
     *
     * @return $this
     */
    public function setDictionaryId($dictionaryId)
    {
        return $this->withDictionaryId($dictionaryId);
    }

    /**
     * @param string $dictionaryId
     *
     * @return $this
     */
    public function withDictionaryId($dictionaryId)
    {
        $this->data['DictionaryId'] = $dictionaryId;
        $this->options['query']['DictionaryId'] = $dictionaryId;

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
     * @deprecated deprecated since version 2.0, Use withExtendConfig() instead.
     *
     * @param string $extendConfig
     *
     * @return $this
     */
    public function setExtendConfig($extendConfig)
    {
        return $this->withExtendConfig($extendConfig);
    }

    /**
     * @param string $extendConfig
     *
     * @return $this
     */
    public function withExtendConfig($extendConfig)
    {
        $this->data['ExtendConfig'] = $extendConfig;
        $this->options['query']['ExtendConfig'] = $extendConfig;

        return $this;
    }
}
