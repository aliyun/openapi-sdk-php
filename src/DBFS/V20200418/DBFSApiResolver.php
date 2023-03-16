<?php

namespace AlibabaCloud\DBFS\V20200418;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddTagsBatch addTagsBatch(array $options = [])
 * @method ApplyAutoSnapshotPolicy applyAutoSnapshotPolicy(array $options = [])
 * @method AttachDbfs attachDbfs(array $options = [])
 * @method CancelAutoSnapshotPolicy cancelAutoSnapshotPolicy(array $options = [])
 * @method CreateAutoSnapshotPolicy createAutoSnapshotPolicy(array $options = [])
 * @method CreateDbfs createDbfs(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method DeleteAutoSnapshotPolicy deleteAutoSnapshotPolicy(array $options = [])
 * @method DeleteDbfs deleteDbfs(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteTagsBatch deleteTagsBatch(array $options = [])
 * @method DescribeDbfsSpecifications describeDbfsSpecifications(array $options = [])
 * @method DescribeInstanceTypes describeInstanceTypes(array $options = [])
 * @method DetachDbfs detachDbfs(array $options = [])
 * @method GetAutoSnapshotPolicy getAutoSnapshotPolicy(array $options = [])
 * @method GetDbfs getDbfs(array $options = [])
 * @method GetServiceLinkedRole getServiceLinkedRole(array $options = [])
 * @method GetSnapshotLink getSnapshotLink(array $options = [])
 * @method ListAutoSnapshotPolicies listAutoSnapshotPolicies(array $options = [])
 * @method ListAutoSnapshotPolicyAppliedDbfs listAutoSnapshotPolicyAppliedDbfs(array $options = [])
 * @method ListAutoSnapshotPolicyUnappliedDbfs listAutoSnapshotPolicyUnappliedDbfs(array $options = [])
 * @method ListDbfs listDbfs(array $options = [])
 * @method ListDbfsAttachableEcsInstances listDbfsAttachableEcsInstances(array $options = [])
 * @method ListDbfsAttachedEcsInstances listDbfsAttachedEcsInstances(array $options = [])
 * @method ListSnapshot listSnapshot(array $options = [])
 * @method ListSnapshotLinks listSnapshotLinks(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ModifyAutoSnapshotPolicy modifyAutoSnapshotPolicy(array $options = [])
 * @method ModifySnapshotAttribute modifySnapshotAttribute(array $options = [])
 * @method RenameDbfs renameDbfs(array $options = [])
 * @method ResizeDbfs resizeDbfs(array $options = [])
 * @method TagDbfs tagDbfs(array $options = [])
 * @method UpdateDbfs updateDbfs(array $options = [])
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

    /** @var string */
    public $serviceCode = 'dbfs';
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
 * @method string getDbfsIds()
 * @method $this withDbfsIds($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class ApplyAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getECSInstanceId()
 * @method $this withECSInstanceId($value)
 * @method string getAttachPoint()
 * @method $this withAttachPoint($value)
 * @method string getServerUrl()
 * @method $this withServerUrl($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getAttachMode()
 * @method $this withAttachMode($value)
 */
class AttachDbfs extends Rpc
{
}

/**
 * @method string getDbfsIds()
 * @method $this withDbfsIds($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class CancelAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getTimePoints()
 * @method $this withTimePoints($value)
 * @method string getRepeatWeekdays()
 * @method $this withRepeatWeekdays($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class CreateAutoSnapshotPolicy extends Rpc
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
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAdvancedFeatures()
 * @method $this withAdvancedFeatures($value)
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
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DeleteAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getForce()
 * @method $this withForce($value)
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

class DescribeInstanceTypes extends Rpc
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
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetAutoSnapshotPolicy extends Rpc
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
 * @method string getLinkId()
 * @method $this withLinkId($value)
 */
class GetSnapshotLink extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAutoSnapshotPolicies extends Rpc
{
}

/**
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAutoSnapshotPolicyAppliedDbfs extends Rpc
{
}

/**
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAutoSnapshotPolicyUnappliedDbfs extends Rpc
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
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDbfsAttachableEcsInstances extends Rpc
{
}

/**
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class ListDbfsAttachedEcsInstances extends Rpc
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

/**
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterKey()
 * @method $this withFilterKey($value)
 * @method string getLinkIds()
 * @method $this withLinkIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFsIds()
 * @method $this withFsIds($value)
 */
class ListSnapshotLinks extends Rpc
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
 * @method string getTimePoints()
 * @method $this withTimePoints($value)
 * @method string getRepeatWeekdays()
 * @method $this withRepeatWeekdays($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getRetentionDays()
 * @method $this withRetentionDays($value)
 */
class ModifyAutoSnapshotPolicy extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 */
class ModifySnapshotAttribute extends Rpc
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
 * @method string getNewSizeG()
 * @method $this withNewSizeG($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 */
class ResizeDbfs extends Rpc
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
 * @method string getUsedScene()
 * @method $this withUsedScene($value)
 * @method string getFsId()
 * @method $this withFsId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAdvancedFeatures()
 * @method $this withAdvancedFeatures($value)
 */
class UpdateDbfs extends Rpc
{
}
