<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeTieringJobs describeTieringJobs(array $options = [])
 * @method ModifyTieringJob modifyTieringJob(array $options = [])
 * @method DeleteTieringJob deleteTieringJob(array $options = [])
 * @method CreateTieringJob createTieringJob(array $options = [])
 * @method DescribeTieringPolicies describeTieringPolicies(array $options = [])
 * @method DeleteTieringPolicy deleteTieringPolicy(array $options = [])
 * @method ModifyTieringPolicy modifyTieringPolicy(array $options = [])
 * @method CreateTieringPolicy createTieringPolicy(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method CreateAccessGroup createAccessGroup(array $options = [])
 * @method CreateMountTarget createMountTarget(array $options = [])
 * @method CreateFileSystem createFileSystem(array $options = [])
 * @method CreateAccessRule createAccessRule(array $options = [])
 * @method DescribeAccessRules describeAccessRules(array $options = [])
 * @method DescribeAccessGroups describeAccessGroups(array $options = [])
 * @method DeleteMountTarget deleteMountTarget(array $options = [])
 * @method DeleteFileSystem deleteFileSystem(array $options = [])
 * @method DeleteAccessRule deleteAccessRule(array $options = [])
 * @method DeleteAccessGroup deleteAccessGroup(array $options = [])
 * @method ModifyAccessRule modifyAccessRule(array $options = [])
 * @method ModifyAccessGroup modifyAccessGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeMountTargets describeMountTargets(array $options = [])
 * @method DescribeFileSystems describeFileSystems(array $options = [])
 * @method ModifyMountTarget modifyMountTarget(array $options = [])
 * @method ModifyFileSystem modifyFileSystem(array $options = [])
 */
class NASApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getVolume()
 * @method $this withVolume($value)
 */
class DescribeTieringJobs extends Rpc
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
class ModifyTieringJob extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTieringJob extends Rpc
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
class CreateTieringJob extends Rpc
{
}

class DescribeTieringPolicies extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTieringPolicy extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class ModifyTieringPolicy extends Rpc
{

    /** @var string */
    public $method = 'PUT';
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
class CreateTieringPolicy extends Rpc
{
}

class DescribeZones extends Rpc
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
class CreateAccessGroup extends Rpc
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
class CreateMountTarget extends Rpc
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
class CreateFileSystem extends Rpc
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
class CreateAccessRule extends Rpc
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
class DescribeAccessRules extends Rpc
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
class DescribeAccessGroups extends Rpc
{
}

/**
 * @method string getMountTargetDomain()
 * @method $this withMountTargetDomain($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteMountTarget extends Rpc
{
}

/**
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteFileSystem extends Rpc
{
}

/**
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 */
class DeleteAccessRule extends Rpc
{
}

/**
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class DeleteAccessGroup extends Rpc
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
class ModifyAccessRule extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class ModifyAccessGroup extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRegions extends Rpc
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
class DescribeMountTargets extends Rpc
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
class DescribeFileSystems extends Rpc
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
class ModifyMountTarget extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ModifyFileSystem extends Rpc
{
}
