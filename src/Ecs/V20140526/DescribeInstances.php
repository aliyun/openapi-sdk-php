<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInstances
 *
 * @method string getInnerIpAddresses()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getPrivateIpAddresses()
 * @method string getHpcClusterId()
 * @method string getFilter2Value()
 * @method string getFilter4Value()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getKeyPairName()
 * @method string getFilter4Key()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getRdmaIpAddresses()
 * @method string getDeviceAvailable()
 * @method string getPageSize()
 * @method string getPublicIpAddresses()
 * @method string getInstanceType()
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method string getFilter3Value()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getFilter1Value()
 * @method string getNeedSaleCycle()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getEipAddresses()
 * @method string getInstanceName()
 * @method string getInstanceIds()
 * @method string getInternetChargeType()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getFilter3Key()
 * @method string getInstanceNetworkType()
 * @method string getStatus()
 */
class DescribeInstances extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withInnerIpAddresses() instead.
     *
     * @param string $innerIpAddresses
     *
     * @return $this
     */
    public function setInnerIpAddresses($innerIpAddresses)
    {
        return $this->withInnerIpAddresses($innerIpAddresses);
    }

    /**
     * @param string $innerIpAddresses
     *
     * @return $this
     */
    public function withInnerIpAddresses($innerIpAddresses)
    {
        $this->data['InnerIpAddresses'] = $innerIpAddresses;
        $this->options['query']['InnerIpAddresses'] = $innerIpAddresses;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddresses() instead.
     *
     * @param string $privateIpAddresses
     *
     * @return $this
     */
    public function setPrivateIpAddresses($privateIpAddresses)
    {
        return $this->withPrivateIpAddresses($privateIpAddresses);
    }

    /**
     * @param string $privateIpAddresses
     *
     * @return $this
     */
    public function withPrivateIpAddresses($privateIpAddresses)
    {
        $this->data['PrivateIpAddresses'] = $privateIpAddresses;
        $this->options['query']['PrivateIpAddresses'] = $privateIpAddresses;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHpcClusterId() instead.
     *
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function setHpcClusterId($hpcClusterId)
    {
        return $this->withHpcClusterId($hpcClusterId);
    }

    /**
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function withHpcClusterId($hpcClusterId)
    {
        $this->data['HpcClusterId'] = $hpcClusterId;
        $this->options['query']['HpcClusterId'] = $hpcClusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter2Value() instead.
     *
     * @param string $filter2Value
     *
     * @return $this
     */
    public function setFilter2Value($filter2Value)
    {
        return $this->withFilter2Value($filter2Value);
    }

    /**
     * @param string $filter2Value
     *
     * @return $this
     */
    public function withFilter2Value($filter2Value)
    {
        $this->data['Filter2Value'] = $filter2Value;
        $this->options['query']['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter4Value() instead.
     *
     * @param string $filter4Value
     *
     * @return $this
     */
    public function setFilter4Value($filter4Value)
    {
        return $this->withFilter4Value($filter4Value);
    }

    /**
     * @param string $filter4Value
     *
     * @return $this
     */
    public function withFilter4Value($filter4Value)
    {
        $this->data['Filter4Value'] = $filter4Value;
        $this->options['query']['Filter.4.Value'] = $filter4Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIoOptimized() instead.
     *
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        return $this->withIoOptimized($ioOptimized);
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function withIoOptimized($ioOptimized)
    {
        $this->data['IoOptimized'] = $ioOptimized;
        $this->options['query']['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeyPairName() instead.
     *
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        return $this->withKeyPairName($keyPairName);
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function withKeyPairName($keyPairName)
    {
        $this->data['KeyPairName'] = $keyPairName;
        $this->options['query']['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter4Key() instead.
     *
     * @param string $filter4Key
     *
     * @return $this
     */
    public function setFilter4Key($filter4Key)
    {
        return $this->withFilter4Key($filter4Key);
    }

    /**
     * @param string $filter4Key
     *
     * @return $this
     */
    public function withFilter4Key($filter4Key)
    {
        $this->data['Filter4Key'] = $filter4Key;
        $this->options['query']['Filter.4.Key'] = $filter4Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLockReason() instead.
     *
     * @param string $lockReason
     *
     * @return $this
     */
    public function setLockReason($lockReason)
    {
        return $this->withLockReason($lockReason);
    }

    /**
     * @param string $lockReason
     *
     * @return $this
     */
    public function withLockReason($lockReason)
    {
        $this->data['LockReason'] = $lockReason;
        $this->options['query']['LockReason'] = $lockReason;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter1Key() instead.
     *
     * @param string $filter1Key
     *
     * @return $this
     */
    public function setFilter1Key($filter1Key)
    {
        return $this->withFilter1Key($filter1Key);
    }

    /**
     * @param string $filter1Key
     *
     * @return $this
     */
    public function withFilter1Key($filter1Key)
    {
        $this->data['Filter1Key'] = $filter1Key;
        $this->options['query']['Filter.1.Key'] = $filter1Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRdmaIpAddresses() instead.
     *
     * @param string $rdmaIpAddresses
     *
     * @return $this
     */
    public function setRdmaIpAddresses($rdmaIpAddresses)
    {
        return $this->withRdmaIpAddresses($rdmaIpAddresses);
    }

    /**
     * @param string $rdmaIpAddresses
     *
     * @return $this
     */
    public function withRdmaIpAddresses($rdmaIpAddresses)
    {
        $this->data['RdmaIpAddresses'] = $rdmaIpAddresses;
        $this->options['query']['RdmaIpAddresses'] = $rdmaIpAddresses;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceAvailable() instead.
     *
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function setDeviceAvailable($deviceAvailable)
    {
        return $this->withDeviceAvailable($deviceAvailable);
    }

    /**
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function withDeviceAvailable($deviceAvailable)
    {
        $this->data['DeviceAvailable'] = $deviceAvailable;
        $this->options['query']['DeviceAvailable'] = $deviceAvailable;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withPublicIpAddresses() instead.
     *
     * @param string $publicIpAddresses
     *
     * @return $this
     */
    public function setPublicIpAddresses($publicIpAddresses)
    {
        return $this->withPublicIpAddresses($publicIpAddresses);
    }

    /**
     * @param string $publicIpAddresses
     *
     * @return $this
     */
    public function withPublicIpAddresses($publicIpAddresses)
    {
        $this->data['PublicIpAddresses'] = $publicIpAddresses;
        $this->options['query']['PublicIpAddresses'] = $publicIpAddresses;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

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
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceChargeType() instead.
     *
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        return $this->withInstanceChargeType($instanceChargeType);
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function withInstanceChargeType($instanceChargeType)
    {
        $this->data['InstanceChargeType'] = $instanceChargeType;
        $this->options['query']['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter3Value() instead.
     *
     * @param string $filter3Value
     *
     * @return $this
     */
    public function setFilter3Value($filter3Value)
    {
        return $this->withFilter3Value($filter3Value);
    }

    /**
     * @param string $filter3Value
     *
     * @return $this
     */
    public function withFilter3Value($filter3Value)
    {
        $this->data['Filter3Value'] = $filter3Value;
        $this->options['query']['Filter.3.Value'] = $filter3Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDryRun() instead.
     *
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        return $this->withDryRun($dryRun);
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function withDryRun($dryRun)
    {
        $this->data['DryRun'] = $dryRun;
        $this->options['query']['DryRun'] = $dryRun;

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
     * @deprecated deprecated since version 2.0, Use withInstanceTypeFamily() instead.
     *
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instanceTypeFamily)
    {
        return $this->withInstanceTypeFamily($instanceTypeFamily);
    }

    /**
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function withInstanceTypeFamily($instanceTypeFamily)
    {
        $this->data['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->options['query']['InstanceTypeFamily'] = $instanceTypeFamily;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter1Value() instead.
     *
     * @param string $filter1Value
     *
     * @return $this
     */
    public function setFilter1Value($filter1Value)
    {
        return $this->withFilter1Value($filter1Value);
    }

    /**
     * @param string $filter1Value
     *
     * @return $this
     */
    public function withFilter1Value($filter1Value)
    {
        $this->data['Filter1Value'] = $filter1Value;
        $this->options['query']['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNeedSaleCycle() instead.
     *
     * @param string $needSaleCycle
     *
     * @return $this
     */
    public function setNeedSaleCycle($needSaleCycle)
    {
        return $this->withNeedSaleCycle($needSaleCycle);
    }

    /**
     * @param string $needSaleCycle
     *
     * @return $this
     */
    public function withNeedSaleCycle($needSaleCycle)
    {
        $this->data['NeedSaleCycle'] = $needSaleCycle;
        $this->options['query']['NeedSaleCycle'] = $needSaleCycle;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter2Key() instead.
     *
     * @param string $filter2Key
     *
     * @return $this
     */
    public function setFilter2Key($filter2Key)
    {
        return $this->withFilter2Key($filter2Key);
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function withFilter2Key($filter2Key)
    {
        $this->data['Filter2Key'] = $filter2Key;
        $this->options['query']['Filter.2.Key'] = $filter2Key;

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
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
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
     * @deprecated deprecated since version 2.0, Use withEipAddresses() instead.
     *
     * @param string $eipAddresses
     *
     * @return $this
     */
    public function setEipAddresses($eipAddresses)
    {
        return $this->withEipAddresses($eipAddresses);
    }

    /**
     * @param string $eipAddresses
     *
     * @return $this
     */
    public function withEipAddresses($eipAddresses)
    {
        $this->data['EipAddresses'] = $eipAddresses;
        $this->options['query']['EipAddresses'] = $eipAddresses;

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
     * @deprecated deprecated since version 2.0, Use withInstanceIds() instead.
     *
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        return $this->withInstanceIds($instanceIds);
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInternetChargeType() instead.
     *
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        return $this->withInternetChargeType($internetChargeType);
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function withInternetChargeType($internetChargeType)
    {
        $this->data['InternetChargeType'] = $internetChargeType;
        $this->options['query']['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
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
     * @deprecated deprecated since version 2.0, Use withFilter3Key() instead.
     *
     * @param string $filter3Key
     *
     * @return $this
     */
    public function setFilter3Key($filter3Key)
    {
        return $this->withFilter3Key($filter3Key);
    }

    /**
     * @param string $filter3Key
     *
     * @return $this
     */
    public function withFilter3Key($filter3Key)
    {
        $this->data['Filter3Key'] = $filter3Key;
        $this->options['query']['Filter.3.Key'] = $filter3Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceNetworkType() instead.
     *
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        return $this->withInstanceNetworkType($instanceNetworkType);
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

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
