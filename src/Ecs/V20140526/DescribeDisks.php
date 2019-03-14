<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDisks
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getFilter2Value()
 * @method string getAutoSnapshotPolicyId()
 * @method string getPageNumber()
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getResourceGroupId()
 * @method string getDiskChargeType()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method string getDiskIds()
 * @method array getTag()
 * @method string getDeleteWithInstance()
 * @method string getEnableAutoSnapshot()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFilter1Value()
 * @method string getPortable()
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getDiskType()
 * @method array getAdditionalAttributes()
 * @method string getEnableShared()
 * @method string getInstanceId()
 * @method string getEncrypted()
 * @method string getZoneId()
 * @method string getCategory()
 * @method string getKMSKeyId()
 * @method string getStatus()
 */
class DescribeDisks extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

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
     * @param string $snapshotId
     *
     * @return $this
     */
    public function withSnapshotId($snapshotId)
    {
        $this->data['SnapshotId'] = $snapshotId;
        $this->options['query']['SnapshotId'] = $snapshotId;

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
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->data['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->options['query']['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;

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
     * @param string $diskName
     *
     * @return $this
     */
    public function withDiskName($diskName)
    {
        $this->data['DiskName'] = $diskName;
        $this->options['query']['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function withDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->data['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->options['query']['DeleteAutoSnapshot'] = $deleteAutoSnapshot;

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
     * @param string $diskChargeType
     *
     * @return $this
     */
    public function withDiskChargeType($diskChargeType)
    {
        $this->data['DiskChargeType'] = $diskChargeType;
        $this->options['query']['DiskChargeType'] = $diskChargeType;

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
     * @param string $diskIds
     *
     * @return $this
     */
    public function withDiskIds($diskIds)
    {
        $this->data['DiskIds'] = $diskIds;
        $this->options['query']['DiskIds'] = $diskIds;

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
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function withDeleteWithInstance($deleteWithInstance)
    {
        $this->data['DeleteWithInstance'] = $deleteWithInstance;
        $this->options['query']['DeleteWithInstance'] = $deleteWithInstance;

        return $this;
    }

    /**
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function withEnableAutoSnapshot($enableAutoSnapshot)
    {
        $this->data['EnableAutoSnapshot'] = $enableAutoSnapshot;
        $this->options['query']['EnableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @param string $portable
     *
     * @return $this
     */
    public function withPortable($portable)
    {
        $this->data['Portable'] = $portable;
        $this->options['query']['Portable'] = $portable;

        return $this;
    }

    /**
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function withEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        $this->data['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;
        $this->options['query']['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function withDiskType($diskType)
    {
        $this->data['DiskType'] = $diskType;
        $this->options['query']['DiskType'] = $diskType;

        return $this;
    }

    /**
     * @param array $additionalAttributes
     *
     * @return $this
     */
    public function withAdditionalAttributes(array $additionalAttributes)
    {
        $this->data['AdditionalAttributes'] = $additionalAttributes;
        foreach ($additionalAttributes as $i => $iValue) {
            $this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $enableShared
     *
     * @return $this
     */
    public function withEnableShared($enableShared)
    {
        $this->data['EnableShared'] = $enableShared;
        $this->options['query']['EnableShared'] = $enableShared;

        return $this;
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
     * @param string $encrypted
     *
     * @return $this
     */
    public function withEncrypted($encrypted)
    {
        $this->data['Encrypted'] = $encrypted;
        $this->options['query']['Encrypted'] = $encrypted;

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
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }

    /**
     * @param string $kMSKeyId
     *
     * @return $this
     */
    public function withKMSKeyId($kMSKeyId)
    {
        $this->data['KMSKeyId'] = $kMSKeyId;
        $this->options['query']['KMSKeyId'] = $kMSKeyId;

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
