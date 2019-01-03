<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePrice
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getQuantity()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getCommodityCode()
 * @method string getEngineVersion()
 * @method string getOwnerId()
 * @method string getUsedTime()
 * @method string getDBInstanceClass()
 * @method string getInstanceUsedType()
 * @method string getEngine()
 * @method string getZoneId()
 * @method string getTimeType()
 * @method string getPayType()
 * @method string getOrderType()
 */
class DescribePrice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'DescribePrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @deprecated deprecated since version 2.0, Use withQuantity() instead.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        return $this->withQuantity($quantity);
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function withQuantity($quantity)
    {
        $this->data['Quantity'] = $quantity;
        $this->options['query']['Quantity'] = $quantity;

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withCommodityCode() instead.
     *
     * @param string $commodityCode
     *
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        return $this->withCommodityCode($commodityCode);
    }

    /**
     * @param string $commodityCode
     *
     * @return $this
     */
    public function withCommodityCode($commodityCode)
    {
        $this->data['CommodityCode'] = $commodityCode;
        $this->options['query']['CommodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEngineVersion() instead.
     *
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        return $this->withEngineVersion($engineVersion);
    }

    /**
     * @param string $engineVersion
     *
     * @return $this
     */
    public function withEngineVersion($engineVersion)
    {
        $this->data['EngineVersion'] = $engineVersion;
        $this->options['query']['EngineVersion'] = $engineVersion;

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
     * @deprecated deprecated since version 2.0, Use withUsedTime() instead.
     *
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        return $this->withUsedTime($usedTime);
    }

    /**
     * @param string $usedTime
     *
     * @return $this
     */
    public function withUsedTime($usedTime)
    {
        $this->data['UsedTime'] = $usedTime;
        $this->options['query']['UsedTime'] = $usedTime;

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
     * @deprecated deprecated since version 2.0, Use withInstanceUsedType() instead.
     *
     * @param string $instanceUsedType
     *
     * @return $this
     */
    public function setInstanceUsedType($instanceUsedType)
    {
        return $this->withInstanceUsedType($instanceUsedType);
    }

    /**
     * @param string $instanceUsedType
     *
     * @return $this
     */
    public function withInstanceUsedType($instanceUsedType)
    {
        $this->data['InstanceUsedType'] = $instanceUsedType;
        $this->options['query']['InstanceUsedType'] = $instanceUsedType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEngine() instead.
     *
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        return $this->withEngine($engine);
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function withEngine($engine)
    {
        $this->data['Engine'] = $engine;
        $this->options['query']['Engine'] = $engine;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeType() instead.
     *
     * @param string $timeType
     *
     * @return $this
     */
    public function setTimeType($timeType)
    {
        return $this->withTimeType($timeType);
    }

    /**
     * @param string $timeType
     *
     * @return $this
     */
    public function withTimeType($timeType)
    {
        $this->data['TimeType'] = $timeType;
        $this->options['query']['TimeType'] = $timeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

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
