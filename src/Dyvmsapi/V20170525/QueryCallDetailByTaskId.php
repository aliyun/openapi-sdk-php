<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCallDetailByTaskId
 *
 * @method string getResourceOwnerId()
 * @method string getQueryDate()
 * @method string getResourceOwnerAccount()
 * @method string getCallee()
 * @method string getOwnerId()
 * @method string getTaskId()
 */
class QueryCallDetailByTaskId extends RpcRequest
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
    public $action = 'QueryCallDetailByTaskId';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withCallee() instead.
     *
     * @param string $callee
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        return $this->withCallee($callee);
    }

    /**
     * @param string $callee
     *
     * @return $this
     */
    public function withCallee($callee)
    {
        $this->data['Callee'] = $callee;
        $this->options['query']['Callee'] = $callee;

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
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
