<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ResetAppCode resetAppCode(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method CreateIntranetDomain createIntranetDomain(array $options = [])
 * @method ImportSwagger importSwagger(array $options = [])
 * @method SetIpControlApis setIpControlApis(array $options = [])
 * @method RemoveIpControlPolicyItem removeIpControlPolicyItem(array $options = [])
 * @method RemoveIpControlApis removeIpControlApis(array $options = [])
 * @method ModifyIpControlPolicyItem modifyIpControlPolicyItem(array $options = [])
 * @method ModifyIpControl modifyIpControl(array $options = [])
 * @method DescribeIpControls describeIpControls(array $options = [])
 * @method DescribeIpControlPolicyItems describeIpControlPolicyItems(array $options = [])
 * @method DescribeApisByIpControl describeApisByIpControl(array $options = [])
 * @method DescribeApiIpControls describeApiIpControls(array $options = [])
 * @method DeleteIpControl deleteIpControl(array $options = [])
 * @method CreateIpControl createIpControl(array $options = [])
 * @method AddIpControlPolicyItem addIpControlPolicyItem(array $options = [])
 * @method ModifyLogConfig modifyLogConfig(array $options = [])
 * @method DescribeLogConfig describeLogConfig(array $options = [])
 * @method DeleteLogConfig deleteLogConfig(array $options = [])
 * @method CreateLogConfig createLogConfig(array $options = [])
 * @method SetDomainWebSocketStatus setDomainWebSocketStatus(array $options = [])
 * @method RemoveVpcAccess removeVpcAccess(array $options = [])
 * @method SetVpcAccess setVpcAccess(array $options = [])
 * @method DescribeVpcAccesses describeVpcAccesses(array $options = [])
 * @method ReactivateDomain reactivateDomain(array $options = [])
 * @method DescribeApiHistories describeApiHistories(array $options = [])
 * @method SdkGenerateByGroup sdkGenerateByGroup(array $options = [])
 * @method SdkGenerateByApp sdkGenerateByApp(array $options = [])
 * @method DescribeApisByApp describeApisByApp(array $options = [])
 * @method SdkGenerate sdkGenerate(array $options = [])
 * @method DescribeApiStage describeApiStage(array $options = [])
 * @method DeleteApiStageVariable deleteApiStageVariable(array $options = [])
 * @method CreateApiStageVariable createApiStageVariable(array $options = [])
 * @method SwitchApi switchApi(array $options = [])
 * @method SetTrafficControlApis setTrafficControlApis(array $options = [])
 * @method SetSignatureApis setSignatureApis(array $options = [])
 * @method SetDomainCertificate setDomainCertificate(array $options = [])
 * @method SetDomain setDomain(array $options = [])
 * @method SetAppsAuthorities setAppsAuthorities(array $options = [])
 * @method SetApisAuthorities setApisAuthorities(array $options = [])
 * @method ResetAppSecret resetAppSecret(array $options = [])
 * @method RemoveTrafficControlApis removeTrafficControlApis(array $options = [])
 * @method RemoveSignatureApis removeSignatureApis(array $options = [])
 * @method RemoveAppsAuthorities removeAppsAuthorities(array $options = [])
 * @method RemoveApisAuthorities removeApisAuthorities(array $options = [])
 * @method ModifyTrafficControl modifyTrafficControl(array $options = [])
 * @method ModifySignature modifySignature(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyApiGroup modifyApiGroup(array $options = [])
 * @method ModifyApi modifyApi(array $options = [])
 * @method DescribeTrafficControlsByApi describeTrafficControlsByApi(array $options = [])
 * @method DescribeTrafficControls describeTrafficControls(array $options = [])
 * @method DescribeSystemParameters describeSystemParameters(array $options = [])
 * @method DescribeSignaturesByApi describeSignaturesByApi(array $options = [])
 * @method DescribeSignatures describeSignatures(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribePurchasedApis describePurchasedApis(array $options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups(array $options = [])
 * @method DescribePurchasedApiGroup describePurchasedApiGroup(array $options = [])
 * @method DescribeHistoryApis describeHistoryApis(array $options = [])
 * @method DescribeDomainsResolution describeDomainsResolution(array $options = [])
 * @method DescribeDomain describeDomain(array $options = [])
 * @method DescribeDeployedApis describeDeployedApis(array $options = [])
 * @method DescribeDeployedApi describeDeployedApi(array $options = [])
 * @method DescribeAuthorizedApps describeAuthorizedApps(array $options = [])
 * @method DescribeAuthorizedApis describeAuthorizedApis(array $options = [])
 * @method DescribeAppSecurity describeAppSecurity(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAppAttributes describeAppAttributes(array $options = [])
 * @method DescribeApiTrafficData describeApiTrafficData(array $options = [])
 * @method DescribeApiTrafficControls describeApiTrafficControls(array $options = [])
 * @method DescribeApiSignatures describeApiSignatures(array $options = [])
 * @method DescribeApisByTrafficControl describeApisByTrafficControl(array $options = [])
 * @method DescribeApisBySignature describeApisBySignature(array $options = [])
 * @method DescribeApis describeApis(array $options = [])
 * @method DescribeApiQpsData describeApiQpsData(array $options = [])
 * @method DescribeApiLatencyData describeApiLatencyData(array $options = [])
 * @method DescribeApiHistory describeApiHistory(array $options = [])
 * @method DescribeApiGroups describeApiGroups(array $options = [])
 * @method DescribeApiGroup describeApiGroup(array $options = [])
 * @method DescribeApiErrorData describeApiErrorData(array $options = [])
 * @method DescribeApiDoc describeApiDoc(array $options = [])
 * @method DescribeApi describeApi(array $options = [])
 * @method DeployApi deployApi(array $options = [])
 * @method DeleteTrafficSpecialControl deleteTrafficSpecialControl(array $options = [])
 * @method DeleteTrafficControl deleteTrafficControl(array $options = [])
 * @method DeleteSignature deleteSignature(array $options = [])
 * @method DeleteDomainCertificate deleteDomainCertificate(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteApiGroup deleteApiGroup(array $options = [])
 * @method DeleteApi deleteApi(array $options = [])
 * @method DeleteAllTrafficSpecialControl deleteAllTrafficSpecialControl(array $options = [])
 * @method CreateTrafficControl createTrafficControl(array $options = [])
 * @method CreateSignature createSignature(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateApiGroup createApiGroup(array $options = [])
 * @method CreateApi createApi(array $options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl(array $options = [])
 * @method AbolishApi abolishApi(array $options = [])
 */
class CloudAPIApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CloudAPI';

    /** @var string */
    public $version = '2016-07-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'apigateway';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppCode()
 * @method $this withAppCode($value)
 */
class ResetAppCode extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeApp extends Rpc
{
}

/**
 * @method string getDeleteInternetDomain()
 * @method $this withDeleteInternetDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class CreateIntranetDomain extends Rpc
{
}

/**
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getData()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 */
class ImportSwagger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetIpControlApis extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPolicyItemIds()
 * @method $this withPolicyItemIds($value)
 */
class RemoveIpControlPolicyItem extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveIpControlApis extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getPolicyItemId()
 * @method $this withPolicyItemId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class ModifyIpControlPolicyItem extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyIpControl extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getIpControlType()
 * @method $this withIpControlType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeIpControls extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getPolicyItemId()
 * @method $this withPolicyItemId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeIpControlPolicyItems extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApisByIpControl extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiIpControls extends Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteIpControl extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getIpControlType()
 * @method $this withIpControlType($value)
 * @method array getIpControlPolicys()
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateIpControl extends Rpc
{

    /**
     * @param array $ipControlPolicys
     *
     * @return $this
     */
    public function withIpControlPolicys(array $ipControlPolicys)
    {
        $this->data['IpControlPolicys'] = $ipControlPolicys;
        foreach ($ipControlPolicys as $depth1 => $depth1Value) {
            $this->options['query']['IpControlPolicys.' . ($depth1 + 1) . '.AppId'] = $depth1Value['AppId'];
            $this->options['query']['IpControlPolicys.' . ($depth1 + 1) . '.CidrIp'] = $depth1Value['CidrIp'];
        }

        return $this;
    }
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class AddIpControlPolicyItem extends Rpc
{
}

/**
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 */
class ModifyLogConfig extends Rpc
{
}

/**
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLogConfig extends Rpc
{
}

/**
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteLogConfig extends Rpc
{
}

/**
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 */
class CreateLogConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getActionValue()
 * @method $this withActionValue($value)
 */
class SetDomainWebSocketStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class RemoveVpcAccess extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SetVpcAccess extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVpcAccesses extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class ReactivateDomain extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApiHistories extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class SdkGenerateByGroup extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class SdkGenerateByApp extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApisByApp extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class SdkGenerate extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class DescribeApiStage extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class DeleteApiStageVariable extends Rpc
{
}

/**
 * @method string getSupportRoute()
 * @method $this withSupportRoute($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getVariableValue()
 * @method $this withVariableValue($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageRouteModel()
 * @method $this withStageRouteModel($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class CreateApiStageVariable extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getHistoryVersion()
 * @method $this withHistoryVersion($value)
 */
class SwitchApi extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetTrafficControlApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetSignatureApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertificatePrivateKey()
 * @method $this withCertificatePrivateKey($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 * @method string getCertificateBody()
 * @method $this withCertificateBody($value)
 */
class SetDomainCertificate extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertificatePrivateKey()
 * @method $this withCertificatePrivateKey($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 * @method string getCertificateBody()
 * @method $this withCertificateBody($value)
 */
class SetDomain extends Rpc
{
}

/**
 * @method string getAuthVaildTime()
 * @method $this withAuthVaildTime($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 */
class SetAppsAuthorities extends Rpc
{
}

/**
 * @method string getAuthVaildTime()
 * @method $this withAuthVaildTime($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetApisAuthorities extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ResetAppSecret extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveTrafficControlApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveSignatureApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class RemoveAppsAuthorities extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveApisAuthorities extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getApiDefault()
 * @method $this withApiDefault($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getTrafficControlUnit()
 * @method $this withTrafficControlUnit($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserDefault()
 * @method $this withUserDefault($value)
 * @method string getAppDefault()
 * @method $this withAppDefault($value)
 */
class ModifyTrafficControl extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getSignatureKey()
 * @method $this withSignatureKey($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getSignatureSecret()
 * @method $this withSignatureSecret($value)
 */
class ModifySignature extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyApp extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ModifyApiGroup extends Rpc
{
}

/**
 * @method string getWebSocketApiType()
 * @method $this withWebSocketApiType($value)
 * @method string getErrorCodeSamples()
 * @method $this withErrorCodeSamples($value)
 * @method string getAppCodeAuthType()
 * @method $this withAppCodeAuthType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDisableInternet()
 * @method $this withDisableInternet($value)
 * @method string getConstantParameters()
 * @method $this withConstantParameters($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAllowSignatureMethod()
 * @method $this withAllowSignatureMethod($value)
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getFailResultSample()
 * @method $this withFailResultSample($value)
 * @method string getSystemParameters()
 * @method $this withSystemParameters($value)
 * @method string getServiceParametersMap()
 * @method $this withServiceParametersMap($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOpenIdConnectConfig()
 * @method $this withOpenIdConnectConfig($value)
 * @method string getRequestParameters()
 * @method $this withRequestParameters($value)
 * @method string getResultDescriptions()
 * @method $this withResultDescriptions($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceConfig()
 * @method $this withServiceConfig($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getResultSample()
 * @method $this withResultSample($value)
 * @method string getForceNonceCheck()
 * @method $this withForceNonceCheck($value)
 * @method string getRequestConfig()
 * @method $this withRequestConfig($value)
 * @method string getResultBodyModel()
 * @method $this withResultBodyModel($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class ModifyApi extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeTrafficControlsByApi extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeTrafficControls extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeSystemParameters extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeSignaturesByApi extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSignatures extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePurchasedApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePurchasedApiGroups extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribePurchasedApiGroup extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeHistoryApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeDomainsResolution extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDomain extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDeployedApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeDeployedApi extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAppOwnerId()
 * @method $this withAppOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAuthorizedApps extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAuthorizedApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeAppSecurity extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppOwner()
 * @method $this withAppOwner($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApps extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAppAttributes extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiTrafficData extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiTrafficControls extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiSignatures extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApisByTrafficControl extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApisBySignature extends Rpc
{
}

/**
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getCatalogId()
 * @method $this withCatalogId($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiQpsData extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiLatencyData extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getHistoryVersion()
 * @method $this withHistoryVersion($value)
 */
class DescribeApiHistory extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApiGroups extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeApiGroup extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiErrorData extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiDoc extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApi extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DeployApi extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSpecialKey()
 * @method $this withSpecialKey($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSpecialType()
 * @method $this withSpecialType($value)
 */
class DeleteTrafficSpecialControl extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteTrafficControl extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 */
class DeleteSignature extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DeleteDomainCertificate extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteApp extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteApiGroup extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DeleteApi extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteAllTrafficSpecialControl extends Rpc
{
}

/**
 * @method string getApiDefault()
 * @method $this withApiDefault($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getTrafficControlUnit()
 * @method $this withTrafficControlUnit($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserDefault()
 * @method $this withUserDefault($value)
 * @method string getAppDefault()
 * @method $this withAppDefault($value)
 */
class CreateTrafficControl extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getSignatureKey()
 * @method $this withSignatureKey($value)
 * @method string getSignatureSecret()
 * @method $this withSignatureSecret($value)
 */
class CreateSignature extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateApp extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateApiGroup extends Rpc
{
}

/**
 * @method string getWebSocketApiType()
 * @method $this withWebSocketApiType($value)
 * @method string getErrorCodeSamples()
 * @method $this withErrorCodeSamples($value)
 * @method string getAppCodeAuthType()
 * @method $this withAppCodeAuthType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDisableInternet()
 * @method $this withDisableInternet($value)
 * @method string getConstantParameters()
 * @method $this withConstantParameters($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAllowSignatureMethod()
 * @method $this withAllowSignatureMethod($value)
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getFailResultSample()
 * @method $this withFailResultSample($value)
 * @method string getSystemParameters()
 * @method $this withSystemParameters($value)
 * @method string getServiceParametersMap()
 * @method $this withServiceParametersMap($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOpenIdConnectConfig()
 * @method $this withOpenIdConnectConfig($value)
 * @method string getRequestParameters()
 * @method $this withRequestParameters($value)
 * @method string getResultDescriptions()
 * @method $this withResultDescriptions($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceConfig()
 * @method $this withServiceConfig($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getResultSample()
 * @method $this withResultSample($value)
 * @method string getForceNonceCheck()
 * @method $this withForceNonceCheck($value)
 * @method string getRequestConfig()
 * @method $this withRequestConfig($value)
 * @method string getResultBodyModel()
 * @method $this withResultBodyModel($value)
 */
class CreateApi extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSpecialKey()
 * @method $this withSpecialKey($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficValue()
 * @method $this withTrafficValue($value)
 * @method string getSpecialType()
 * @method $this withSpecialType($value)
 */
class AddTrafficSpecialControl extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class AbolishApi extends Rpc
{
}
