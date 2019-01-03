<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDisks
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
class DescribeDisks extends RpcRequest
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
    public $action = 'DescribeDisks';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withSnapshotId() instead.
     *
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        return $this->withSnapshotId($snapshotId);
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
     * @deprecated deprecated since version 2.0, Use withAutoSnapshotPolicyId() instead.
     *
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        return $this->withAutoSnapshotPolicyId($autoSnapshotPolicyId);
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
     * @deprecated deprecated since version 2.0, Use withDiskName() instead.
     *
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        return $this->withDiskName($diskName);
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
     * @deprecated deprecated since version 2.0, Use withDeleteAutoSnapshot() instead.
     *
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        return $this->withDeleteAutoSnapshot($deleteAutoSnapshot);
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
     * @deprecated deprecated since version 2.0, Use withDiskChargeType() instead.
     *
     * @param string $diskChargeType
     *
     * @return $this
     */
    public function setDiskChargeType($diskChargeType)
    {
        return $this->withDiskChargeType($diskChargeType);
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
     * @deprecated deprecated since version 2.0, Use withDiskIds() instead.
     *
     * @param string $diskIds
     *
     * @return $this
     */
    public function setDiskIds($diskIds)
    {
        return $this->withDiskIds($diskIds);
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
     * @deprecated deprecated since version 2.0, Use withDeleteWithInstance() instead.
     *
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setDeleteWithInstance($deleteWithInstance)
    {
        return $this->withDeleteWithInstance($deleteWithInstance);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutoSnapshot() instead.
     *
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setEnableAutoSnapshot($enableAutoSnapshot)
    {
        return $this->withEnableAutoSnapshot($enableAutoSnapshot);
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
     * @deprecated deprecated since version 2.0, Use withPortable() instead.
     *
     * @param string $portable
     *
     * @return $this
     */
    public function setPortable($portable)
    {
        return $this->withPortable($portable);
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
     * @deprecated deprecated since version 2.0, Use withEnableAutomatedSnapshotPolicy() instead.
     *
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function setEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        return $this->withEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy);
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
     * @deprecated deprecated since version 2.0, Use withDiskType() instead.
     *
     * @param string $diskType
     *
     * @return $this
     */
    public function setDiskType($diskType)
    {
        return $this->withDiskType($diskType);
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
     * @deprecated deprecated since version 2.0, Use getAdditionalAttributes() instead.
     *
     * @return array
     */
    public function getAdditionalAttributess()
    {
        return $this->getAdditionalAttributes();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAdditionalAttributes() instead.
     *
     * @param array $additionalAttributess
     *
     * @return $this
     */
    public function setAdditionalAttributess(array $additionalAttributess)
    {
        return $this->withAdditionalAttributes($additionalAttributess);
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
     * @deprecated deprecated since version 2.0, Use withEnableShared() instead.
     *
     * @param string $enableShared
     *
     * @return $this
     */
    public function setEnableShared($enableShared)
    {
        return $this->withEnableShared($enableShared);
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
     * @deprecated deprecated since version 2.0, Use withEncrypted() instead.
     *
     * @param string $encrypted
     *
     * @return $this
     */
    public function setEncrypted($encrypted)
    {
        return $this->withEncrypted($encrypted);
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
     * @deprecated deprecated since version 2.0, Use withCategory() instead.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        return $this->withCategory($category);
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
     * @deprecated deprecated since version 2.0, Use withKMSKeyId() instead.
     *
     * @param string $kMSKeyId
     *
     * @return $this
     */
    public function setKMSKeyId($kMSKeyId)
    {
        return $this->withKMSKeyId($kMSKeyId);
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
