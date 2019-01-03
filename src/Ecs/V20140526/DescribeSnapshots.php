<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSnapshots
 *
 * @method string getResourceOwnerId()
 * @method string getFilter2Value()
 * @method string getSnapshotIds()
 * @method string getUsage()
 * @method string getSnapshotLinkId()
 * @method string getSnapshotName()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method string getDiskId()
 * @method array getTag()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSourceDiskType()
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getEncrypted()
 * @method string getSnapshotType()
 * @method string getKMSKeyId()
 * @method string getStatus()
 */
class DescribeSnapshots extends RpcRequest
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
    public $action = 'DescribeSnapshots';

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
     * @deprecated deprecated since version 2.0, Use withSnapshotIds() instead.
     *
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function setSnapshotIds($snapshotIds)
    {
        return $this->withSnapshotIds($snapshotIds);
    }

    /**
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function withSnapshotIds($snapshotIds)
    {
        $this->data['SnapshotIds'] = $snapshotIds;
        $this->options['query']['SnapshotIds'] = $snapshotIds;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUsage() instead.
     *
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        return $this->withUsage($usage);
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function withUsage($usage)
    {
        $this->data['Usage'] = $usage;
        $this->options['query']['Usage'] = $usage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshotLinkId() instead.
     *
     * @param string $snapshotLinkId
     *
     * @return $this
     */
    public function setSnapshotLinkId($snapshotLinkId)
    {
        return $this->withSnapshotLinkId($snapshotLinkId);
    }

    /**
     * @param string $snapshotLinkId
     *
     * @return $this
     */
    public function withSnapshotLinkId($snapshotLinkId)
    {
        $this->data['SnapshotLinkId'] = $snapshotLinkId;
        $this->options['query']['SnapshotLinkId'] = $snapshotLinkId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshotName() instead.
     *
     * @param string $snapshotName
     *
     * @return $this
     */
    public function setSnapshotName($snapshotName)
    {
        return $this->withSnapshotName($snapshotName);
    }

    /**
     * @param string $snapshotName
     *
     * @return $this
     */
    public function withSnapshotName($snapshotName)
    {
        $this->data['SnapshotName'] = $snapshotName;
        $this->options['query']['SnapshotName'] = $snapshotName;

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
     * @deprecated deprecated since version 2.0, Use withDiskId() instead.
     *
     * @param string $diskId
     *
     * @return $this
     */
    public function setDiskId($diskId)
    {
        return $this->withDiskId($diskId);
    }

    /**
     * @param string $diskId
     *
     * @return $this
     */
    public function withDiskId($diskId)
    {
        $this->data['DiskId'] = $diskId;
        $this->options['query']['DiskId'] = $diskId;

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
     * @deprecated deprecated since version 2.0, Use withSourceDiskType() instead.
     *
     * @param string $sourceDiskType
     *
     * @return $this
     */
    public function setSourceDiskType($sourceDiskType)
    {
        return $this->withSourceDiskType($sourceDiskType);
    }

    /**
     * @param string $sourceDiskType
     *
     * @return $this
     */
    public function withSourceDiskType($sourceDiskType)
    {
        $this->data['SourceDiskType'] = $sourceDiskType;
        $this->options['query']['SourceDiskType'] = $sourceDiskType;

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
     * @deprecated deprecated since version 2.0, Use withSnapshotType() instead.
     *
     * @param string $snapshotType
     *
     * @return $this
     */
    public function setSnapshotType($snapshotType)
    {
        return $this->withSnapshotType($snapshotType);
    }

    /**
     * @param string $snapshotType
     *
     * @return $this
     */
    public function withSnapshotType($snapshotType)
    {
        $this->data['SnapshotType'] = $snapshotType;
        $this->options['query']['SnapshotType'] = $snapshotType;

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
