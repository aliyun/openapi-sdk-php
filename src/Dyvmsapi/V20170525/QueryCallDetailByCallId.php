<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api QueryCallDetailByCallId
 *
 * @method string getCallId()
 * @method string getResourceOwnerId()
 * @method string getQueryDate()
 * @method string getResourceOwnerAccount()
 * @method string getProdId()
 * @method string getOwnerId()
 */
class QueryCallDetailByCallId extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

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
