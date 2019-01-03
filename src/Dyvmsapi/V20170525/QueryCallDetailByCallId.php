<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCallDetailByCallId
 *
 * @method string getCallId()
 * @method string getResourceOwnerId()
 * @method string getQueryDate()
 * @method string getResourceOwnerAccount()
 * @method string getProdId()
 * @method string getOwnerId()
 */
class QueryCallDetailByCallId extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dyvmsapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'QueryCallDetailByCallId';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCallId() instead.
     *
     * @param string $callId
     *
     * @return $this
     */
    public function setCallId($callId)
    {
        return $this->withCallId($callId);
    }

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function withCallId($callId)
    {
        $this->data['CallId'] = $callId;
        $this->options['query']['CallId'] = $callId;

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
     * @deprecated deprecated since version 2.0, Use withQueryDate() instead.
     *
     * @param string $queryDate
     *
     * @return $this
     */
    public function setQueryDate($queryDate)
    {
        return $this->withQueryDate($queryDate);
    }

    /**
     * @param string $queryDate
     *
     * @return $this
     */
    public function withQueryDate($queryDate)
    {
        $this->data['QueryDate'] = $queryDate;
        $this->options['query']['QueryDate'] = $queryDate;

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
     * @deprecated deprecated since version 2.0, Use withProdId() instead.
     *
     * @param string $prodId
     *
     * @return $this
     */
    public function setProdId($prodId)
    {
        return $this->withProdId($prodId);
    }

    /**
     * @param string $prodId
     *
     * @return $this
     */
    public function withProdId($prodId)
    {
        $this->data['ProdId'] = $prodId;
        $this->options['query']['ProdId'] = $prodId;

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
