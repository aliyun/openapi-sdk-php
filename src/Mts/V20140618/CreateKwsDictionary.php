<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api CreateKwsDictionary
 *
 * @method string getResourceOwnerId()
 * @method string getListDesc()
 * @method string getKeywords()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getExtendConfig()
 */
class CreateKwsDictionary extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
