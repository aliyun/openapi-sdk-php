<?php

namespace AlibabaCloud\DBFS\V20200418;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddTagsBatch addTagsBatch(array $options = [])
 * @method AttachDbfs attachDbfs(array $options = [])
 * @method CreateConstants createConstants(array $options = [])
 * @method CreateDbfs createDbfs(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method DbfsRecord dbfsRecord(array $options = [])
 * @method DeleteConstants deleteConstants(array $options = [])
 * @method DeleteDbfs deleteDbfs(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteTagsBatch deleteTagsBatch(array $options = [])
 * @method DescribeDbfsSpecifications describeDbfsSpecifications(array $options = [])
 * @method DetachDbfs detachDbfs(array $options = [])
 * @method GenerateUpgradeRecord generateUpgradeRecord(array $options = [])
 * @method GetDbfs getDbfs(array $options = [])
 * @method GetServiceLinkedRole getServiceLinkedRole(array $options = [])
 * @method GetSynchronizConstants getSynchronizConstants(array $options = [])
 * @method InsertSynchronizConstants insertSynchronizConstants(array $options = [])
 * @method ListConstants listConstants(array $options = [])
 * @method ListDbfs listDbfs(array $options = [])
 * @method ListSnapshot listSnapshot(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListTask listTask(array $options = [])
 * @method OpreateConstants opreateConstants(array $options = [])
 * @method PublishUpgradeTask publishUpgradeTask(array $options = [])
 * @method RenameDbfs renameDbfs(array $options = [])
 * @method ResetDbfs resetDbfs(array $options = [])
 * @method ResizeDbfs resizeDbfs(array $options = [])
 * @method StopUpgradeTask stopUpgradeTask(array $options = [])
 * @method TagDbfs tagDbfs(array $options = [])
 * @method UpdateConstants updateConstants(array $options = [])
 * @method UpdateTask updateTask(array $options = [])
 */
class DBFSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'DBFS';

    /** @var string */
    public $version = '2020-04-18';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDbfsList()
 * @method $this withDbfsList($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class AddTagsBatch extends Rpc
{
}

/**
 * @method string getECSInstanceId()
 * @method $this withECSInstanceId($value)
 * @method string getServerUrl()
 * @method $this withServerUrl($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class AttachDbfs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConstantsData()
 * @method $this withConstantsData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class CreateConstants extends Rpc
{
}

/**
 * @method string getSizeG()
 * @method $this withSizeG($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUsedScene()
 * @method $this withUsedScene($value)
 * @method string getFsName()
 * @method $this withFsName($value)
 * @method string getRaidStripeUnitNumber()
 * @method $this withRaidStripeUnitNumber($value)
 * @method string getEncryption()
 * @method $this withEncryption($value)
 * @method string getPerformanceLevel()
 * @method $this withPerformanceLevel($value)
 * @method string getEnableRaid()
 * @method $this withEnableRaid($value)
 * @method string getDeleteSnapshot()
 * @method $this withDeleteSnapshot($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class CreateDbfs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class CreateSnapshot extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DbfsRecord extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConstantsData()
 * @method $this withConstantsData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DeleteConstants extends Rpc
{
}

/**
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class DeleteDbfs extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteSnapshot extends Rpc
{
}

/**
 * @method string getDbfsList()
 * @method $this withDbfsList($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DeleteTagsBatch extends Rpc
{
}

/**
 * @method string getEcsInstanceType()
 * @method $this withEcsInstanceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeDbfsSpecifications extends Rpc
{
}

/**
 * @method string getECSInstanceId()
 * @method $this withECSInstanceId($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class DetachDbfs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBatchStrategyList()
 * @method $this withBatchStrategyList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GenerateUpgradeRecord extends Rpc
{
}

/**
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class GetDbfs extends Rpc
{
}

class GetServiceLinkedRole extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetSynchronizConstants extends Rpc
{
}

/**
 * @method string getZoneData()
 * @method $this withZoneData($value)
 * @method string getOsversionData()
 * @method $this withOsversionData($value)
 * @method string getEndpointData()
 * @method $this withEndpointData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMasterData()
 * @method $this withMasterData($value)
 * @method string getProductCodeData()
 * @method $this withProductCodeData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessData()
 * @method $this withAccessData($value)
 * @method string getRegionData()
 * @method $this withRegionData($value)
 */
class InsertSynchronizConstants extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConstantsData()
 * @method $this withConstantsData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListConstants extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDbfs extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListSnapshot extends Rpc
{
}

class ListTagKeys extends Rpc
{
}

/**
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTask extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConstantsData()
 * @method $this withConstantsData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class OpreateConstants extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBatchStrategyList()
 * @method $this withBatchStrategyList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class PublishUpgradeTask extends Rpc
{
}

/**
 * @method string getFsName()
 * @method $this withFsName($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class RenameDbfs extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class ResetDbfs extends Rpc
{
}

/**
 * @method string getNewSizeG()
 * @method $this withNewSizeG($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class ResizeDbfs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBatchStrategyList()
 * @method $this withBatchStrategyList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class StopUpgradeTask extends Rpc
{
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getDbfsId()
 * @method $this withDbfsId($value)
 */
class TagDbfs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConstantsData()
 * @method $this withConstantsData($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class UpdateConstants extends Rpc
{
}

/**
 * @method string getTaskProgress()
 * @method $this withTaskProgress($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class UpdateTask extends Rpc
{
}
