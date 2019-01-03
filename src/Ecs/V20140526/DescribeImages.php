<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeImages
 *
 * @method string getActionType()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getSnapshotId()
 * @method string getUsage()
 * @method string getPageNumber()
 * @method string getImageOwnerAlias()
 * @method string getResourceGroupId()
 * @method string getIsSupportIoOptimized()
 * @method string getImageName()
 * @method string getIsSupportCloudinit()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method array getTag()
 * @method string getArchitecture()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getShowExpired()
 * @method string getOSType()
 * @method string getOwnerId()
 * @method array getFilter()
 * @method string getStatus()
 */
class DescribeImages extends RpcRequest
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
    public $action = 'DescribeImages';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withActionType() instead.
     *
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        return $this->withActionType($actionType);
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function withActionType($actionType)
    {
        $this->data['ActionType'] = $actionType;
        $this->options['query']['ActionType'] = $actionType;

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
     * @deprecated deprecated since version 2.0, Use withImageOwnerAlias() instead.
     *
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        return $this->withImageOwnerAlias($imageOwnerAlias);
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

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
     * @deprecated deprecated since version 2.0, Use withIsSupportIoOptimized() instead.
     *
     * @param string $isSupportIoOptimized
     *
     * @return $this
     */
    public function setIsSupportIoOptimized($isSupportIoOptimized)
    {
        return $this->withIsSupportIoOptimized($isSupportIoOptimized);
    }

    /**
     * @param string $isSupportIoOptimized
     *
     * @return $this
     */
    public function withIsSupportIoOptimized($isSupportIoOptimized)
    {
        $this->data['IsSupportIoOptimized'] = $isSupportIoOptimized;
        $this->options['query']['IsSupportIoOptimized'] = $isSupportIoOptimized;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageName() instead.
     *
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        return $this->withImageName($imageName);
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function withImageName($imageName)
    {
        $this->data['ImageName'] = $imageName;
        $this->options['query']['ImageName'] = $imageName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIsSupportCloudinit() instead.
     *
     * @param string $isSupportCloudinit
     *
     * @return $this
     */
    public function setIsSupportCloudinit($isSupportCloudinit)
    {
        return $this->withIsSupportCloudinit($isSupportCloudinit);
    }

    /**
     * @param string $isSupportCloudinit
     *
     * @return $this
     */
    public function withIsSupportCloudinit($isSupportCloudinit)
    {
        $this->data['IsSupportCloudinit'] = $isSupportCloudinit;
        $this->options['query']['IsSupportCloudinit'] = $isSupportCloudinit;

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
     * @deprecated deprecated since version 2.0, Use withArchitecture() instead.
     *
     * @param string $architecture
     *
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        return $this->withArchitecture($architecture);
    }

    /**
     * @param string $architecture
     *
     * @return $this
     */
    public function withArchitecture($architecture)
    {
        $this->data['Architecture'] = $architecture;
        $this->options['query']['Architecture'] = $architecture;

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
     * @deprecated deprecated since version 2.0, Use withShowExpired() instead.
     *
     * @param string $showExpired
     *
     * @return $this
     */
    public function setShowExpired($showExpired)
    {
        return $this->withShowExpired($showExpired);
    }

    /**
     * @param string $showExpired
     *
     * @return $this
     */
    public function withShowExpired($showExpired)
    {
        $this->data['ShowExpired'] = $showExpired;
        $this->options['query']['ShowExpired'] = $showExpired;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOSType() instead.
     *
     * @param string $oSType
     *
     * @return $this
     */
    public function setOSType($oSType)
    {
        return $this->withOSType($oSType);
    }

    /**
     * @param string $oSType
     *
     * @return $this
     */
    public function withOSType($oSType)
    {
        $this->data['OSType'] = $oSType;
        $this->options['query']['OSType'] = $oSType;

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
     * @deprecated deprecated since version 2.0, Use getFilter() instead.
     *
     * @return array
     */
    public function getFilters()
    {
        return $this->getFilter();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter() instead.
     *
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        return $this->withFilter($filters);
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
        }

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
