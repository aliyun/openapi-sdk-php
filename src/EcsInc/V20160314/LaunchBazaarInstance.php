<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of LaunchBazaarInstance
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
class LaunchBazaarInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'LaunchBazaarInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use withLaunchData() instead.
     *
     * @param string $launchData
     *
     * @return $this
     */
    public function setLaunchData($launchData)
    {
        return $this->withLaunchData($launchData);
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
     * @deprecated deprecated since version 2.0, Use withLinkedSecurityGroupId() instead.
     *
     * @param string $linkedSecurityGroupId
     *
     * @return $this
     */
    public function setLinkedSecurityGroupId($linkedSecurityGroupId)
    {
        return $this->withLinkedSecurityGroupId($linkedSecurityGroupId);
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
     * @deprecated deprecated since version 2.0, Use withAssumeRoleAccessKeySecret() instead.
     *
     * @param string $assumeRoleAccessKeySecret
     *
     * @return $this
     */
    public function setAssumeRoleAccessKeySecret($assumeRoleAccessKeySecret)
    {
        return $this->withAssumeRoleAccessKeySecret($assumeRoleAccessKeySecret);
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
     * @deprecated deprecated since version 2.0, Use withAssumeRoleSecurityToken() instead.
     *
     * @param string $assumeRoleSecurityToken
     *
     * @return $this
     */
    public function setAssumeRoleSecurityToken($assumeRoleSecurityToken)
    {
        return $this->withAssumeRoleSecurityToken($assumeRoleSecurityToken);
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
     * @deprecated deprecated since version 2.0, Use withHostName() instead.
     *
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        return $this->withHostName($hostName);
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
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
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
     * @deprecated deprecated since version 2.0, Use withMem() instead.
     *
     * @param string $mem
     *
     * @return $this
     */
    public function setMem($mem)
    {
        return $this->withMem($mem);
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
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
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
     * @deprecated deprecated since version 2.0, Use withAssumeRoleAccessKeyId() instead.
     *
     * @param string $assumeRoleAccessKeyId
     *
     * @return $this
     */
    public function setAssumeRoleAccessKeyId($assumeRoleAccessKeyId)
    {
        return $this->withAssumeRoleAccessKeyId($assumeRoleAccessKeyId);
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
     * @deprecated deprecated since version 2.0, Use withCpu() instead.
     *
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        return $this->withCpu($cpu);
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
     * @deprecated deprecated since version 2.0, Use withInstanceName() instead.
     *
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        return $this->withInstanceName($instanceName);
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
     * @deprecated deprecated since version 2.0, Use withLinkedVSwitchId() instead.
     *
     * @param string $linkedVSwitchId
     *
     * @return $this
     */
    public function setLinkedVSwitchId($linkedVSwitchId)
    {
        return $this->withLinkedVSwitchId($linkedVSwitchId);
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
