<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

class V20160714Rpc extends Rpc
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
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class ModifyGroupInstance extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstances extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeApp extends V20160714Rpc
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
class CreateIntranetDomain extends V20160714Rpc
{
}

/**
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 */
class ImportSwagger extends V20160714Rpc
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
class SetIpControlApis extends V20160714Rpc
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
class RemoveIpControlPolicyItem extends V20160714Rpc
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
class ModifyIpControlPolicyItem extends V20160714Rpc
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
class RemoveIpControlApis extends V20160714Rpc
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
class DescribeIpControls extends V20160714Rpc
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
class ModifyIpControl extends V20160714Rpc
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
class DescribeIpControlPolicyItems extends V20160714Rpc
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
class DescribeApisByIpControl extends V20160714Rpc
{
}

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteIpControl extends V20160714Rpc
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
class DescribeApiIpControls extends V20160714Rpc
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
class CreateIpControl extends V20160714Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIpControlPolicys(array $value)
    {
        $this->data['IpControlPolicys'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.AppId'] = $value[$i]['AppId'];
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.CidrIp'] = $value[$i]['CidrIp'];
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
class AddIpControlPolicyItem extends V20160714Rpc
{
}

/**
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLogConfig extends V20160714Rpc
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
class ModifyLogConfig extends V20160714Rpc
{
}

/**
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteLogConfig extends V20160714Rpc
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
class CreateLogConfig extends V20160714Rpc
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
class SetDomainWebSocketStatus extends V20160714Rpc
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
class DescribeVpcAccesses extends V20160714Rpc
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
class SetVpcAccess extends V20160714Rpc
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
class RemoveVpcAccess extends V20160714Rpc
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
class ReactivateDomain extends V20160714Rpc
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
class DescribeApiHistories extends V20160714Rpc
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
class SdkGenerateByGroup extends V20160714Rpc
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
class SdkGenerateByApp extends V20160714Rpc
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
class DescribeApisByApp extends V20160714Rpc
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
class SdkGenerate extends V20160714Rpc
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
class DescribeApiStage extends V20160714Rpc
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
class CreateApiStageVariable extends V20160714Rpc
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
class DeleteApiStageVariable extends V20160714Rpc
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
class SetSignatureApis extends V20160714Rpc
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
class SetTrafficControlApis extends V20160714Rpc
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
class SwitchApi extends V20160714Rpc
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
class SetApisAuthorities extends V20160714Rpc
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
class SetAppsAuthorities extends V20160714Rpc
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
class SetDomain extends V20160714Rpc
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
class SetDomainCertificate extends V20160714Rpc
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
class RemoveAppsAuthorities extends V20160714Rpc
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
class RemoveSignatureApis extends V20160714Rpc
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
class RemoveTrafficControlApis extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ResetAppSecret extends V20160714Rpc
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
class ModifyApp extends V20160714Rpc
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
class ModifySignature extends V20160714Rpc
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
class ModifyTrafficControl extends V20160714Rpc
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
class RemoveApisAuthorities extends V20160714Rpc
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
class DescribeTrafficControls extends V20160714Rpc
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
class DescribeTrafficControlsByApi extends V20160714Rpc
{
}

/**
 * @method string getWebSocketApiType()
 * @method $this withWebSocketApiType($value)
 * @method string getErrorCodeSamples()
 * @method $this withErrorCodeSamples($value)
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
class ModifyApi extends V20160714Rpc
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
class ModifyApiGroup extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeRegions extends V20160714Rpc
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
class DescribeSignatures extends V20160714Rpc
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
class DescribeSignaturesByApi extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeSystemParameters extends V20160714Rpc
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
class DescribeHistoryApis extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribePurchasedApiGroup extends V20160714Rpc
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
class DescribePurchasedApiGroups extends V20160714Rpc
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
class DescribePurchasedApis extends V20160714Rpc
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
class DescribeDeployedApi extends V20160714Rpc
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
class DescribeDeployedApis extends V20160714Rpc
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
class DescribeDomain extends V20160714Rpc
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
class DescribeDomainsResolution extends V20160714Rpc
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
class DescribeApps extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeAppSecurity extends V20160714Rpc
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
class DescribeAuthorizedApis extends V20160714Rpc
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
class DescribeAuthorizedApps extends V20160714Rpc
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
class DescribeApiSignatures extends V20160714Rpc
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
class DescribeApiTrafficControls extends V20160714Rpc
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
class DescribeApiTrafficData extends V20160714Rpc
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
class DescribeAppAttributes extends V20160714Rpc
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
class DescribeApis extends V20160714Rpc
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
class DescribeApisBySignature extends V20160714Rpc
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
class DescribeApisByTrafficControl extends V20160714Rpc
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
class DescribeApiGroups extends V20160714Rpc
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
class DescribeApiHistory extends V20160714Rpc
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
class DescribeApiLatencyData extends V20160714Rpc
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
class DescribeApiQpsData extends V20160714Rpc
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
class DescribeApiDoc extends V20160714Rpc
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
class DescribeApiErrorData extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeApiGroup extends V20160714Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteTrafficControl extends V20160714Rpc
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
class DeleteTrafficSpecialControl extends V20160714Rpc
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
class DeployApi extends V20160714Rpc
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
class DescribeApi extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteApp extends V20160714Rpc
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
class DeleteDomain extends V20160714Rpc
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
class DeleteDomainCertificate extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 */
class DeleteSignature extends V20160714Rpc
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
class CreateTrafficControl extends V20160714Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteAllTrafficSpecialControl extends V20160714Rpc
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
class DeleteApi extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteApiGroup extends V20160714Rpc
{
}

/**
 * @method string getWebSocketApiType()
 * @method $this withWebSocketApiType($value)
 * @method string getErrorCodeSamples()
 * @method $this withErrorCodeSamples($value)
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
class CreateApi extends V20160714Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateApiGroup extends V20160714Rpc
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
class CreateApp extends V20160714Rpc
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
class CreateSignature extends V20160714Rpc
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
class AbolishApi extends V20160714Rpc
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
class AddTrafficSpecialControl extends V20160714Rpc
{
}
