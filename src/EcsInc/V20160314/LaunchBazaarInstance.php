<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api LaunchBazaarInstance
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getLaunchData()
 * @method string getLinkedSecurityGroupId()
 * @method string getAssumeRoleAccessKeySecret()
 * @method string getAssumeRoleSecurityToken()
 * @method string getHostName()
 * @method string getPassword()
 * @method string getMem()
 * @method array getTag()
 * @method string getAssumeRoleAccessKeyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCpu()
 * @method string getOwnerId()
 * @method string getInstanceName()
 * @method string getZoneId()
 * @method string getLinkedVSwitchId()
 */
class LaunchBazaarInstance extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $launchData
     *
     * @return $this
     */
    public function withLaunchData($launchData)
    {
        $this->data['LaunchData'] = $launchData;
        $this->options['query']['LaunchData'] = $launchData;

        return $this;
    }

    /**
     * @param string $linkedSecurityGroupId
     *
     * @return $this
     */
    public function withLinkedSecurityGroupId($linkedSecurityGroupId)
    {
        $this->data['LinkedSecurityGroupId'] = $linkedSecurityGroupId;
        $this->options['query']['LinkedSecurityGroupId'] = $linkedSecurityGroupId;

        return $this;
    }

    /**
     * @param string $assumeRoleAccessKeySecret
     *
     * @return $this
     */
    public function withAssumeRoleAccessKeySecret($assumeRoleAccessKeySecret)
    {
        $this->data['AssumeRoleAccessKeySecret'] = $assumeRoleAccessKeySecret;
        $this->options['query']['AssumeRoleAccessKeySecret'] = $assumeRoleAccessKeySecret;

        return $this;
    }

    /**
     * @param string $assumeRoleSecurityToken
     *
     * @return $this
     */
    public function withAssumeRoleSecurityToken($assumeRoleSecurityToken)
    {
        $this->data['AssumeRoleSecurityToken'] = $assumeRoleSecurityToken;
        $this->options['query']['AssumeRoleSecurityToken'] = $assumeRoleSecurityToken;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function withMem($mem)
    {
        $this->data['Mem'] = $mem;
        $this->options['query']['Mem'] = $mem;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $assumeRoleAccessKeyId
     *
     * @return $this
     */
    public function withAssumeRoleAccessKeyId($assumeRoleAccessKeyId)
    {
        $this->data['AssumeRoleAccessKeyId'] = $assumeRoleAccessKeyId;
        $this->options['query']['AssumeRoleAccessKeyId'] = $assumeRoleAccessKeyId;

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
     * @param string $cpu
     *
     * @return $this
     */
    public function withCpu($cpu)
    {
        $this->data['Cpu'] = $cpu;
        $this->options['query']['Cpu'] = $cpu;

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
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

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
     * @param string $linkedVSwitchId
     *
     * @return $this
     */
    public function withLinkedVSwitchId($linkedVSwitchId)
    {
        $this->data['LinkedVSwitchId'] = $linkedVSwitchId;
        $this->options['query']['LinkedVSwitchId'] = $linkedVSwitchId;

        return $this;
    }
}
