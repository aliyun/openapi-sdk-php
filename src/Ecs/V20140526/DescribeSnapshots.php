<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeSnapshots
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
class DescribeSnapshots extends Rpc
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
