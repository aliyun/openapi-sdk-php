<?php

namespace AlibabaCloud\OceanBasePro\V20190901;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateOmsMysqlDataSource createOmsMysqlDataSource(array $options = [])
 * @method CreateOmsOpenAPIProject createOmsOpenAPIProject(array $options = [])
 * @method CreateSecurityIpGroup createSecurityIpGroup(array $options = [])
 * @method CreateTenant createTenant(array $options = [])
 * @method CreateTenantReadOnlyConnection createTenantReadOnlyConnection(array $options = [])
 * @method CreateTenantUser createTenantUser(array $options = [])
 * @method DeleteDatabases deleteDatabases(array $options = [])
 * @method DeleteInstances deleteInstances(array $options = [])
 * @method DeleteOmsOpenAPIProject deleteOmsOpenAPIProject(array $options = [])
 * @method DeleteSecurityIpGroup deleteSecurityIpGroup(array $options = [])
 * @method DeleteTenants deleteTenants(array $options = [])
 * @method DeleteTenantUsers deleteTenantUsers(array $options = [])
 * @method DescribeAnomalySQLList describeAnomalySQLList(array $options = [])
 * @method DescribeAvailableCpuResource describeAvailableCpuResource(array $options = [])
 * @method DescribeAvailableMemResource describeAvailableMemResource(array $options = [])
 * @method DescribeCharset describeCharset(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstanceCreatableZone describeInstanceCreatableZone(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceTags describeInstanceTags(array $options = [])
 * @method DescribeInstanceTenantModes describeInstanceTenantModes(array $options = [])
 * @method DescribeInstanceTopology describeInstanceTopology(array $options = [])
 * @method DescribeNodeMetrics describeNodeMetrics(array $options = [])
 * @method DescribeOmsOpenAPIProject describeOmsOpenAPIProject(array $options = [])
 * @method DescribeOmsOpenAPIProjectSteps describeOmsOpenAPIProjectSteps(array $options = [])
 * @method DescribeOutlineBinding describeOutlineBinding(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeParametersHistory describeParametersHistory(array $options = [])
 * @method DescribeRecommendIndex describeRecommendIndex(array $options = [])
 * @method DescribeSecurityIpGroups describeSecurityIpGroups(array $options = [])
 * @method DescribeSlowSQLHistoryList describeSlowSQLHistoryList(array $options = [])
 * @method DescribeSlowSQLList describeSlowSQLList(array $options = [])
 * @method DescribeSQLDetails describeSQLDetails(array $options = [])
 * @method DescribeSQLHistoryList describeSQLHistoryList(array $options = [])
 * @method DescribeSQLPlans describeSQLPlans(array $options = [])
 * @method DescribeTenant describeTenant(array $options = [])
 * @method DescribeTenantMetrics describeTenantMetrics(array $options = [])
 * @method DescribeTenants describeTenants(array $options = [])
 * @method DescribeTenantTags describeTenantTags(array $options = [])
 * @method DescribeTenantUserRoles describeTenantUserRoles(array $options = [])
 * @method DescribeTenantUsers describeTenantUsers(array $options = [])
 * @method DescribeTenantZonesRead describeTenantZonesRead(array $options = [])
 * @method DescribeTimeZones describeTimeZones(array $options = [])
 * @method DescribeTopSQLList describeTopSQLList(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ModifyDatabaseDescription modifyDatabaseDescription(array $options = [])
 * @method ModifyDatabaseUserRoles modifyDatabaseUserRoles(array $options = [])
 * @method ModifyInstanceName modifyInstanceName(array $options = [])
 * @method ModifyInstanceTags modifyInstanceTags(array $options = [])
 * @method ModifyParameters modifyParameters(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifyTenantPrimaryZone modifyTenantPrimaryZone(array $options = [])
 * @method ModifyTenantResource modifyTenantResource(array $options = [])
 * @method ModifyTenantTags modifyTenantTags(array $options = [])
 * @method ModifyTenantUserDescription modifyTenantUserDescription(array $options = [])
 * @method ModifyTenantUserPassword modifyTenantUserPassword(array $options = [])
 * @method ModifyTenantUserRoles modifyTenantUserRoles(array $options = [])
 * @method ModifyTenantUserStatus modifyTenantUserStatus(array $options = [])
 * @method ReleaseOmsOpenAPIProject releaseOmsOpenAPIProject(array $options = [])
 * @method ResetOmsOpenAPIProject resetOmsOpenAPIProject(array $options = [])
 * @method ResumeOmsOpenAPIProject resumeOmsOpenAPIProject(array $options = [])
 * @method SearchOmsOpenAPIMonitorMetric searchOmsOpenAPIMonitorMetric(array $options = [])
 * @method SearchOmsOpenAPIProjects searchOmsOpenAPIProjects(array $options = [])
 * @method StartOmsOpenAPIProject startOmsOpenAPIProject(array $options = [])
 * @method StopOmsOpenAPIProject stopOmsOpenAPIProject(array $options = [])
 */
class OceanBaseProApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OceanBasePro';

    /** @var string */
    public $version = '2019-09-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'oceanbase';
}

/**
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getEncoding()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 * @method string getCollation()
 */
class CreateDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncoding($value)
    {
        $this->data['Encoding'] = $value;
        $this->options['form_params']['Encoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCollation($value)
    {
        $this->data['Collation'] = $value;
        $this->options['form_params']['Collation'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceClass()
 * @method string getResourceGroupId()
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getDiskSize()
 * @method string getZones()
 * @method string getDiskType()
 * @method string getObVersion()
 * @method string getPeriodUnit()
 * @method string getInstanceName()
 * @method string getAutoRenew()
 * @method string getSeries()
 * @method string getChargeType()
 * @method string getBid()
 * @method $this withBid($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceClass($value)
    {
        $this->data['InstanceClass'] = $value;
        $this->options['form_params']['InstanceClass'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenewPeriod($value)
    {
        $this->data['AutoRenewPeriod'] = $value;
        $this->options['form_params']['AutoRenewPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskSize($value)
    {
        $this->data['DiskSize'] = $value;
        $this->options['form_params']['DiskSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZones($value)
    {
        $this->data['Zones'] = $value;
        $this->options['form_params']['Zones'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskType($value)
    {
        $this->data['DiskType'] = $value;
        $this->options['form_params']['DiskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObVersion($value)
    {
        $this->data['ObVersion'] = $value;
        $this->options['form_params']['ObVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriodUnit($value)
    {
        $this->data['PeriodUnit'] = $value;
        $this->options['form_params']['PeriodUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenew($value)
    {
        $this->data['AutoRenew'] = $value;
        $this->options['form_params']['AutoRenew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeType($value)
    {
        $this->data['ChargeType'] = $value;
        $this->options['form_params']['ChargeType'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getDescription()
 * @method string getDgDatabaseId()
 * @method string getType()
 * @method string getPassword()
 * @method string getIp()
 * @method string getInstanceId()
 * @method string getPort()
 * @method string getVpcId()
 * @method string getName()
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUsername()
 */
class CreateOmsMysqlDataSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDgDatabaseId($value)
    {
        $this->data['DgDatabaseId'] = $value;
        $this->options['form_params']['DgDatabaseId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['form_params']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsername($value)
    {
        $this->data['Username'] = $value;
        $this->options['form_params']['Username'] = $value;

        return $this;
    }
}

/**
 * @method string getDestConfig()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTransferMapping()
 * @method string getTransferStepConfig()
 * @method string getWorkerGradeId()
 * @method string getProjectName()
 * @method string getSourceConfig()
 * @method string getBusinessName()
 * @method string getLabelIds()
 */
class CreateOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestConfig($value)
    {
        $this->data['DestConfig'] = $value;
        $this->options['form_params']['DestConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransferMapping($value)
    {
        $this->data['TransferMapping'] = $value;
        $this->options['form_params']['TransferMapping'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransferStepConfig($value)
    {
        $this->data['TransferStepConfig'] = $value;
        $this->options['form_params']['TransferStepConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceConfig($value)
    {
        $this->data['SourceConfig'] = $value;
        $this->options['form_params']['SourceConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessName($value)
    {
        $this->data['BusinessName'] = $value;
        $this->options['form_params']['BusinessName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class CreateSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getCharset()
 * @method string getTenantMode()
 * @method string getMemory()
 * @method string getTimeZone()
 * @method string getDescription()
 * @method string getUserVSwitchId()
 * @method string getUserVpcId()
 * @method string getCpu()
 * @method string getUnitNum()
 * @method string getInstanceId()
 * @method string getPrimaryZone()
 * @method string getTenantName()
 */
class CreateTenant extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCharset($value)
    {
        $this->data['Charset'] = $value;
        $this->options['form_params']['Charset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantMode($value)
    {
        $this->data['TenantMode'] = $value;
        $this->options['form_params']['TenantMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeZone($value)
    {
        $this->data['TimeZone'] = $value;
        $this->options['form_params']['TimeZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVSwitchId($value)
    {
        $this->data['UserVSwitchId'] = $value;
        $this->options['form_params']['UserVSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVpcId($value)
    {
        $this->data['UserVpcId'] = $value;
        $this->options['form_params']['UserVpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['form_params']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnitNum($value)
    {
        $this->data['UnitNum'] = $value;
        $this->options['form_params']['UnitNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrimaryZone($value)
    {
        $this->data['PrimaryZone'] = $value;
        $this->options['form_params']['PrimaryZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getZoneId()
 */
class CreateTenantReadOnlyConnection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoles()
 * @method string getUserType()
 * @method string getDescription()
 * @method string getUserPassword()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class CreateTenantUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoles($value)
    {
        $this->data['Roles'] = $value;
        $this->options['form_params']['Roles'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserType($value)
    {
        $this->data['UserType'] = $value;
        $this->options['form_params']['UserType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPassword($value)
    {
        $this->data['UserPassword'] = $value;
        $this->options['form_params']['UserPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getDatabaseNames()
 * @method string getTenantId()
 */
class DeleteDatabases extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseNames($value)
    {
        $this->data['DatabaseNames'] = $value;
        $this->options['form_params']['DatabaseNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getBackupRetainMode()
 * @method string getInstanceIds()
 */
class DeleteInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupRetainMode($value)
    {
        $this->data['BackupRetainMode'] = $value;
        $this->options['form_params']['BackupRetainMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['form_params']['InstanceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class DeleteOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class DeleteSecurityIpGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantIds()
 */
class DeleteTenants extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantIds($value)
    {
        $this->data['TenantIds'] = $value;
        $this->options['form_params']['TenantIds'] = $value;

        return $this;
    }
}

/**
 * @method string getUsers()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DeleteTenantUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['form_params']['Users'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 * @method string getAcceptLanguage()
 */
class DescribeAnomalySQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getModifyType()
 * @method string getTenantId()
 */
class DescribeAvailableCpuResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUnitNum()
 * @method string getCpuNum()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeAvailableMemResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnitNum($value)
    {
        $this->data['UnitNum'] = $value;
        $this->options['form_params']['UnitNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuNum($value)
    {
        $this->data['CpuNum'] = $value;
        $this->options['form_params']['CpuNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantMode()
 */
class DescribeCharset extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantMode($value)
    {
        $this->data['TenantMode'] = $value;
        $this->options['form_params']['TenantMode'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getDatabaseName()
 * @method string getWithTables()
 * @method string getTenantId()
 * @method string getPageSize()
 */
class DescribeDatabases extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithTables($value)
    {
        $this->data['WithTables'] = $value;
        $this->options['form_params']['WithTables'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 */
class DescribeInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstanceCreatableZone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getInstanceName()
 * @method string getPageSize()
 */
class DescribeInstances extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceIds()
 */
class DescribeInstanceTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['form_params']['InstanceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstanceTenantModes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getReplicaTypes()
 */
class DescribeInstanceTopology extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicaTypes($value)
    {
        $this->data['ReplicaTypes'] = $value;
        $this->options['form_params']['ReplicaTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getNodeIdList()
 * @method string getEndTime()
 * @method string getNodeName()
 * @method string getInstanceId()
 * @method string getMetrics()
 */
class DescribeNodeMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIdList($value)
    {
        $this->data['NodeIdList'] = $value;
        $this->options['form_params']['NodeIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeName($value)
    {
        $this->data['NodeName'] = $value;
        $this->options['form_params']['NodeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['form_params']['Metrics'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class DescribeOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class DescribeOmsOpenAPIProjectSteps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 * @method string getTableName()
 * @method string getIsConcurrentLimit()
 */
class DescribeOutlineBinding extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTableName($value)
    {
        $this->data['TableName'] = $value;
        $this->options['form_params']['TableName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsConcurrentLimit($value)
    {
        $this->data['IsConcurrentLimit'] = $value;
        $this->options['form_params']['IsConcurrentLimit'] = $value;

        return $this;
    }
}

/**
 * @method string getDimensionValue()
 * @method string getInstanceId()
 * @method string getDimension()
 */
class DescribeParameters extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDimensionValue()
 * @method string getPageSize()
 * @method string getDimension()
 * @method string getEndTime()
 * @method string getInstanceId()
 */
class DescribeParametersHistory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeRecommendIndex extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeSecurityIpGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 */
class DescribeSlowSQLHistoryList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 */
class DescribeSlowSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getTenantId()
 */
class DescribeSQLDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 */
class DescribeSQLHistoryList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getSQLId()
 * @method string getTenantId()
 */
class DescribeSQLPlans extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenant extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenantIdList()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getEndTime()
 * @method string getInstanceId()
 * @method string getTenantName()
 * @method string getMetrics()
 */
class DescribeTenantMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantIdList($value)
    {
        $this->data['TenantIdList'] = $value;
        $this->options['form_params']['TenantIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetrics($value)
    {
        $this->data['Metrics'] = $value;
        $this->options['form_params']['Metrics'] = $value;

        return $this;
    }
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getTenantId()
 * @method string getTenantName()
 */
class DescribeTenants extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 * @method string getTenantIds()
 */
class DescribeTenantTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantIds($value)
    {
        $this->data['TenantIds'] = $value;
        $this->options['form_params']['TenantIds'] = $value;

        return $this;
    }
}

class DescribeTenantUserRoles extends Rpc
{
}

/**
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getUserName()
 */
class DescribeTenantUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class DescribeTenantZonesRead extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

class DescribeTimeZones extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getSearchRule()
 * @method string getTenantId()
 * @method string getPageSize()
 * @method string getSearchParameter()
 * @method string getSortOrder()
 * @method string getSearchValue()
 * @method string getSQLId()
 * @method string getFilterCondition()
 * @method string getEndTime()
 * @method string getNodeIp()
 * @method string getDbName()
 * @method string getSearchKeyWord()
 * @method string getSortColumn()
 */
class DescribeTopSQLList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchRule($value)
    {
        $this->data['SearchRule'] = $value;
        $this->options['form_params']['SearchRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchParameter($value)
    {
        $this->data['SearchParameter'] = $value;
        $this->options['form_params']['SearchParameter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['form_params']['SearchValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSQLId($value)
    {
        $this->data['SQLId'] = $value;
        $this->options['form_params']['SQLId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterCondition($value)
    {
        $this->data['FilterCondition'] = $value;
        $this->options['form_params']['FilterCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeIp($value)
    {
        $this->data['NodeIp'] = $value;
        $this->options['form_params']['NodeIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKeyWord($value)
    {
        $this->data['SearchKeyWord'] = $value;
        $this->options['form_params']['SearchKeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortColumn($value)
    {
        $this->data['SortColumn'] = $value;
        $this->options['form_params']['SortColumn'] = $value;

        return $this;
    }
}

/**
 * @method string getSeries()
 * @method string getDeployType()
 */
class DescribeZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeries($value)
    {
        $this->data['Series'] = $value;
        $this->options['form_params']['Series'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['form_params']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 */
class ModifyDatabaseDescription extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getUsers()
 * @method string getInstanceId()
 * @method string getDatabaseName()
 * @method string getTenantId()
 */
class ModifyDatabaseUserRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsers($value)
    {
        $this->data['Users'] = $value;
        $this->options['form_params']['Users'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatabaseName($value)
    {
        $this->data['DatabaseName'] = $value;
        $this->options['form_params']['DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getInstanceName()
 */
class ModifyInstanceName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 */
class ModifyInstanceTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDimensionValue()
 * @method string getInstanceId()
 * @method string getDimension()
 * @method string getParameters()
 */
class ModifyParameters extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionValue($value)
    {
        $this->data['DimensionValue'] = $value;
        $this->options['form_params']['DimensionValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimension($value)
    {
        $this->data['Dimension'] = $value;
        $this->options['form_params']['Dimension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }
}

/**
 * @method string getSecurityIps()
 * @method string getSecurityIpGroupName()
 * @method string getInstanceId()
 */
class ModifySecurityIps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIps($value)
    {
        $this->data['SecurityIps'] = $value;
        $this->options['form_params']['SecurityIps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityIpGroupName($value)
    {
        $this->data['SecurityIpGroupName'] = $value;
        $this->options['form_params']['SecurityIpGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserVSwitchId()
 * @method string getMasterIntranetAddressZone()
 * @method string getTenantId()
 * @method string getInstanceId()
 * @method string getPrimaryZone()
 * @method string getModifyType()
 * @method string getPrimaryZoneDeployType()
 */
class ModifyTenantPrimaryZone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVSwitchId($value)
    {
        $this->data['UserVSwitchId'] = $value;
        $this->options['form_params']['UserVSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterIntranetAddressZone($value)
    {
        $this->data['MasterIntranetAddressZone'] = $value;
        $this->options['form_params']['MasterIntranetAddressZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrimaryZone($value)
    {
        $this->data['PrimaryZone'] = $value;
        $this->options['form_params']['PrimaryZone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrimaryZoneDeployType($value)
    {
        $this->data['PrimaryZoneDeployType'] = $value;
        $this->options['form_params']['PrimaryZoneDeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getMemory()
 * @method string getCpu()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class ModifyTenantResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['form_params']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['form_params']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getTags()
 * @method string getInstanceId()
 * @method string getTenantId()
 */
class ModifyTenantTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserDescription extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserPassword()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserPassword($value)
    {
        $this->data['UserPassword'] = $value;
        $this->options['form_params']['UserPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserRole()
 * @method string getInstanceId()
 * @method string getModifyType()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserRole($value)
    {
        $this->data['UserRole'] = $value;
        $this->options['form_params']['UserRole'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getUserStatus()
 * @method string getInstanceId()
 * @method string getTenantId()
 * @method string getUserName()
 */
class ModifyTenantUserStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserStatus($value)
    {
        $this->data['UserStatus'] = $value;
        $this->options['form_params']['UserStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class ReleaseOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class ResetOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class ResumeOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getMaxPointNum()
 * @method string getPageNumber()
 * @method string getMetric()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class SearchOmsOpenAPIMonitorMetric extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['form_params']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxPointNum($value)
    {
        $this->data['MaxPointNum'] = $value;
        $this->options['form_params']['MaxPointNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetric($value)
    {
        $this->data['Metric'] = $value;
        $this->options['form_params']['Metric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getDestDbTypes()
 * @method string getStatusList()
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getSourceDbTypes()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getLabelIds()
 */
class SearchOmsOpenAPIProjects extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestDbTypes($value)
    {
        $this->data['DestDbTypes'] = $value;
        $this->options['form_params']['DestDbTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusList($value)
    {
        $this->data['StatusList'] = $value;
        $this->options['form_params']['StatusList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchKey($value)
    {
        $this->data['SearchKey'] = $value;
        $this->options['form_params']['SearchKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceDbTypes($value)
    {
        $this->data['SourceDbTypes'] = $value;
        $this->options['form_params']['SourceDbTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelIds($value)
    {
        $this->data['LabelIds'] = $value;
        $this->options['form_params']['LabelIds'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class StartOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getWorkerGradeId()
 * @method string getProjectId()
 */
class StopOmsOpenAPIProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerGradeId($value)
    {
        $this->data['WorkerGradeId'] = $value;
        $this->options['form_params']['WorkerGradeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
}
