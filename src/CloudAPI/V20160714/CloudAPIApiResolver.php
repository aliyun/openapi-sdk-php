<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbolishApi abolishApi(array $options = [])
 * @method AddAccessControlListEntry addAccessControlListEntry(array $options = [])
 * @method AddIpControlPolicyItem addIpControlPolicyItem(array $options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl(array $options = [])
 * @method AttachApiProduct attachApiProduct(array $options = [])
 * @method AttachPlugin attachPlugin(array $options = [])
 * @method BatchAbolishApis batchAbolishApis(array $options = [])
 * @method BatchDeployApis batchDeployApis(array $options = [])
 * @method CreateAccessControlList createAccessControlList(array $options = [])
 * @method CreateApi createApi(array $options = [])
 * @method CreateApiGroup createApiGroup(array $options = [])
 * @method CreateApiStageVariable createApiStageVariable(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateBackend createBackend(array $options = [])
 * @method CreateBackendModel createBackendModel(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateDatasetItem createDatasetItem(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateIntranetDomain createIntranetDomain(array $options = [])
 * @method CreateIpControl createIpControl(array $options = [])
 * @method CreateLogConfig createLogConfig(array $options = [])
 * @method CreateModel createModel(array $options = [])
 * @method CreateMonitorGroup createMonitorGroup(array $options = [])
 * @method CreatePlugin createPlugin(array $options = [])
 * @method CreateSignature createSignature(array $options = [])
 * @method CreateTrafficControl createTrafficControl(array $options = [])
 * @method DeleteAccessControlList deleteAccessControlList(array $options = [])
 * @method DeleteAllTrafficSpecialControl deleteAllTrafficSpecialControl(array $options = [])
 * @method DeleteApi deleteApi(array $options = [])
 * @method DeleteApiGroup deleteApiGroup(array $options = [])
 * @method DeleteApiProduct deleteApiProduct(array $options = [])
 * @method DeleteApiStageVariable deleteApiStageVariable(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteBackend deleteBackend(array $options = [])
 * @method DeleteBackendModel deleteBackendModel(array $options = [])
 * @method DeleteDataset deleteDataset(array $options = [])
 * @method DeleteDatasetItem deleteDatasetItem(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteDomainCertificate deleteDomainCertificate(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteIpControl deleteIpControl(array $options = [])
 * @method DeleteLogConfig deleteLogConfig(array $options = [])
 * @method DeleteModel deleteModel(array $options = [])
 * @method DeleteMonitorGroup deleteMonitorGroup(array $options = [])
 * @method DeletePlugin deletePlugin(array $options = [])
 * @method DeleteSignature deleteSignature(array $options = [])
 * @method DeleteTrafficControl deleteTrafficControl(array $options = [])
 * @method DeleteTrafficSpecialControl deleteTrafficSpecialControl(array $options = [])
 * @method DeployApi deployApi(array $options = [])
 * @method DescribeAbolishApiTask describeAbolishApiTask(array $options = [])
 * @method DescribeAccessControlListAttribute describeAccessControlListAttribute(array $options = [])
 * @method DescribeAccessControlLists describeAccessControlLists(array $options = [])
 * @method DescribeApi describeApi(array $options = [])
 * @method DescribeApiDoc describeApiDoc(array $options = [])
 * @method DescribeApiGroup describeApiGroup(array $options = [])
 * @method DescribeApiGroups describeApiGroups(array $options = [])
 * @method DescribeApiGroupVpcWhitelist describeApiGroupVpcWhitelist(array $options = [])
 * @method DescribeApiHistories describeApiHistories(array $options = [])
 * @method DescribeApiHistory describeApiHistory(array $options = [])
 * @method DescribeApiIpControls describeApiIpControls(array $options = [])
 * @method DescribeApiLatencyData describeApiLatencyData(array $options = [])
 * @method DescribeApiMarketAttributes describeApiMarketAttributes(array $options = [])
 * @method DescribeApiProductApis describeApiProductApis(array $options = [])
 * @method DescribeApiProductsByApp describeApiProductsByApp(array $options = [])
 * @method DescribeApiQpsData describeApiQpsData(array $options = [])
 * @method DescribeApis describeApis(array $options = [])
 * @method DescribeApisByApp describeApisByApp(array $options = [])
 * @method DescribeApisByBackend describeApisByBackend(array $options = [])
 * @method DescribeApisByIpControl describeApisByIpControl(array $options = [])
 * @method DescribeApisBySignature describeApisBySignature(array $options = [])
 * @method DescribeApisByTrafficControl describeApisByTrafficControl(array $options = [])
 * @method DescribeApiSignatures describeApiSignatures(array $options = [])
 * @method DescribeApisWithStageNameIntegratedByApp describeApisWithStageNameIntegratedByApp(array $options = [])
 * @method DescribeApiTrafficControls describeApiTrafficControls(array $options = [])
 * @method DescribeApiTrafficData describeApiTrafficData(array $options = [])
 * @method DescribeApp describeApp(array $options = [])
 * @method DescribeAppAttributes describeAppAttributes(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAppsByApiProduct describeAppsByApiProduct(array $options = [])
 * @method DescribeAppSecurity describeAppSecurity(array $options = [])
 * @method DescribeAuthorizedApis describeAuthorizedApis(array $options = [])
 * @method DescribeAuthorizedApps describeAuthorizedApps(array $options = [])
 * @method DescribeBackendInfo describeBackendInfo(array $options = [])
 * @method DescribeBackendList describeBackendList(array $options = [])
 * @method DescribeDatasetInfo describeDatasetInfo(array $options = [])
 * @method DescribeDatasetItemInfo describeDatasetItemInfo(array $options = [])
 * @method DescribeDatasetItemList describeDatasetItemList(array $options = [])
 * @method DescribeDatasetList describeDatasetList(array $options = [])
 * @method DescribeDeployApiTask describeDeployApiTask(array $options = [])
 * @method DescribeDeployedApi describeDeployedApi(array $options = [])
 * @method DescribeDeployedApis describeDeployedApis(array $options = [])
 * @method DescribeDomain describeDomain(array $options = [])
 * @method DescribeGroupLatency describeGroupLatency(array $options = [])
 * @method DescribeGroupQps describeGroupQps(array $options = [])
 * @method DescribeGroupTraffic describeGroupTraffic(array $options = [])
 * @method DescribeHistoryApis describeHistoryApis(array $options = [])
 * @method DescribeImportOASTask describeImportOASTask(array $options = [])
 * @method DescribeInstanceDropConnections describeInstanceDropConnections(array $options = [])
 * @method DescribeInstanceDropPacket describeInstanceDropPacket(array $options = [])
 * @method DescribeInstanceHttpCode describeInstanceHttpCode(array $options = [])
 * @method DescribeInstanceLatency describeInstanceLatency(array $options = [])
 * @method DescribeInstanceNewConnections describeInstanceNewConnections(array $options = [])
 * @method DescribeInstancePackets describeInstancePackets(array $options = [])
 * @method DescribeInstanceQps describeInstanceQps(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSlbConnect describeInstanceSlbConnect(array $options = [])
 * @method DescribeInstanceTraffic describeInstanceTraffic(array $options = [])
 * @method DescribeIpControlPolicyItems describeIpControlPolicyItems(array $options = [])
 * @method DescribeIpControls describeIpControls(array $options = [])
 * @method DescribeLogConfig describeLogConfig(array $options = [])
 * @method DescribeMarketRemainsQuota describeMarketRemainsQuota(array $options = [])
 * @method DescribeModels describeModels(array $options = [])
 * @method DescribePluginApis describePluginApis(array $options = [])
 * @method DescribePlugins describePlugins(array $options = [])
 * @method DescribePluginsByApi describePluginsByApi(array $options = [])
 * @method DescribePluginSchemas describePluginSchemas(array $options = [])
 * @method DescribePluginTemplates describePluginTemplates(array $options = [])
 * @method DescribePurchasedApiGroup describePurchasedApiGroup(array $options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups(array $options = [])
 * @method DescribePurchasedApis describePurchasedApis(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSignatures describeSignatures(array $options = [])
 * @method DescribeSignaturesByApi describeSignaturesByApi(array $options = [])
 * @method DescribeSummaryData describeSummaryData(array $options = [])
 * @method DescribeSystemParameters describeSystemParameters(array $options = [])
 * @method DescribeTrafficControls describeTrafficControls(array $options = [])
 * @method DescribeTrafficControlsByApi describeTrafficControlsByApi(array $options = [])
 * @method DescribeUpdateBackendTask describeUpdateBackendTask(array $options = [])
 * @method DescribeUpdateVpcInfoTask describeUpdateVpcInfoTask(array $options = [])
 * @method DescribeVpcAccesses describeVpcAccesses(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachApiProduct detachApiProduct(array $options = [])
 * @method DetachPlugin detachPlugin(array $options = [])
 * @method DisableInstanceAccessControl disableInstanceAccessControl(array $options = [])
 * @method DryRunSwagger dryRunSwagger(array $options = [])
 * @method EnableInstanceAccessControl enableInstanceAccessControl(array $options = [])
 * @method ImportOAS importOAS(array $options = [])
 * @method ImportSwagger importSwagger(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyApi modifyApi(array $options = [])
 * @method ModifyApiConfiguration modifyApiConfiguration(array $options = [])
 * @method ModifyApiGroup modifyApiGroup(array $options = [])
 * @method ModifyApiGroupVpcWhitelist modifyApiGroupVpcWhitelist(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyBackend modifyBackend(array $options = [])
 * @method ModifyBackendModel modifyBackendModel(array $options = [])
 * @method ModifyDataset modifyDataset(array $options = [])
 * @method ModifyDatasetItem modifyDatasetItem(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method ModifyIntranetDomainPolicy modifyIntranetDomainPolicy(array $options = [])
 * @method ModifyIpControl modifyIpControl(array $options = [])
 * @method ModifyIpControlPolicyItem modifyIpControlPolicyItem(array $options = [])
 * @method ModifyLogConfig modifyLogConfig(array $options = [])
 * @method ModifyModel modifyModel(array $options = [])
 * @method ModifyPlugin modifyPlugin(array $options = [])
 * @method ModifySignature modifySignature(array $options = [])
 * @method ModifyTrafficControl modifyTrafficControl(array $options = [])
 * @method ModifyVpcAccessAndUpdateApis modifyVpcAccessAndUpdateApis(array $options = [])
 * @method OpenApiGatewayService openApiGatewayService(array $options = [])
 * @method QueryRequestLogs queryRequestLogs(array $options = [])
 * @method ReactivateDomain reactivateDomain(array $options = [])
 * @method RemoveAccessControlListEntry removeAccessControlListEntry(array $options = [])
 * @method RemoveApiProductsAuthorities removeApiProductsAuthorities(array $options = [])
 * @method RemoveApisAuthorities removeApisAuthorities(array $options = [])
 * @method RemoveAppsAuthorities removeAppsAuthorities(array $options = [])
 * @method RemoveIpControlApis removeIpControlApis(array $options = [])
 * @method RemoveIpControlPolicyItem removeIpControlPolicyItem(array $options = [])
 * @method RemoveSignatureApis removeSignatureApis(array $options = [])
 * @method RemoveTrafficControlApis removeTrafficControlApis(array $options = [])
 * @method RemoveVpcAccess removeVpcAccess(array $options = [])
 * @method RemoveVpcAccessAndAbolishApis removeVpcAccessAndAbolishApis(array $options = [])
 * @method ResetAppCode resetAppCode(array $options = [])
 * @method ResetAppSecret resetAppSecret(array $options = [])
 * @method SdkGenerateByApp sdkGenerateByApp(array $options = [])
 * @method SdkGenerateByAppForRegion sdkGenerateByAppForRegion(array $options = [])
 * @method SdkGenerateByGroup sdkGenerateByGroup(array $options = [])
 * @method SetAccessControlListAttribute setAccessControlListAttribute(array $options = [])
 * @method SetApiProductsAuthorities setApiProductsAuthorities(array $options = [])
 * @method SetApisAuthorities setApisAuthorities(array $options = [])
 * @method SetAppsAuthorities setAppsAuthorities(array $options = [])
 * @method SetDomain setDomain(array $options = [])
 * @method SetDomainCertificate setDomainCertificate(array $options = [])
 * @method SetDomainWebSocketStatus setDomainWebSocketStatus(array $options = [])
 * @method SetGroupAuthAppCode setGroupAuthAppCode(array $options = [])
 * @method SetIpControlApis setIpControlApis(array $options = [])
 * @method SetSignatureApis setSignatureApis(array $options = [])
 * @method SetTrafficControlApis setTrafficControlApis(array $options = [])
 * @method SetVpcAccess setVpcAccess(array $options = [])
 * @method SetWildcardDomainPatterns setWildcardDomainPatterns(array $options = [])
 * @method SwitchApi switchApi(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method ValidateVpcConnectivity validateVpcConnectivity(array $options = [])
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
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class AbolishApi extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAclEntrys()
 * @method $this withAclEntrys($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class AddAccessControlListEntry extends Rpc
{
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
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getSpecialKey()
 * @method $this withSpecialKey($value)
 * @method string getTrafficValue()
 * @method $this withTrafficValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSpecialType()
 * @method $this withSpecialType($value)
 */
class AddTrafficSpecialControl extends Rpc
{
}

/**
 * @method array getApis()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiProductId()
 * @method $this withApiProductId($value)
 */
class AttachApiProduct extends Rpc
{

    /**
     * @param array $apis
     *
     * @return $this
     */
	public function withApis(array $apis)
	{
	    $this->data['Apis'] = $apis;
		foreach ($apis as $depth1 => $depth1Value) {
			if(isset($depth1Value['StageName'])){
				$this->options['query']['Apis.' . ($depth1 + 1) . '.StageName'] = $depth1Value['StageName'];
			}
			if(isset($depth1Value['ApiId'])){
				$this->options['query']['Apis.' . ($depth1 + 1) . '.ApiId'] = $depth1Value['ApiId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class AttachPlugin extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getApi()
 */
class BatchAbolishApis extends Rpc
{

    /**
     * @param array $api
     *
     * @return $this
     */
	public function withApi(array $api)
	{
	    $this->data['Api'] = $api;
		foreach ($api as $depth1 => $depth1Value) {
			if(isset($depth1Value['StageName'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.StageName'] = $depth1Value['StageName'];
			}
			if(isset($depth1Value['GroupId'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
			}
			if(isset($depth1Value['ApiUid'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.ApiUid'] = $depth1Value['ApiUid'];
			}
			if(isset($depth1Value['StageId'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.StageId'] = $depth1Value['StageId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getApi()
 */
class BatchDeployApis extends Rpc
{

    /**
     * @param array $api
     *
     * @return $this
     */
	public function withApi(array $api)
	{
	    $this->data['Api'] = $api;
		foreach ($api as $depth1 => $depth1Value) {
			if(isset($depth1Value['GroupId'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
			}
			if(isset($depth1Value['ApiUid'])){
				$this->options['query']['Api.' . ($depth1 + 1) . '.ApiUid'] = $depth1Value['ApiUid'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateAccessControlList extends Rpc
{
}

/**
 * @method string getWebSocketApiType()
 * @method $this withWebSocketApiType($value)
 * @method string getErrorCodeSamples()
 * @method string getAppCodeAuthType()
 * @method $this withAppCodeAuthType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDisableInternet()
 * @method $this withDisableInternet($value)
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getConstantParameters()
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAllowSignatureMethod()
 * @method $this withAllowSignatureMethod($value)
 * @method string getServiceParameters()
 * @method string getFailResultSample()
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getSystemParameters()
 * @method string getServiceParametersMap()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOpenIdConnectConfig()
 * @method $this withOpenIdConnectConfig($value)
 * @method string getRequestParameters()
 * @method string getResultDescriptions()
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
 * @method string getBackendEnable()
 * @method $this withBackendEnable($value)
 * @method string getForceNonceCheck()
 * @method $this withForceNonceCheck($value)
 * @method string getRequestConfig()
 * @method $this withRequestConfig($value)
 * @method string getResultBodyModel()
 * @method $this withResultBodyModel($value)
 */
class CreateApi extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErrorCodeSamples($value)
    {
        $this->data['ErrorCodeSamples'] = $value;
        $this->options['form_params']['ErrorCodeSamples'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConstantParameters($value)
    {
        $this->data['ConstantParameters'] = $value;
        $this->options['form_params']['ConstantParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceParameters($value)
    {
        $this->data['ServiceParameters'] = $value;
        $this->options['form_params']['ServiceParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailResultSample($value)
    {
        $this->data['FailResultSample'] = $value;
        $this->options['form_params']['FailResultSample'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemParameters($value)
    {
        $this->data['SystemParameters'] = $value;
        $this->options['form_params']['SystemParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceParametersMap($value)
    {
        $this->data['ServiceParametersMap'] = $value;
        $this->options['form_params']['ServiceParametersMap'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestParameters($value)
    {
        $this->data['RequestParameters'] = $value;
        $this->options['form_params']['RequestParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultDescriptions($value)
    {
        $this->data['ResultDescriptions'] = $value;
        $this->options['form_params']['ResultDescriptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultSample($value)
    {
        $this->data['ResultSample'] = $value;
        $this->options['form_params']['ResultSample'] = $value;

        return $this;
    }
}

/**
 * @method string getBasePath()
 * @method $this withBasePath($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class CreateApiGroup extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSupportRoute()
 * @method $this withSupportRoute($value)
 * @method string getVariableValue()
 * @method $this withVariableValue($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageRouteModel()
 * @method $this withStageRouteModel($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class CreateApiStageVariable extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAppOwnerUserId()
 * @method $this withAppOwnerUserId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppSecret()
 * @method $this withAppSecret($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getAppCode()
 * @method $this withAppCode($value)
 * @method array getTag()
 */
class CreateApp extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBackendName()
 * @method $this withBackendName($value)
 * @method string getCreateEventBridgeServiceLinkedRole()
 * @method $this withCreateEventBridgeServiceLinkedRole($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBackendType()
 * @method $this withBackendType($value)
 */
class CreateBackend extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getBackendModelData()
 * @method $this withBackendModelData($value)
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBackendType()
 * @method $this withBackendType($value)
 */
class CreateBackendModel extends Rpc
{
}

/**
 * @method string getDatasetType()
 * @method $this withDatasetType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class CreateDataset extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class CreateDatasetItem extends Rpc
{
}

/**
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getInstanceCidr()
 * @method $this withInstanceCidr($value)
 * @method string getHttpsPolicy()
 * @method $this withHttpsPolicy($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getUserVpcId()
 * @method $this withUserVpcId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method array getZoneVSwitchSecurityGroup()
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $zoneVSwitchSecurityGroup
     *
     * @return $this
     */
	public function withZoneVSwitchSecurityGroup(array $zoneVSwitchSecurityGroup)
	{
	    $this->data['ZoneVSwitchSecurityGroup'] = $zoneVSwitchSecurityGroup;
		foreach ($zoneVSwitchSecurityGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['ZoneVSwitchSecurityGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['CidrBlock'])){
				$this->options['query']['ZoneVSwitchSecurityGroup.' . ($depth1 + 1) . '.CidrBlock'] = $depth1Value['CidrBlock'];
			}
			if(isset($depth1Value['SecurityGroupId'])){
				$this->options['query']['ZoneVSwitchSecurityGroup.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['ZoneVSwitchSecurityGroup.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeleteInternetDomain()
 * @method $this withDeleteInternetDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateIntranetDomain extends Rpc
{
}

/**
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method array getIpControlPolicys()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlType()
 * @method $this withIpControlType($value)
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
			if(isset($depth1Value['AppId'])){
				$this->options['query']['IpControlPolicys.' . ($depth1 + 1) . '.AppId'] = $depth1Value['AppId'];
			}
			if(isset($depth1Value['CidrIp'])){
				$this->options['query']['IpControlPolicys.' . ($depth1 + 1) . '.CidrIp'] = $depth1Value['CidrIp'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateLogConfig extends Rpc
{
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateModel extends Rpc
{
}

/**
 * @method string getAuth()
 * @method $this withAuth($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRawMonitorGroupId()
 * @method $this withRawMonitorGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateMonitorGroup extends Rpc
{
}

/**
 * @method string getPluginName()
 * @method $this withPluginName($value)
 * @method string getPluginData()
 * @method $this withPluginData($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPluginType()
 * @method $this withPluginType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class CreatePlugin extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getSignatureSecret()
 * @method $this withSignatureSecret($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureKey()
 * @method $this withSignatureKey($value)
 */
class CreateSignature extends Rpc
{
}

/**
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserDefault()
 * @method $this withUserDefault($value)
 * @method string getApiDefault()
 * @method $this withApiDefault($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlUnit()
 * @method $this withTrafficControlUnit($value)
 * @method string getAppDefault()
 * @method $this withAppDefault($value)
 */
class CreateTrafficControl extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteAccessControlList extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DeleteApi extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class DeleteApiGroup extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiProductId()
 * @method $this withApiProductId($value)
 */
class DeleteApiProduct extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class DeleteApiStageVariable extends Rpc
{
}

/**
 * @method string getAppOwnerUserId()
 * @method $this withAppOwnerUserId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getTag()
 */
class DeleteApp extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteBackend extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBackendModelId()
 * @method $this withBackendModelId($value)
 */
class DeleteBackendModel extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 */
class DeleteDataset extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getDatasetItemId()
 * @method $this withDatasetItemId($value)
 */
class DeleteDatasetItem extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteDomainCertificate extends Rpc
{
}

/**
 * @method string getHardDelete()
 * @method $this withHardDelete($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForceDelete()
 * @method $this withForceDelete($value)
 * @method array getTag()
 */
class DeleteInstance extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
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
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteLogConfig extends Rpc
{
}

/**
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteModel extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRawMonitorGroupId()
 * @method $this withRawMonitorGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteMonitorGroup extends Rpc
{
}

/**
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class DeletePlugin extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteSignature extends Rpc
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
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DeployApi extends Rpc
{
}

/**
 * @method string getOperationUid()
 * @method $this withOperationUid($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeAbolishApiTask extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeAccessControlListAttribute extends Rpc
{
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeAccessControlLists extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApi extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiDoc extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class DescribeApiGroup extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getEnableTagAuth()
 * @method $this withEnableTagAuth($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDisableAuthForConsole()
 * @method $this withDisableAuthForConsole($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNotClassic()
 * @method $this withNotClassic($value)
 * @method array getTag()
 */
class DescribeApiGroups extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeApiGroupVpcWhitelist extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiHistories extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getHistoryVersion()
 * @method $this withHistoryVersion($value)
 */
class DescribeApiHistory extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiIpControls extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiLatencyData extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiMarketAttributes extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiProductId()
 * @method $this withApiProductId($value)
 */
class DescribeApiProductApis extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApiProductsByApp extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiQpsData extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getUnDeployed()
 * @method $this withUnDeployed($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getApiMethod()
 * @method $this withApiMethod($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiPath()
 * @method $this withApiPath($value)
 * @method string getEnableTagAuth()
 * @method $this withEnableTagAuth($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getCatalogId()
 * @method $this withCatalogId($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApis extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getApiUid()
 * @method $this withApiUid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisByApp extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisByBackend extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisByIpControl extends Rpc
{
}

/**
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisBySignature extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisByTrafficControl extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiSignatures extends Rpc
{
}

/**
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getApiUid()
 * @method $this withApiUid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApisWithStageNameIntegratedByApp extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DescribeApiTrafficControls extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeApiTrafficData extends Rpc
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
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getExcludeApiId()
 * @method $this withExcludeApiId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getEnableTagAuth()
 * @method $this withEnableTagAuth($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getExcludeApiProductId()
 * @method $this withExcludeApiProductId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAppCode()
 * @method $this withAppCode($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class DescribeAppAttributes extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAppOwner()
 * @method $this withAppOwner($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeApps extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiProductId()
 * @method $this withApiProductId($value)
 */
class DescribeAppsByApiProduct extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getTag()
 */
class DescribeAppSecurity extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeAuthorizedApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppOwnerId()
 * @method $this withAppOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeAuthorizedApps extends Rpc
{
}

/**
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeBackendInfo extends Rpc
{
}

/**
 * @method string getBackendName()
 * @method $this withBackendName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackendType()
 * @method $this withBackendType($value)
 */
class DescribeBackendList extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 */
class DescribeDatasetInfo extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getDatasetItemId()
 * @method $this withDatasetItemId($value)
 */
class DescribeDatasetItemInfo extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getDatasetItemIds()
 * @method $this withDatasetItemIds($value)
 */
class DescribeDatasetItemList extends Rpc
{
}

/**
 * @method string getDatasetIds()
 * @method $this withDatasetIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDatasetList extends Rpc
{
}

/**
 * @method string getOperationUid()
 * @method $this withOperationUid($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDeployApiTask extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeDeployedApi extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getApiMethod()
 * @method $this withApiMethod($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiPath()
 * @method $this withApiPath($value)
 * @method string getEnableTagAuth()
 * @method $this withEnableTagAuth($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeDeployedApis extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDomain extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGroupLatency extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGroupQps extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGroupTraffic extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeHistoryApis extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 */
class DescribeImportOASTask extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSbcName()
 * @method $this withSbcName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceDropConnections extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSbcName()
 * @method $this withSbcName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceDropPacket extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceHttpCode extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceLatency extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSbcName()
 * @method $this withSbcName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceNewConnections extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSbcName()
 * @method $this withSbcName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstancePackets extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceQps extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnableTagAuthorization()
 * @method $this withEnableTagAuthorization($value)
 * @method array getTag()
 */
class DescribeInstances extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSbcName()
 * @method $this withSbcName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceSlbConnect extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeInstanceTraffic extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getPolicyItemId()
 * @method $this withPolicyItemId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeIpControlPolicyItems extends Rpc
{
}

/**
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlType()
 * @method $this withIpControlType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeIpControls extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeMarketRemainsQuota extends Rpc
{
}

/**
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeModels extends Rpc
{
}

/**
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribePluginApis extends Rpc
{
}

/**
 * @method string getPluginName()
 * @method $this withPluginName($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDisableAuthForConsole()
 * @method $this withDisableAuthForConsole($value)
 * @method string getPluginType()
 * @method $this withPluginType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 */
class DescribePlugins extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribePluginsByApi extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribePluginSchemas extends Rpc
{
}

/**
 * @method string getPluginName()
 * @method $this withPluginName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribePluginTemplates extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribePurchasedApiGroup extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribePurchasedApiGroups extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribePurchasedApis extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeSignatures extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeSignaturesByApi extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeSummaryData extends Rpc
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
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeTrafficControls extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class DescribeTrafficControlsByApi extends Rpc
{
}

/**
 * @method string getOperationUid()
 * @method $this withOperationUid($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUpdateBackendTask extends Rpc
{
}

/**
 * @method string getOperationUid()
 * @method $this withOperationUid($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUpdateVpcInfoTask extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAccurateQuery()
 * @method $this withAccurateQuery($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVpcAccessId()
 * @method $this withVpcAccessId($value)
 */
class DescribeVpcAccesses extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method array getApis()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiProductId()
 * @method $this withApiProductId($value)
 */
class DetachApiProduct extends Rpc
{

    /**
     * @param array $apis
     *
     * @return $this
     */
	public function withApis(array $apis)
	{
	    $this->data['Apis'] = $apis;
		foreach ($apis as $depth1 => $depth1Value) {
			if(isset($depth1Value['StageName'])){
				$this->options['query']['Apis.' . ($depth1 + 1) . '.StageName'] = $depth1Value['StageName'];
			}
			if(isset($depth1Value['ApiId'])){
				$this->options['query']['Apis.' . ($depth1 + 1) . '.ApiId'] = $depth1Value['ApiId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class DetachPlugin extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DisableInstanceAccessControl extends Rpc
{
}

/**
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getData()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGlobalCondition()
 * @method $this withGlobalCondition($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 */
class DryRunSwagger extends Rpc
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
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class EnableInstanceAccessControl extends Rpc
{
}

/**
 * @method string getData()
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getIgnoreWarning()
 * @method $this withIgnoreWarning($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRequestMode()
 * @method $this withRequestMode($value)
 * @method string getBackendName()
 * @method $this withBackendName($value)
 * @method string getSkipDryRun()
 * @method $this withSkipDryRun($value)
 * @method string getOASVersion()
 * @method $this withOASVersion($value)
 */
class ImportOAS extends Rpc
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
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getData()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGlobalCondition()
 * @method $this withGlobalCondition($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
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
 * @method string getBackendId()
 * @method $this withBackendId($value)
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
 * @method string getResourceOwnerToken()
 * @method $this withResourceOwnerToken($value)
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
 * @method string getBackendEnable()
 * @method $this withBackendEnable($value)
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
 * @method string getContentTypeCategory()
 * @method $this withContentTypeCategory($value)
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getErrorCodeSamples()
 * @method $this withErrorCodeSamples($value)
 * @method string getAppCodeAuthType()
 * @method $this withAppCodeAuthType($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getHttpConfig()
 * @method $this withHttpConfig($value)
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getFailResultSample()
 * @method $this withFailResultSample($value)
 * @method string getContentTypeValue()
 * @method $this withContentTypeValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVisibility()
 * @method $this withVisibility($value)
 * @method string getRequestProtocol()
 * @method $this withRequestProtocol($value)
 * @method string getRequestMode()
 * @method $this withRequestMode($value)
 * @method string getBackendName()
 * @method $this withBackendName($value)
 * @method string getRequestPath()
 * @method $this withRequestPath($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getMockConfig()
 * @method $this withMockConfig($value)
 * @method string getResultSample()
 * @method $this withResultSample($value)
 * @method string getBodyModel()
 * @method $this withBodyModel($value)
 * @method string getVpcConfig()
 * @method $this withVpcConfig($value)
 * @method string getFunctionComputeConfig()
 * @method $this withFunctionComputeConfig($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getUseBackendService()
 * @method $this withUseBackendService($value)
 * @method string getServiceProtocol()
 * @method $this withServiceProtocol($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDisableInternet()
 * @method $this withDisableInternet($value)
 * @method string getPostBodyDescription()
 * @method $this withPostBodyDescription($value)
 * @method string getAllowSignatureMethod()
 * @method $this withAllowSignatureMethod($value)
 * @method string getRequestHttpMethod()
 * @method $this withRequestHttpMethod($value)
 * @method string getServiceParametersMap()
 * @method $this withServiceParametersMap($value)
 * @method string getRequestParameters()
 * @method $this withRequestParameters($value)
 * @method string getBodyFormat()
 * @method $this withBodyFormat($value)
 * @method string getOssConfig()
 * @method $this withOssConfig($value)
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getServiceTimeout()
 * @method $this withServiceTimeout($value)
 * @method string getForceNonceCheck()
 * @method $this withForceNonceCheck($value)
 */
class ModifyApiConfiguration extends Rpc
{
}

/**
 * @method string getDefaultDomain()
 * @method $this withDefaultDomain($value)
 * @method string getBasePath()
 * @method $this withBasePath($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getRpcPattern()
 * @method $this withRpcPattern($value)
 * @method string getUserLogConfig()
 * @method $this withUserLogConfig($value)
 * @method array getTag()
 * @method string getCustomerConfigs()
 * @method $this withCustomerConfigs($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPassthroughHeaders()
 * @method $this withPassthroughHeaders($value)
 * @method string getCompatibleFlags()
 * @method $this withCompatibleFlags($value)
 * @method string getCustomTraceConfig()
 * @method $this withCustomTraceConfig($value)
 * @method string getSupportSSE()
 * @method $this withSupportSSE($value)
 */
class ModifyApiGroup extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 */
class ModifyApiGroupVpcWhitelist extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getTag()
 */
class ModifyApp extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBackendName()
 * @method $this withBackendName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBackendType()
 * @method $this withBackendType($value)
 */
class ModifyBackend extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getBackendModelData()
 * @method $this withBackendModelData($value)
 * @method string getBackendId()
 * @method $this withBackendId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBackendType()
 * @method $this withBackendType($value)
 * @method string getBackendModelId()
 * @method $this withBackendModelId($value)
 */
class ModifyBackendModel extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class ModifyDataset extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getDatasetItemId()
 * @method $this withDatasetItemId($value)
 */
class ModifyDatasetItem extends Rpc
{
}

/**
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getSkipWaitSwitch()
 * @method $this withSkipWaitSwitch($value)
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getModifyAction()
 * @method $this withModifyAction($value)
 */
class ModifyInstanceSpec extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getVpcIntranetEnable()
 * @method $this withVpcIntranetEnable($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ModifyIntranetDomainPolicy extends Rpc
{
}

/**
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ModifyIpControl extends Rpc
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
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ModifyLogConfig extends Rpc
{
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getModelName()
 * @method $this withModelName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNewModelName()
 * @method $this withNewModelName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ModifyModel extends Rpc
{
}

/**
 * @method string getPluginName()
 * @method $this withPluginName($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getPluginData()
 * @method $this withPluginData($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class ModifyPlugin extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getSignatureSecret()
 * @method $this withSignatureSecret($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureKey()
 * @method $this withSignatureKey($value)
 */
class ModifySignature extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserDefault()
 * @method $this withUserDefault($value)
 * @method string getApiDefault()
 * @method $this withApiDefault($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlUnit()
 * @method $this withTrafficControlUnit($value)
 * @method string getAppDefault()
 * @method $this withAppDefault($value)
 */
class ModifyTrafficControl extends Rpc
{
}

/**
 * @method string getRefresh()
 * @method $this withRefresh($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNeedBatchWork()
 * @method $this withNeedBatchWork($value)
 * @method string getVpcTargetHostName()
 * @method $this withVpcTargetHostName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVpcAccessAndUpdateApis extends Rpc
{
}

class OpenApiGatewayService extends Rpc
{
}

/**
 * @method string getRequestLogId()
 * @method $this withRequestLogId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class QueryRequestLogs extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ReactivateDomain extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAclEntrys()
 * @method $this withAclEntrys($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class RemoveAccessControlListEntry extends Rpc
{
}

/**
 * @method string getApiProductIds()
 * @method $this withApiProductIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveApiProductsAuthorities extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveApisAuthorities extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class RemoveAppsAuthorities extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveIpControlApis extends Rpc
{
}

/**
 * @method string getPolicyItemIds()
 * @method $this withPolicyItemIds($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class RemoveIpControlPolicyItem extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveSignatureApis extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveTrafficControlApis extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNeedBatchWork()
 * @method $this withNeedBatchWork($value)
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
 * @method string getNeedBatchWork()
 * @method $this withNeedBatchWork($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVpcAccessId()
 * @method $this withVpcAccessId($value)
 */
class RemoveVpcAccessAndAbolishApis extends Rpc
{
}

/**
 * @method string getNewAppCode()
 * @method $this withNewAppCode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppCode()
 * @method $this withAppCode($value)
 */
class ResetAppCode extends Rpc
{
}

/**
 * @method string getNewAppSecret()
 * @method $this withNewAppSecret($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNewAppKey()
 * @method $this withNewAppKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ResetAppSecret extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class SdkGenerateByApp extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class SdkGenerateByAppForRegion extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SdkGenerateByGroup extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SetAccessControlListAttribute extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiProductIds()
 * @method $this withApiProductIds($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SetApiProductsAuthorities extends Rpc
{
}

/**
 * @method string getAuthVaildTime()
 * @method $this withAuthVaildTime($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetApisAuthorities extends Rpc
{
}

/**
 * @method string getAuthVaildTime()
 * @method $this withAuthVaildTime($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAuthValidTime()
 * @method $this withAuthValidTime($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class SetAppsAuthorities extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getIsHttpRedirectToHttps()
 * @method $this withIsHttpRedirectToHttps($value)
 * @method string getCustomDomainType()
 * @method $this withCustomDomainType($value)
 * @method string getBindStageName()
 * @method $this withBindStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIsForce()
 * @method $this withIsForce($value)
 */
class SetDomain extends Rpc
{
}

/**
 * @method string getCertificatePrivateKey()
 * @method $this withCertificatePrivateKey($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCertificateBody()
 * @method $this withCertificateBody($value)
 * @method string getSslVerifyDepth()
 * @method $this withSslVerifyDepth($value)
 * @method string getCaCertificateBody()
 * @method $this withCaCertificateBody($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 */
class SetDomainCertificate extends Rpc
{
}

/**
 * @method string getWSSEnable()
 * @method $this withWSSEnable($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getActionValue()
 * @method $this withActionValue($value)
 */
class SetDomainWebSocketStatus extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAuthAppCode()
 * @method $this withAuthAppCode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SetGroupAuthAppCode extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetIpControlApis extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetSignatureApis extends Rpc
{
}

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetTrafficControlApis extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcTargetHostName()
 * @method $this withVpcTargetHostName($value)
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getWildcardDomainPatterns()
 * @method $this withWildcardDomainPatterns($value)
 */
class SetWildcardDomainPatterns extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getHistoryVersion()
 * @method $this withHistoryVersion($value)
 */
class SwitchApi extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcAccessId()
 * @method $this withVpcAccessId($value)
 */
class ValidateVpcConnectivity extends Rpc
{
}
