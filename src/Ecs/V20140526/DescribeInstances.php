<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeInstances
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
class DescribeInstances extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
