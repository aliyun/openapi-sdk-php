<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GrantInstanceToCbn
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenUid()
 * @method string getCenInstanceId()
 * @method string getOwnerAccount()
 * @method string getCcnInstanceId()
 * @method string getOwnerId()
 */
class GrantInstanceToCbn extends RpcRequest
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
    public $action = 'GrantInstanceToCbn';

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
     * @param string $cenUid
     *
     * @return $this
     */
    public function withCenUid($cenUid)
    {
        $this->data['CenUid'] = $cenUid;
        $this->options['query']['CenUid'] = $cenUid;

        return $this;
    }

    /**
     * @param string $cenInstanceId
     *
     * @return $this
     */
    public function withCenInstanceId($cenInstanceId)
    {
        $this->data['CenInstanceId'] = $cenInstanceId;
        $this->options['query']['CenInstanceId'] = $cenInstanceId;

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
     * @param string $ccnInstanceId
     *
     * @return $this
     */
    public function withCcnInstanceId($ccnInstanceId)
    {
        $this->data['CcnInstanceId'] = $ccnInstanceId;
        $this->options['query']['CcnInstanceId'] = $ccnInstanceId;

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
