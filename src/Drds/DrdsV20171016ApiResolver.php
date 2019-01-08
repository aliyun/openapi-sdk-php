<?php

namespace AlibabaCloud\Drds;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Drds based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Drds
 *
 * @method V20171016\AddTagsToInstance addTagsToInstance(array $options = [])
 * @method V20171016\CreateDrdsAccount createDrdsAccount(array $options = [])
 * @method V20171016\CreateDrdsDB createDrdsDB(array $options = [])
 * @method V20171016\CreateDrdsInstance createDrdsInstance(array $options = [])
 * @method V20171016\CreateReadOnlyAccount createReadOnlyAccount(array $options = [])
 * @method V20171016\DeleteDrdsDB deleteDrdsDB(array $options = [])
 * @method V20171016\DeleteFailedDrdsDB deleteFailedDrdsDB(array $options = [])
 * @method V20171016\DescribeCreateDrdsInstanceStatus describeCreateDrdsInstanceStatus(array $options = [])
 * @method V20171016\DescribeDrdsDB describeDrdsDB(array $options = [])
 * @method V20171016\DescribeDrdsDBIpWhiteList describeDrdsDBIpWhiteList(array $options = [])
 * @method V20171016\DescribeDrdsDBs describeDrdsDBs(array $options = [])
 * @method V20171016\DescribeDrdsInstance describeDrdsInstance(array $options = [])
 * @method V20171016\DescribeDrdsInstanceDbMonitor describeDrdsInstanceDbMonitor(array $options = [])
 * @method V20171016\DescribeDrdsInstanceMonitor describeDrdsInstanceMonitor(array $options = [])
 * @method V20171016\DescribeDrdsInstanceNetInfoForInner describeDrdsInstanceNetInfoForInner(array $options = [])
 * @method V20171016\DescribeDrdsInstances describeDrdsInstances(array $options = [])
 * @method V20171016\DescribeInstanceTags describeInstanceTags(array $options = [])
 * @method V20171016\DescribeRdsList describeRdsList(array $options = [])
 * @method V20171016\DescribeReadOnlyAccount describeReadOnlyAccount(array $options = [])
 * @method V20171016\DescribeRegions describeRegions(array $options = [])
 * @method V20171016\DescribeShardDBs describeShardDBs(array $options = [])
 * @method V20171016\DescribeShardDbConnectionInfo describeShardDbConnectionInfo(array $options = [])
 * @method V20171016\DrdsInstanceDbMonitor drdsInstanceDbMonitor(array $options = [])
 * @method V20171016\DrdsInstanceMonitor drdsInstanceMonitor(array $options = [])
 * @method V20171016\ModifyDrdsDBPasswd modifyDrdsDBPasswd(array $options = [])
 * @method V20171016\ModifyDrdsInstanceDescription modifyDrdsInstanceDescription(array $options = [])
 * @method V20171016\ModifyDrdsIpWhiteList modifyDrdsIpWhiteList(array $options = [])
 * @method V20171016\ModifyFullTableScan modifyFullTableScan(array $options = [])
 * @method V20171016\ModifyRdsReadWeight modifyRdsReadWeight(array $options = [])
 * @method V20171016\ModifyReadOnlyAccountPassword modifyReadOnlyAccountPassword(array $options = [])
 * @method V20171016\QueryInstanceInfoByConn queryInstanceInfoByConn(array $options = [])
 * @method V20171016\RemoveDrdsInstance removeDrdsInstance(array $options = [])
 * @method V20171016\RemoveReadOnlyAccount removeReadOnlyAccount(array $options = [])
 * @method V20171016\RemoveTagsFromInstance removeTagsFromInstance(array $options = [])
 */
class DrdsV20171016ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Drds\\V20171016';
}
