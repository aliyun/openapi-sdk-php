<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api ModifyDBInstanceProxyConfiguration
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getProxyConfigurationKey()
 * @method string getProxyConfigurationValue()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class ModifyDBInstanceProxyConfiguration extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

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
     * @param string $proxyConfigurationKey
     *
     * @return $this
     */
    public function withProxyConfigurationKey($proxyConfigurationKey)
    {
        $this->data['ProxyConfigurationKey'] = $proxyConfigurationKey;
        $this->options['query']['ProxyConfigurationKey'] = $proxyConfigurationKey;

        return $this;
    }

    /**
     * @param string $proxyConfigurationValue
     *
     * @return $this
     */
    public function withProxyConfigurationValue($proxyConfigurationValue)
    {
        $this->data['ProxyConfigurationValue'] = $proxyConfigurationValue;
        $this->options['query']['ProxyConfigurationValue'] = $proxyConfigurationValue;

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
