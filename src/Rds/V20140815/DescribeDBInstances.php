<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDBInstances
 *
 * @method string getConnectionMode()
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method string getTag2key()
 * @method string getClientToken()
 * @method string getSearchKey()
 * @method string getTag3key()
 * @method string getEngineVersion()
 * @method string getPageNumber()
 * @method string getTag1value()
 * @method string getExpired()
 * @method string getEngine()
 * @method string getPageSize()
 * @method string getDBInstanceStatus()
 * @method string getDBInstanceId()
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTag5value()
 * @method string getDBInstanceType()
 * @method string getDBInstanceClass()
 * @method string getTags()
 * @method string getVSwitchId()
 * @method string getTag1key()
 * @method string getVpcId()
 * @method string getTag2value()
 * @method string getZoneId()
 * @method string getTag4key()
 * @method string getPayType()
 * @method string getInstanceNetworkType()
 */
class DescribeDBInstances extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

    /**
     * @param string $connectionMode
     *
     * @return $this
     */
    public function withConnectionMode($connectionMode)
    {
        $this->data['ConnectionMode'] = $connectionMode;
        $this->options['query']['ConnectionMode'] = $connectionMode;

        return $this;
    }

    /**
     * @param string $tag4value
     *
     * @return $this
     */
    public function withTag4value($tag4value)
    {
        $this->data['Tag4value'] = $tag4value;
        $this->options['query']['Tag.4.value'] = $tag4value;

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
     * @param string $tag2key
     *
     * @return $this
     */
    public function withTag2key($tag2key)
    {
        $this->data['Tag2key'] = $tag2key;
        $this->options['query']['Tag.2.key'] = $tag2key;

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
     * @param string $searchKey
     *
     * @return $this
     */
    public function withSearchKey($searchKey)
    {
        $this->data['SearchKey'] = $searchKey;
        $this->options['query']['SearchKey'] = $searchKey;

        return $this;
    }

    /**
     * @param string $tag3key
     *
     * @return $this
     */
    public function withTag3key($tag3key)
    {
        $this->data['Tag3key'] = $tag3key;
        $this->options['query']['Tag.3.key'] = $tag3key;

        return $this;
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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $tag1value
     *
     * @return $this
     */
    public function withTag1value($tag1value)
    {
        $this->data['Tag1value'] = $tag1value;
        $this->options['query']['Tag.1.value'] = $tag1value;

        return $this;
    }

    /**
     * @param string $expired
     *
     * @return $this
     */
    public function withExpired($expired)
    {
        $this->data['Expired'] = $expired;
        $this->options['query']['Expired'] = $expired;

        return $this;
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $dBInstanceStatus
     *
     * @return $this
     */
    public function withDBInstanceStatus($dBInstanceStatus)
    {
        $this->data['DBInstanceStatus'] = $dBInstanceStatus;
        $this->options['query']['DBInstanceStatus'] = $dBInstanceStatus;

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
     * @param string $tag3value
     *
     * @return $this
     */
    public function withTag3value($tag3value)
    {
        $this->data['Tag3value'] = $tag3value;
        $this->options['query']['Tag.3.value'] = $tag3value;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }

    /**
     * @param string $tag5key
     *
     * @return $this
     */
    public function withTag5key($tag5key)
    {
        $this->data['Tag5key'] = $tag5key;
        $this->options['query']['Tag.5.key'] = $tag5key;

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
     * @param string $tag5value
     *
     * @return $this
     */
    public function withTag5value($tag5value)
    {
        $this->data['Tag5value'] = $tag5value;
        $this->options['query']['Tag.5.value'] = $tag5value;

        return $this;
    }

    /**
     * @param string $dBInstanceType
     *
     * @return $this
     */
    public function withDBInstanceType($dBInstanceType)
    {
        $this->data['DBInstanceType'] = $dBInstanceType;
        $this->options['query']['DBInstanceType'] = $dBInstanceType;

        return $this;
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
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $tag1key
     *
     * @return $this
     */
    public function withTag1key($tag1key)
    {
        $this->data['Tag1key'] = $tag1key;
        $this->options['query']['Tag.1.key'] = $tag1key;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $tag2value
     *
     * @return $this
     */
    public function withTag2value($tag2value)
    {
        $this->data['Tag2value'] = $tag2value;
        $this->options['query']['Tag.2.value'] = $tag2value;

        return $this;
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
     * @param string $tag4key
     *
     * @return $this
     */
    public function withTag4key($tag4key)
    {
        $this->data['Tag4key'] = $tag4key;
        $this->options['query']['Tag.4.key'] = $tag4key;

        return $this;
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
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function withInstanceNetworkType($instanceNetworkType)
    {
        $this->data['InstanceNetworkType'] = $instanceNetworkType;
        $this->options['query']['InstanceNetworkType'] = $instanceNetworkType;

        return $this;
    }
}
