<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SpiCallExecuteScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getUserBid()
 * @method string getAri()
 * @method string getOwnerId()
 * @method string getUserId()
 */
class SpiCallExecuteScalingRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'SpiCallExecuteScalingRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @param string $userBid
     *
     * @return $this
     */
    public function withUserBid($userBid)
    {
        $this->data['UserBid'] = $userBid;
        $this->options['query']['UserBid'] = $userBid;

        return $this;
    }

    /**
     * @param string $ari
     *
     * @return $this
     */
    public function withAri($ari)
    {
        $this->data['Ari'] = $ari;
        $this->options['query']['Ari'] = $ari;

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
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
