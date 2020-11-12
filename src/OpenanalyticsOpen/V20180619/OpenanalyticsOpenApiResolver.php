<?php

namespace AlibabaCloud\OpenanalyticsOpen\V20180619;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAccount addAccount(array $options = [])
 * @method AddEndPoint addEndPoint(array $options = [])
 * @method BindingRamUidToDlaAccount bindingRamUidToDlaAccount(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateUserNetConfig createUserNetConfig(array $options = [])
 * @method CreateVirtualClusterForSpark createVirtualClusterForSpark(array $options = [])
 * @method DecodeStsToken decodeStsToken(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteUserNetConfig deleteUserNetConfig(array $options = [])
 * @method DescribeCapacity describeCapacity(array $options = [])
 * @method DescribeDataLakeAnalyticsService describeDataLakeAnalyticsService(array $options = [])
 * @method DescribeRegionList describeRegionList(array $options = [])
 * @method DescribeVirtualCluster describeVirtualCluster(array $options = [])
 * @method DescribeVirtualClusterV2 describeVirtualClusterV2(array $options = [])
 * @method DestroyVirtualCluster destroyVirtualCluster(array $options = [])
 * @method ForbidAutomaticMetaSyncAsIntegrationAccount forbidAutomaticMetaSyncAsIntegrationAccount(array $options = [])
 * @method GetAllowIP getAllowIP(array $options = [])
 * @method GetConsolePermission getConsolePermission(array $options = [])
 * @method GetDLAServiceStatus getDLAServiceStatus(array $options = [])
 * @method GetEndPoint getEndPoint(array $options = [])
 * @method GetEndPointByDomain getEndPointByDomain(array $options = [])
 * @method GetJobDetail getJobDetail(array $options = [])
 * @method GetJobLog getJobLog(array $options = [])
 * @method GetJobStatus getJobStatus(array $options = [])
 * @method GetRegionStatus getRegionStatus(array $options = [])
 * @method GetServiceLinkedRoleStatus getServiceLinkedRoleStatus(array $options = [])
 * @method InitializeDLAService initializeDLAService(array $options = [])
 * @method InitializeRegion initializeRegion(array $options = [])
 * @method KillSparkJob killSparkJob(array $options = [])
 * @method ListAlreadyBingingRamUid listAlreadyBingingRamUid(array $options = [])
 * @method ListModulesRelease listModulesRelease(array $options = [])
 * @method ListResourcesSpec listResourcesSpec(array $options = [])
 * @method ListSparkJob listSparkJob(array $options = [])
 * @method ListVirtualClusters listVirtualClusters(array $options = [])
 * @method ModifyVirtualCluster modifyVirtualCluster(array $options = [])
 * @method ModifyVirtualClusterForSpark modifyVirtualClusterForSpark(array $options = [])
 * @method OpenDataLakeAnalyticsService openDataLakeAnalyticsService(array $options = [])
 * @method QueryAccountList queryAccountList(array $options = [])
 * @method QueryDataSourceDef queryDataSourceDef(array $options = [])
 * @method QueryDiscountList queryDiscountList(array $options = [])
 * @method QueryEndPointList queryEndPointList(array $options = [])
 * @method QueryServiceAccountList queryServiceAccountList(array $options = [])
 * @method QueryTaskSum queryTaskSum(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method RemoveEndPoint removeEndPoint(array $options = [])
 * @method ResetMainPassword resetMainPassword(array $options = [])
 * @method SetAllowIP setAllowIP(array $options = [])
 * @method SetCapacityLimitPolicy setCapacityLimitPolicy(array $options = [])
 * @method SetRelationWithBiz setRelationWithBiz(array $options = [])
 * @method SetTrafficLimitPolicy setTrafficLimitPolicy(array $options = [])
 * @method StartVirtualCluster startVirtualCluster(array $options = [])
 * @method StopVirtualCluster stopVirtualCluster(array $options = [])
 * @method SubmitSparkJob submitSparkJob(array $options = [])
 * @method UnSubscribeRegion unSubscribeRegion(array $options = [])
 * @method UpdateAccountPassword updateAccountPassword(array $options = [])
 */
class OpenanalyticsOpenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'openanalytics-open';

    /** @var string */
    public $version = '2018-06-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'openanalytics';
}

/**
 * @method string getRamUid()
 * @method string getIsShort()
 * @method string getRemark()
 * @method string getPassword()
 * @method string getAccountName()
 * @method string getEnableKMS()
 * @method string getUseRandomPassword()
 */
class AddAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRamUid($value)
    {
        $this->data['RamUid'] = $value;
        $this->options['form_params']['RamUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

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
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method string getNetworkType()
 * @method string getVswitch()
 * @method string getZone()
 * @method string getVpcID()
 */
class AddEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswitch($value)
    {
        $this->data['Vswitch'] = $value;
        $this->options['form_params']['Vswitch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZone($value)
    {
        $this->data['Zone'] = $value;
        $this->options['form_params']['Zone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcID($value)
    {
        $this->data['VpcID'] = $value;
        $this->options['form_params']['VpcID'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method string getRamUid()
 * @method string getIsShort()
 * @method string getIsServiceUser()
 */
class BindingRamUidToDlaAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRamUid($value)
    {
        $this->data['RamUid'] = $value;
        $this->options['form_params']['RamUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsServiceUser($value)
    {
        $this->data['IsServiceUser'] = $value;
        $this->options['form_params']['IsServiceUser'] = $value;

        return $this;
    }
}

/**
 * @method string getChargeType()
 * @method string getInstanceType()
 * @method string getComponent()
 */
class CreateInstance extends Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponent($value)
    {
        $this->data['Component'] = $value;
        $this->options['form_params']['Component'] = $value;

        return $this;
    }
}

class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getSwitchId()
 * @method string getSecurityGroupId()
 * @method string getVcName()
 */
class CreateUserNetConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSwitchId($value)
    {
        $this->data['SwitchId'] = $value;
        $this->options['form_params']['SwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['form_params']['SecurityGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultExecutorSpecName()
 * @method string getMaxMemory()
 * @method string getSparkModuleReleaseName()
 * @method string getDescription()
 * @method string getDefaultExecutorNumbers()
 * @method string getMaxCpu()
 * @method string getName()
 * @method string getDefaultDriverSpecName()
 */
class CreateVirtualClusterForSpark extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultExecutorSpecName($value)
    {
        $this->data['DefaultExecutorSpecName'] = $value;
        $this->options['form_params']['DefaultExecutorSpecName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMemory($value)
    {
        $this->data['MaxMemory'] = $value;
        $this->options['form_params']['MaxMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSparkModuleReleaseName($value)
    {
        $this->data['SparkModuleReleaseName'] = $value;
        $this->options['form_params']['SparkModuleReleaseName'] = $value;

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
    public function withDefaultExecutorNumbers($value)
    {
        $this->data['DefaultExecutorNumbers'] = $value;
        $this->options['form_params']['DefaultExecutorNumbers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxCpu($value)
    {
        $this->data['MaxCpu'] = $value;
        $this->options['form_params']['MaxCpu'] = $value;

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
    public function withDefaultDriverSpecName($value)
    {
        $this->data['DefaultDriverSpecName'] = $value;
        $this->options['form_params']['DefaultDriverSpecName'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DecodeStsToken extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method string getIsShort()
 * @method string getIsServiceUser()
 */
class DeleteAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsServiceUser($value)
    {
        $this->data['IsServiceUser'] = $value;
        $this->options['form_params']['IsServiceUser'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class DeleteUserNetConfig extends Rpc
{

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
}

/**
 * @method string getExternalBizAliyunId()
 */
class DescribeCapacity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunId($value)
    {
        $this->data['ExternalBizAliyunId'] = $value;
        $this->options['form_params']['ExternalBizAliyunId'] = $value;

        return $this;
    }
}

/**
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 */
class DescribeDataLakeAnalyticsService extends Rpc
{
}

class DescribeRegionList extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeVirtualCluster extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeVirtualClusterV2 extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getName()
 */
class DestroyVirtualCluster extends Rpc
{

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
}

class ForbidAutomaticMetaSyncAsIntegrationAccount extends Rpc
{
}

/**
 * @method string getNetworkType()
 * @method string getProduct()
 */
class GetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }
}

class GetConsolePermission extends Rpc
{
}

/**
 * @method string getExternalUid()
 * @method string getExternalAliyunUid()
 * @method string getExternalBizAliyunUid()
 */
class GetDLAServiceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getEndPointID()
 */
class GetEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPointID($value)
    {
        $this->data['EndPointID'] = $value;
        $this->options['form_params']['EndPointID'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainURL()
 */
class GetEndPointByDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainURL($value)
    {
        $this->data['DomainURL'] = $value;
        $this->options['form_params']['DomainURL'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getExternalUid()
 * @method string getExternalAliyunUid()
 * @method string getExternalBizAliyunUid()
 */
class GetRegionStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

class GetServiceLinkedRoleStatus extends Rpc
{
}

/**
 * @method string getExternalUid()
 * @method string getInitPassword()
 * @method string getExternalAliyunUid()
 * @method string getUseRandomPassword()
 * @method string getEnableKMS()
 * @method string getExternalBizAliyunUid()
 */
class InitializeDLAService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitPassword($value)
    {
        $this->data['InitPassword'] = $value;
        $this->options['form_params']['InitPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getExternalUid()
 * @method string getInitPassword()
 * @method string getExternalAliyunUid()
 * @method string getUseRandomPassword()
 * @method string getEnableKMS()
 * @method string getExternalBizAliyunUid()
 */
class InitializeRegion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitPassword($value)
    {
        $this->data['InitPassword'] = $value;
        $this->options['form_params']['InitPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class KillSparkJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

class ListAlreadyBingingRamUid extends Rpc
{
}

class ListModulesRelease extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class ListResourcesSpec extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVcName()
 * @method $this withVcName($value)
 */
class ListSparkJob extends Rpc
{
}

/**
 * @method string getType()
 */
class ListVirtualClusters extends Rpc
{

    /** @var string */
    public $method = 'GET';

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
}

/**
 * @method string getDefaultExecutorSpecName()
 * @method string getSparkModuleReleaseName()
 * @method string getDescription()
 * @method string getDefaultExecutorNumbers()
 * @method string getName()
 * @method string getDefaultDriverSpecName()
 */
class ModifyVirtualCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultExecutorSpecName($value)
    {
        $this->data['DefaultExecutorSpecName'] = $value;
        $this->options['form_params']['DefaultExecutorSpecName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSparkModuleReleaseName($value)
    {
        $this->data['SparkModuleReleaseName'] = $value;
        $this->options['form_params']['SparkModuleReleaseName'] = $value;

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
    public function withDefaultExecutorNumbers($value)
    {
        $this->data['DefaultExecutorNumbers'] = $value;
        $this->options['form_params']['DefaultExecutorNumbers'] = $value;

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
    public function withDefaultDriverSpecName($value)
    {
        $this->data['DefaultDriverSpecName'] = $value;
        $this->options['form_params']['DefaultDriverSpecName'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultExecutorSpecName()
 * @method string getMaxMemory()
 * @method string getSparkModuleReleaseName()
 * @method string getDescription()
 * @method string getDefaultExecutorNumbers()
 * @method string getMaxCpu()
 * @method string getName()
 * @method string getDefaultDriverSpecName()
 */
class ModifyVirtualClusterForSpark extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultExecutorSpecName($value)
    {
        $this->data['DefaultExecutorSpecName'] = $value;
        $this->options['form_params']['DefaultExecutorSpecName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMemory($value)
    {
        $this->data['MaxMemory'] = $value;
        $this->options['form_params']['MaxMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSparkModuleReleaseName($value)
    {
        $this->data['SparkModuleReleaseName'] = $value;
        $this->options['form_params']['SparkModuleReleaseName'] = $value;

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
    public function withDefaultExecutorNumbers($value)
    {
        $this->data['DefaultExecutorNumbers'] = $value;
        $this->options['form_params']['DefaultExecutorNumbers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxCpu($value)
    {
        $this->data['MaxCpu'] = $value;
        $this->options['form_params']['MaxCpu'] = $value;

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
    public function withDefaultDriverSpecName($value)
    {
        $this->data['DefaultDriverSpecName'] = $value;
        $this->options['form_params']['DefaultDriverSpecName'] = $value;

        return $this;
    }
}

/**
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 */
class OpenDataLakeAnalyticsService extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class QueryAccountList extends Rpc
{

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

class QueryDataSourceDef extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class QueryDiscountList extends Rpc
{

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

class QueryEndPointList extends Rpc
{
}

class QueryServiceAccountList extends Rpc
{
}

/**
 * @method string getTwoDaysAgoBeginTs()
 * @method string getYesterdayBeginTs()
 * @method string getTodayBeginTs()
 */
class QueryTaskSum extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTwoDaysAgoBeginTs($value)
    {
        $this->data['TwoDaysAgoBeginTs'] = $value;
        $this->options['form_params']['TwoDaysAgoBeginTs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withYesterdayBeginTs($value)
    {
        $this->data['YesterdayBeginTs'] = $value;
        $this->options['form_params']['YesterdayBeginTs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTodayBeginTs($value)
    {
        $this->data['TodayBeginTs'] = $value;
        $this->options['form_params']['TodayBeginTs'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class ReleaseInstance extends Rpc
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
 * @method string getEndPointID()
 */
class RemoveEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPointID($value)
    {
        $this->data['EndPointID'] = $value;
        $this->options['form_params']['EndPointID'] = $value;

        return $this;
    }
}

/**
 * @method string getExternalUid()
 * @method string getInitPassword()
 * @method string getExternalAliyunUid()
 * @method string getUseRandomPassword()
 * @method string getEnableKMS()
 * @method string getExternalBizAliyunUid()
 */
class ResetMainPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitPassword($value)
    {
        $this->data['InitPassword'] = $value;
        $this->options['form_params']['InitPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getNetworkType()
 * @method string getProduct()
 * @method string getAllowIP()
 * @method string getAppend()
 */
class SetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllowIP($value)
    {
        $this->data['AllowIP'] = $value;
        $this->options['form_params']['AllowIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppend($value)
    {
        $this->data['Append'] = $value;
        $this->options['form_params']['Append'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicy()
 * @method string getExternalBizAliyunUid()
 */
class SetCapacityLimitPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicy($value)
    {
        $this->data['Policy'] = $value;
        $this->options['form_params']['Policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getExternalUid()
 * @method string getExternalAliyunUid()
 * @method string getExternalBizAliyunUid()
 */
class SetRelationWithBiz extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicy()
 * @method string getExternalBizAliyunUid()
 */
class SetTrafficLimitPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicy($value)
    {
        $this->data['Policy'] = $value;
        $this->options['form_params']['Policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class StartVirtualCluster extends Rpc
{

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
}

/**
 * @method string getName()
 */
class StopVirtualCluster extends Rpc
{

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
}

/**
 * @method string getConfigJson()
 * @method string getVcName()
 */
class SubmitSparkJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigJson($value)
    {
        $this->data['ConfigJson'] = $value;
        $this->options['form_params']['ConfigJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

class UnSubscribeRegion extends Rpc
{
}

/**
 * @method string getIsShort()
 * @method string getPassword()
 * @method string getAccountName()
 * @method string getEnableKMS()
 * @method string getUseRandomPassword()
 */
class UpdateAccountPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

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
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }
}
