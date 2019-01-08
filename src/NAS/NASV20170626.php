<?php

namespace AlibabaCloud\NAS;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the NAS based on the method name as the Api name.
 *
 * @package   AlibabaCloud\NAS
 *
 * @method static V20170626\CPFSCreateFileSystem cPFSCreateFileSystem(array $options = [])
 * @method static V20170626\CPFSDeleteFileSystem cPFSDeleteFileSystem(array $options = [])
 * @method static V20170626\CPFSDescribeFileSystems cPFSDescribeFileSystems(array $options = [])
 * @method static V20170626\CPFSModifyFileSystem cPFSModifyFileSystem(array $options = [])
 * @method static V20170626\CreateAccessGroup createAccessGroup(array $options = [])
 * @method static V20170626\CreateAccessRule createAccessRule(array $options = [])
 * @method static V20170626\CreateFileSystem createFileSystem(array $options = [])
 * @method static V20170626\CreateMountTarget createMountTarget(array $options = [])
 * @method static V20170626\CreateTieringJob createTieringJob(array $options = [])
 * @method static V20170626\CreateTieringPolicy createTieringPolicy(array $options = [])
 * @method static V20170626\DeleteAccessGroup deleteAccessGroup(array $options = [])
 * @method static V20170626\DeleteAccessRule deleteAccessRule(array $options = [])
 * @method static V20170626\DeleteFileSystem deleteFileSystem(array $options = [])
 * @method static V20170626\DeleteMountTarget deleteMountTarget(array $options = [])
 * @method static V20170626\DeleteTieringJob deleteTieringJob(array $options = [])
 * @method static V20170626\DeleteTieringPolicy deleteTieringPolicy(array $options = [])
 * @method static V20170626\DescribeAccessGroups describeAccessGroups(array $options = [])
 * @method static V20170626\DescribeAccessRules describeAccessRules(array $options = [])
 * @method static V20170626\DescribeFileSystems describeFileSystems(array $options = [])
 * @method static V20170626\DescribeMountTargets describeMountTargets(array $options = [])
 * @method static V20170626\DescribeRegions describeRegions(array $options = [])
 * @method static V20170626\DescribeTieringJobs describeTieringJobs(array $options = [])
 * @method static V20170626\DescribeTieringPolicies describeTieringPolicies(array $options = [])
 * @method static V20170626\DescribeZones describeZones(array $options = [])
 * @method static V20170626\ModifyAccessGroup modifyAccessGroup(array $options = [])
 * @method static V20170626\ModifyAccessRule modifyAccessRule(array $options = [])
 * @method static V20170626\ModifyFileSystem modifyFileSystem(array $options = [])
 * @method static V20170626\ModifyMountTarget modifyMountTarget(array $options = [])
 * @method static V20170626\ModifyTieringJob modifyTieringJob(array $options = [])
 * @method static V20170626\ModifyTieringPolicy modifyTieringPolicy(array $options = [])
 */
class NASV20170626
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\NAS\\V20170626';
}
