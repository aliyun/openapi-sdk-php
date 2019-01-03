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
     * @deprecated deprecated since version 2.0, Use withCenUid() instead.
     *
     * @param string $cenUid
     *
     * @return $this
     */
    public function setCenUid($cenUid)
    {
        return $this->withCenUid($cenUid);
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
     * @deprecated deprecated since version 2.0, Use withCenInstanceId() instead.
     *
     * @param string $cenInstanceId
     *
     * @return $this
     */
    public function setCenInstanceId($cenInstanceId)
    {
        return $this->withCenInstanceId($cenInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withCcnInstanceId() instead.
     *
     * @param string $ccnInstanceId
     *
     * @return $this
     */
    public function setCcnInstanceId($ccnInstanceId)
    {
        return $this->withCcnInstanceId($ccnInstanceId);
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
}
