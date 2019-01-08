<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DecryptKey
 *
 * @method string getRand()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getCiphertextBlob()
 */
class DecryptKey extends RpcRequest
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
    public $action = 'DecryptKey';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @param string $rand
     *
     * @return $this
     */
    public function withRand($rand)
    {
        $this->data['Rand'] = $rand;
        $this->options['query']['Rand'] = $rand;

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
     * @param string $ciphertextBlob
     *
     * @return $this
     */
    public function withCiphertextBlob($ciphertextBlob)
    {
        $this->data['CiphertextBlob'] = $ciphertextBlob;
        $this->options['query']['CiphertextBlob'] = $ciphertextBlob;

        return $this;
    }
}
