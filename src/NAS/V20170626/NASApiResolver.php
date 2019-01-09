<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the NAS based on the method name as the Api name.
 *
 * @package   AlibabaCloud\NAS\V20170626
 *
 * @method CPFSCreateFileSystem cPFSCreateFileSystem(array $options = [])
 * @method CPFSDeleteFileSystem cPFSDeleteFileSystem(array $options = [])
 * @method CPFSDescribeFileSystems cPFSDescribeFileSystems(array $options = [])
 * @method CPFSModifyFileSystem cPFSModifyFileSystem(array $options = [])
 * @method CreateAccessGroup createAccessGroup(array $options = [])
 * @method CreateAccessRule createAccessRule(array $options = [])
 * @method CreateFileSystem createFileSystem(array $options = [])
 * @method CreateMountTarget createMountTarget(array $options = [])
 * @method CreateTieringJob createTieringJob(array $options = [])
 * @method CreateTieringPolicy createTieringPolicy(array $options = [])
 * @method DeleteAccessGroup deleteAccessGroup(array $options = [])
 * @method DeleteAccessRule deleteAccessRule(array $options = [])
 * @method DeleteFileSystem deleteFileSystem(array $options = [])
 * @method DeleteMountTarget deleteMountTarget(array $options = [])
 * @method DeleteTieringJob deleteTieringJob(array $options = [])
 * @method DeleteTieringPolicy deleteTieringPolicy(array $options = [])
 * @method DescribeAccessGroups describeAccessGroups(array $options = [])
 * @method DescribeAccessRules describeAccessRules(array $options = [])
 * @method DescribeFileSystems describeFileSystems(array $options = [])
 * @method DescribeMountTargets describeMountTargets(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeTieringJobs describeTieringJobs(array $options = [])
 * @method DescribeTieringPolicies describeTieringPolicies(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ModifyAccessGroup modifyAccessGroup(array $options = [])
 * @method ModifyAccessRule modifyAccessRule(array $options = [])
 * @method ModifyFileSystem modifyFileSystem(array $options = [])
 * @method ModifyMountTarget modifyMountTarget(array $options = [])
 * @method ModifyTieringJob modifyTieringJob(array $options = [])
 * @method ModifyTieringPolicy modifyTieringPolicy(array $options = [])
 */
class NASApiResolver
{
    use ApiResolverTrait;
}
