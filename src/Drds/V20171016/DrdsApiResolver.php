<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeDrdsInstanceMonitor describeDrdsInstanceMonitor(array $options = [])
 * @method DescribeDrdsInstanceDbMonitor describeDrdsInstanceDbMonitor(array $options = [])
 * @method CreateDrdsAccount createDrdsAccount(array $options = [])
 * @method QueryInstanceInfoByConn queryInstanceInfoByConn(array $options = [])
 * @method RemoveReadOnlyAccount removeReadOnlyAccount(array $options = [])
 * @method RemoveDrdsInstance removeDrdsInstance(array $options = [])
 * @method ModifyReadOnlyAccountPassword modifyReadOnlyAccountPassword(array $options = [])
 * @method ModifyRdsReadWeight modifyRdsReadWeight(array $options = [])
 * @method ModifyFullTableScan modifyFullTableScan(array $options = [])
 * @method ModifyDrdsIpWhiteList modifyDrdsIpWhiteList(array $options = [])
 * @method ModifyDrdsInstanceDescription modifyDrdsInstanceDescription(array $options = [])
 * @method ModifyDrdsDBPasswd modifyDrdsDBPasswd(array $options = [])
 * @method DescribeShardDBs describeShardDBs(array $options = [])
 * @method DescribeShardDbConnectionInfo describeShardDbConnectionInfo(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeReadOnlyAccount describeReadOnlyAccount(array $options = [])
 * @method DescribeRdsList describeRdsList(array $options = [])
 * @method DescribeDrdsInstances describeDrdsInstances(array $options = [])
 * @method DescribeDrdsInstanceNetInfoForInner describeDrdsInstanceNetInfoForInner(array $options = [])
 * @method DescribeDrdsInstance describeDrdsInstance(array $options = [])
 * @method DescribeDrdsDBs describeDrdsDBs(array $options = [])
 * @method DescribeDrdsDBIpWhiteList describeDrdsDBIpWhiteList(array $options = [])
 * @method DescribeDrdsDB describeDrdsDB(array $options = [])
 * @method DescribeCreateDrdsInstanceStatus describeCreateDrdsInstanceStatus(array $options = [])
 * @method DeleteFailedDrdsDB deleteFailedDrdsDB(array $options = [])
 * @method DeleteDrdsDB deleteDrdsDB(array $options = [])
 * @method CreateReadOnlyAccount createReadOnlyAccount(array $options = [])
 * @method CreateDrdsInstance createDrdsInstance(array $options = [])
 * @method CreateDrdsDB createDrdsDB(array $options = [])
 */
class DrdsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Drds';

    /** @var string */
    public $version = '2017-10-16';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getPeriodMultiple()
 * @method $this withPeriodMultiple($value)
 */
class DescribeDrdsInstanceMonitor extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDrdsInstanceDbMonitor extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateDrdsAccount extends Rpc
{
}

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class QueryInstanceInfoByConn extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveReadOnlyAccount extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class RemoveDrdsInstance extends Rpc
{
}

/**
 * @method string getNewPasswd()
 * @method $this withNewPasswd($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getOriginPassword()
 * @method $this withOriginPassword($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyReadOnlyAccountPassword extends Rpc
{
}

/**
 * @method string getInstanceNames()
 * @method $this withInstanceNames($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getWeights()
 * @method $this withWeights($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyRdsReadWeight extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableNames()
 * @method $this withTableNames($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getFullTableScan()
 * @method $this withFullTableScan($value)
 */
class ModifyFullTableScan extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getGroupAttribute()
 * @method $this withGroupAttribute($value)
 * @method string getIpWhiteList()
 * @method $this withIpWhiteList($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ModifyDrdsIpWhiteList extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyDrdsInstanceDescription extends Rpc
{
}

/**
 * @method string getNewPasswd()
 * @method $this withNewPasswd($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class ModifyDrdsDBPasswd extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeShardDBs extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getSubDbName()
 * @method $this withSubDbName($value)
 */
class DescribeShardDbConnectionInfo extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeReadOnlyAccount extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeRdsList extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeDrdsInstances extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsInstanceNetInfoForInner extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsInstance extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDBs extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DescribeDrdsDBIpWhiteList extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeDrdsDB extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DescribeCreateDrdsInstanceStatus extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DeleteFailedDrdsDB extends Rpc
{
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class DeleteDrdsDB extends Rpc
{
}

/**
 * @method string getPassword()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CreateReadOnlyAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['password'] = $value;

        return $this;
    }
}

/**
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsHa()
 * @method $this withIsHa($value)
 * @method string getInstanceSeries()
 * @method $this withInstanceSeries($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateDrdsInstance extends Rpc
{
}

/**
 * @method string getEncode()
 * @method $this withEncode($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getRdsInstances()
 * @method $this withRdsInstances($value)
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 */
class CreateDrdsDB extends Rpc
{
}
