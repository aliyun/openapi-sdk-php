<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateNetworkOptimization
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getCcnId()
 * @method string getOwnerId()
 */
class CreateNetworkOptimization extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'CreateNetworkOptimization';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $ccnId
     *
     * @return $this
     */
    public function withCcnId($ccnId)
    {
        $this->data['CcnId'] = $ccnId;
        $this->options['query']['CcnId'] = $ccnId;

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
}
