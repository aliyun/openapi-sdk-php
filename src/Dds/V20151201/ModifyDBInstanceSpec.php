<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDBInstanceSpec
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getAutoPay()
 * @method string getFromApp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCouponNo()
 * @method string getOwnerId()
 * @method string getReplicationFactor()
 * @method string getDBInstanceClass()
 * @method string getSecurityToken()
 * @method string getEffectiveTime()
 * @method string getDBInstanceId()
 * @method string getBusinessInfo()
 * @method string getOrderType()
 */
class ModifyDBInstanceSpec extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'ModifyDBInstanceSpec';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

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
     * @deprecated deprecated since version 2.0, Use withDBInstanceStorage() instead.
     *
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function setDBInstanceStorage($dBInstanceStorage)
    {
        return $this->withDBInstanceStorage($dBInstanceStorage);
    }

    /**
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function withDBInstanceStorage($dBInstanceStorage)
    {
        $this->data['DBInstanceStorage'] = $dBInstanceStorage;
        $this->options['query']['DBInstanceStorage'] = $dBInstanceStorage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoPay() instead.
     *
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        return $this->withAutoPay($autoPay);
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
     * @deprecated deprecated since version 2.0, Use withFromApp() instead.
     *
     * @param string $fromApp
     *
     * @return $this
     */
    public function setFromApp($fromApp)
    {
        return $this->withFromApp($fromApp);
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
     * @deprecated deprecated since version 2.0, Use withCouponNo() instead.
     *
     * @param string $couponNo
     *
     * @return $this
     */
    public function setCouponNo($couponNo)
    {
        return $this->withCouponNo($couponNo);
    }

    /**
     * @param string $couponNo
     *
     * @return $this
     */
    public function withCouponNo($couponNo)
    {
        $this->data['CouponNo'] = $couponNo;
        $this->options['query']['CouponNo'] = $couponNo;

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
     * @deprecated deprecated since version 2.0, Use withReplicationFactor() instead.
     *
     * @param string $replicationFactor
     *
     * @return $this
     */
    public function setReplicationFactor($replicationFactor)
    {
        return $this->withReplicationFactor($replicationFactor);
    }

    /**
     * @param string $replicationFactor
     *
     * @return $this
     */
    public function withReplicationFactor($replicationFactor)
    {
        $this->data['ReplicationFactor'] = $replicationFactor;
        $this->options['query']['ReplicationFactor'] = $replicationFactor;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceClass() instead.
     *
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function setDBInstanceClass($dBInstanceClass)
    {
        return $this->withDBInstanceClass($dBInstanceClass);
    }

    /**
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function withDBInstanceClass($dBInstanceClass)
    {
        $this->data['DBInstanceClass'] = $dBInstanceClass;
        $this->options['query']['DBInstanceClass'] = $dBInstanceClass;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withEffectiveTime() instead.
     *
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        return $this->withEffectiveTime($effectiveTime);
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
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withBusinessInfo() instead.
     *
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        return $this->withBusinessInfo($businessInfo);
    }

    /**
     * @param string $businessInfo
     *
     * @return $this
     */
    public function withBusinessInfo($businessInfo)
    {
        $this->data['BusinessInfo'] = $businessInfo;
        $this->options['query']['BusinessInfo'] = $businessInfo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}
