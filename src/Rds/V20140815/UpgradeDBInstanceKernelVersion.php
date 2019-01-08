<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpgradeDBInstanceKernelVersion
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getUpgradeTime()
 * @method string getDBInstanceId()
 * @method string getSwitchTime()
 * @method string getOwnerId()
 */
class UpgradeDBInstanceKernelVersion extends RpcRequest
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
    public $action = 'UpgradeDBInstanceKernelVersion';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $upgradeTime
     *
     * @return $this
     */
    public function withUpgradeTime($upgradeTime)
    {
        $this->data['UpgradeTime'] = $upgradeTime;
        $this->options['query']['UpgradeTime'] = $upgradeTime;

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
     * @param string $switchTime
     *
     * @return $this
     */
    public function withSwitchTime($switchTime)
    {
        $this->data['SwitchTime'] = $switchTime;
        $this->options['query']['SwitchTime'] = $switchTime;

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
