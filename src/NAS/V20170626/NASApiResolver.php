<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateTieringPolicy createTieringPolicy(array $options = [])
 * @method ModifyTieringPolicy modifyTieringPolicy(array $options = [])
 * @method DeleteTieringPolicy deleteTieringPolicy(array $options = [])
 * @method DescribeTieringPolicies describeTieringPolicies(array $options = [])
 * @method CreateTieringJob createTieringJob(array $options = [])
 * @method DeleteTieringJob deleteTieringJob(array $options = [])
 * @method ModifyTieringJob modifyTieringJob(array $options = [])
 * @method DescribeTieringJobs describeTieringJobs(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ModifyFileSystem modifyFileSystem(array $options = [])
 * @method ModifyMountTarget modifyMountTarget(array $options = [])
 * @method DescribeFileSystems describeFileSystems(array $options = [])
 * @method DescribeMountTargets describeMountTargets(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ModifyAccessGroup modifyAccessGroup(array $options = [])
 * @method ModifyAccessRule modifyAccessRule(array $options = [])
 * @method DeleteAccessGroup deleteAccessGroup(array $options = [])
 * @method DeleteAccessRule deleteAccessRule(array $options = [])
 * @method DeleteFileSystem deleteFileSystem(array $options = [])
 * @method DeleteMountTarget deleteMountTarget(array $options = [])
 * @method DescribeAccessGroups describeAccessGroups(array $options = [])
 * @method DescribeAccessRules describeAccessRules(array $options = [])
 * @method CreateAccessRule createAccessRule(array $options = [])
 * @method CreateFileSystem createFileSystem(array $options = [])
 * @method CreateMountTarget createMountTarget(array $options = [])
 * @method CreateAccessGroup createAccessGroup(array $options = [])
 */
class NASApiResolver
{
    use ApiResolverTrait;
}

class V20170626Rpc extends Rpc
{
    /** @var string */
    public $product = 'NAS';

    /** @var string */
    public $version = '2017-06-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nas';
}

/**
 * @method string getAtime()
 * @method $this withAtime($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getRecallTime()
 * @method $this withRecallTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCtime()
 * @method $this withCtime($value)
 * @method string getMtime()
 * @method $this withMtime($value)
 * @method string getCheckLimit()
 * @method $this withCheckLimit($value)
 */
class CreateTieringPolicy extends V20170626Rpc
{
}

/**
 * @method string getAtime()
 * @method $this withAtime($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getRecallTime()
 * @method $this withRecallTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCtime()
 * @method $this withCtime($value)
 * @method string getMtime()
 * @method $this withMtime($value)
 */
class ModifyTieringPolicy extends V20170626Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTieringPolicy extends V20170626Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DescribeTieringPolicies extends V20170626Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getHour()
 * @method $this withHour($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWeekday()
 * @method $this withWeekday($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class CreateTieringJob extends V20170626Rpc
{
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTieringJob extends V20170626Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getHour()
 * @method $this withHour($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWeekday()
 * @method $this withWeekday($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class ModifyTieringJob extends V20170626Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 */
class DescribeTieringJobs extends V20170626Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DescribeZones extends V20170626Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ModifyFileSystem extends V20170626Rpc
{
}

/**
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyMountTarget extends V20170626Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeFileSystems extends V20170626Rpc
{
}

/**
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeMountTargets extends V20170626Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRegions extends V20170626Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class ModifyAccessGroup extends V20170626Rpc
{
}

/**
 * @method string getRWAccessType()
 * @method $this withRWAccessType($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getUserAccessType()
 * @method $this withUserAccessType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 */
class ModifyAccessRule extends V20170626Rpc
{
}

/**
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DeleteAccessGroup extends V20170626Rpc
{
}

/**
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 */
class DeleteAccessRule extends V20170626Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteFileSystem extends V20170626Rpc
{
}

/**
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteMountTarget extends V20170626Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessGroups extends V20170626Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessRules extends V20170626Rpc
{
}

/**
 * @method string getRWAccessType()
 * @method $this withRWAccessType($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getUserAccessType()
 * @method $this withUserAccessType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class CreateAccessRule extends V20170626Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 */
class CreateFileSystem extends V20170626Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class CreateMountTarget extends V20170626Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAccessGroupType()
 * @method $this withAccessGroupType($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class CreateAccessGroup extends V20170626Rpc
{
}
