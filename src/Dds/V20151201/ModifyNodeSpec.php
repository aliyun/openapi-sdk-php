<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api ModifyNodeSpec
 *
 * @method string getResourceOwnerId()
 * @method string getAutoPay()
 * @method string getFromApp()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getNodeStorage()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getNodeClass()
 * @method string getSecurityToken()
 * @method string getEffectiveTime()
 * @method string getDBInstanceId()
 * @method string getNodeId()
 */
class ModifyNodeSpec extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

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
     * @param string $autoPay
     *
     * @return $this
     */
    public function withAutoPay($autoPay)
    {
        $this->data['AutoPay'] = $autoPay;
        $this->options['query']['AutoPay'] = $autoPay;

        return $this;
    }

    /**
     * @param string $fromApp
     *
     * @return $this
     */
    public function withFromApp($fromApp)
    {
        $this->data['FromApp'] = $fromApp;
        $this->options['query']['FromApp'] = $fromApp;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $nodeStorage
     *
     * @return $this
     */
    public function withNodeStorage($nodeStorage)
    {
        $this->data['NodeStorage'] = $nodeStorage;
        $this->options['query']['NodeStorage'] = $nodeStorage;

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
     * @param string $nodeClass
     *
     * @return $this
     */
    public function withNodeClass($nodeClass)
    {
        $this->data['NodeClass'] = $nodeClass;
        $this->options['query']['NodeClass'] = $nodeClass;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function withEffectiveTime($effectiveTime)
    {
        $this->data['EffectiveTime'] = $effectiveTime;
        $this->options['query']['EffectiveTime'] = $effectiveTime;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->options['query']['NodeId'] = $nodeId;

        return $this;
    }
}
