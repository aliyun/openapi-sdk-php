<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpgradeInstance
 *
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getVmNumber()
 * @method string getOwnerId()
 * @method string getVersionCode()
 */
class UpgradeInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'UpgradeInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @deprecated deprecated since version 2.0, Use withVmNumber() instead.
     *
     * @param string $vmNumber
     *
     * @return $this
     */
    public function setVmNumber($vmNumber)
    {
        return $this->withVmNumber($vmNumber);
    }

    /**
     * @param string $vmNumber
     *
     * @return $this
     */
    public function withVmNumber($vmNumber)
    {
        $this->data['VmNumber'] = $vmNumber;
        $this->options['query']['VmNumber'] = $vmNumber;

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
     * @deprecated deprecated since version 2.0, Use withVersionCode() instead.
     *
     * @param string $versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        return $this->withVersionCode($versionCode);
    }

    /**
     * @param string $versionCode
     *
     * @return $this
     */
    public function withVersionCode($versionCode)
    {
        $this->data['VersionCode'] = $versionCode;
        $this->options['query']['VersionCode'] = $versionCode;

        return $this;
    }
}
