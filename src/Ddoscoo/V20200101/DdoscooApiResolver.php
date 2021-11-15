<?php

namespace AlibabaCloud\Ddoscoo\V20200101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAutoCcBlacklist addAutoCcBlacklist(array $options = [])
 * @method AddAutoCcWhitelist addAutoCcWhitelist(array $options = [])
 * @method AssociateWebCert associateWebCert(array $options = [])
 * @method AttachSceneDefenseObject attachSceneDefenseObject(array $options = [])
 * @method ConfigL7RsPolicy configL7RsPolicy(array $options = [])
 * @method ConfigLayer4Remark configLayer4Remark(array $options = [])
 * @method ConfigLayer4RuleBakMode configLayer4RuleBakMode(array $options = [])
 * @method ConfigLayer4RulePolicy configLayer4RulePolicy(array $options = [])
 * @method ConfigNetworkRegionBlock configNetworkRegionBlock(array $options = [])
 * @method ConfigNetworkRules configNetworkRules(array $options = [])
 * @method ConfigUdpReflect configUdpReflect(array $options = [])
 * @method ConfigWebCCTemplate configWebCCTemplate(array $options = [])
 * @method ConfigWebIpSet configWebIpSet(array $options = [])
 * @method CreateAsyncTask createAsyncTask(array $options = [])
 * @method CreateDomainResource createDomainResource(array $options = [])
 * @method CreateNetworkRules createNetworkRules(array $options = [])
 * @method CreatePort createPort(array $options = [])
 * @method CreateSceneDefensePolicy createSceneDefensePolicy(array $options = [])
 * @method CreateSchedulerRule createSchedulerRule(array $options = [])
 * @method CreateTagResources createTagResources(array $options = [])
 * @method CreateWebCCRule createWebCCRule(array $options = [])
 * @method CreateWebRule createWebRule(array $options = [])
 * @method DeleteAsyncTask deleteAsyncTask(array $options = [])
 * @method DeleteAutoCcBlacklist deleteAutoCcBlacklist(array $options = [])
 * @method DeleteAutoCcWhitelist deleteAutoCcWhitelist(array $options = [])
 * @method DeleteDomainResource deleteDomainResource(array $options = [])
 * @method DeleteNetworkRule deleteNetworkRule(array $options = [])
 * @method DeletePort deletePort(array $options = [])
 * @method DeleteSceneDefensePolicy deleteSceneDefensePolicy(array $options = [])
 * @method DeleteSchedulerRule deleteSchedulerRule(array $options = [])
 * @method DeleteTagResources deleteTagResources(array $options = [])
 * @method DeleteWebCacheCustomRule deleteWebCacheCustomRule(array $options = [])
 * @method DeleteWebCCRule deleteWebCCRule(array $options = [])
 * @method DeleteWebPreciseAccessRule deleteWebPreciseAccessRule(array $options = [])
 * @method DeleteWebRule deleteWebRule(array $options = [])
 * @method DescribeAsyncTasks describeAsyncTasks(array $options = [])
 * @method DescribeAttackAnalysisMaxQps describeAttackAnalysisMaxQps(array $options = [])
 * @method DescribeAutoCcBlacklist describeAutoCcBlacklist(array $options = [])
 * @method DescribeAutoCcListCount describeAutoCcListCount(array $options = [])
 * @method DescribeAutoCcWhitelist describeAutoCcWhitelist(array $options = [])
 * @method DescribeBackSourceCidr describeBackSourceCidr(array $options = [])
 * @method DescribeBlackholeStatus describeBlackholeStatus(array $options = [])
 * @method DescribeBlockStatus describeBlockStatus(array $options = [])
 * @method DescribeCerts describeCerts(array $options = [])
 * @method DescribeCnameReuses describeCnameReuses(array $options = [])
 * @method DescribeDDosAllEventList describeDDosAllEventList(array $options = [])
 * @method DescribeDDosEventArea describeDDosEventArea(array $options = [])
 * @method DescribeDDosEventAttackType describeDDosEventAttackType(array $options = [])
 * @method DescribeDDosEventIsp describeDDosEventIsp(array $options = [])
 * @method DescribeDDosEventMax describeDDosEventMax(array $options = [])
 * @method DescribeDDoSEvents describeDDoSEvents(array $options = [])
 * @method DescribeDDosEventSrcIp describeDDosEventSrcIp(array $options = [])
 * @method DescribeDefenseCountStatistics describeDefenseCountStatistics(array $options = [])
 * @method DescribeDefenseRecords describeDefenseRecords(array $options = [])
 * @method DescribeDomainAttackEvents describeDomainAttackEvents(array $options = [])
 * @method DescribeDomainOverview describeDomainOverview(array $options = [])
 * @method DescribeDomainQPSList describeDomainQPSList(array $options = [])
 * @method DescribeDomainQpsWithCache describeDomainQpsWithCache(array $options = [])
 * @method DescribeDomainResource describeDomainResource(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method DescribeDomainStatusCodeCount describeDomainStatusCodeCount(array $options = [])
 * @method DescribeDomainStatusCodeList describeDomainStatusCodeList(array $options = [])
 * @method DescribeDomainTopAttackList describeDomainTopAttackList(array $options = [])
 * @method DescribeDomainViewSourceCountries describeDomainViewSourceCountries(array $options = [])
 * @method DescribeDomainViewSourceProvinces describeDomainViewSourceProvinces(array $options = [])
 * @method DescribeDomainViewTopCostTime describeDomainViewTopCostTime(array $options = [])
 * @method DescribeDomainViewTopUrl describeDomainViewTopUrl(array $options = [])
 * @method DescribeElasticBandwidthSpec describeElasticBandwidthSpec(array $options = [])
 * @method DescribeHealthCheckList describeHealthCheckList(array $options = [])
 * @method DescribeHealthCheckStatus describeHealthCheckStatus(array $options = [])
 * @method DescribeInstanceDetails describeInstanceDetails(array $options = [])
 * @method DescribeInstanceIds describeInstanceIds(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSpecs describeInstanceSpecs(array $options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics(array $options = [])
 * @method DescribeInstanceStatus describeInstanceStatus(array $options = [])
 * @method DescribeL7RsPolicy describeL7RsPolicy(array $options = [])
 * @method DescribeLayer4RulePolicy describeLayer4RulePolicy(array $options = [])
 * @method DescribeLogStoreExistStatus describeLogStoreExistStatus(array $options = [])
 * @method DescribeNetworkRegionBlock describeNetworkRegionBlock(array $options = [])
 * @method DescribeNetworkRuleAttributes describeNetworkRuleAttributes(array $options = [])
 * @method DescribeNetworkRules describeNetworkRules(array $options = [])
 * @method DescribeOpEntities describeOpEntities(array $options = [])
 * @method DescribePort describePort(array $options = [])
 * @method DescribePortAttackMaxFlow describePortAttackMaxFlow(array $options = [])
 * @method DescribePortAutoCcStatus describePortAutoCcStatus(array $options = [])
 * @method DescribePortConnsCount describePortConnsCount(array $options = [])
 * @method DescribePortConnsList describePortConnsList(array $options = [])
 * @method DescribePortFlowList describePortFlowList(array $options = [])
 * @method DescribePortMaxConns describePortMaxConns(array $options = [])
 * @method DescribePortViewSourceCountries describePortViewSourceCountries(array $options = [])
 * @method DescribePortViewSourceIsps describePortViewSourceIsps(array $options = [])
 * @method DescribePortViewSourceProvinces describePortViewSourceProvinces(array $options = [])
 * @method DescribeSceneDefenseObjects describeSceneDefenseObjects(array $options = [])
 * @method DescribeSceneDefensePolicies describeSceneDefensePolicies(array $options = [])
 * @method DescribeSchedulerRules describeSchedulerRules(array $options = [])
 * @method DescribeSlsAuthStatus describeSlsAuthStatus(array $options = [])
 * @method DescribeSlsLogstoreInfo describeSlsLogstoreInfo(array $options = [])
 * @method DescribeSlsOpenStatus describeSlsOpenStatus(array $options = [])
 * @method DescribeStsGrantStatus describeStsGrantStatus(array $options = [])
 * @method DescribeSystemLog describeSystemLog(array $options = [])
 * @method DescribeTagKeys describeTagKeys(array $options = [])
 * @method DescribeTagResources describeTagResources(array $options = [])
 * @method DescribeUdpReflect describeUdpReflect(array $options = [])
 * @method DescribeUnBlackholeCount describeUnBlackholeCount(array $options = [])
 * @method DescribeUnBlockCount describeUnBlockCount(array $options = [])
 * @method DescribeWebAccessLogDispatchStatus describeWebAccessLogDispatchStatus(array $options = [])
 * @method DescribeWebAccessLogEmptyCount describeWebAccessLogEmptyCount(array $options = [])
 * @method DescribeWebAccessLogStatus describeWebAccessLogStatus(array $options = [])
 * @method DescribeWebAccessMode describeWebAccessMode(array $options = [])
 * @method DescribeWebAreaBlockConfigs describeWebAreaBlockConfigs(array $options = [])
 * @method DescribeWebCacheConfigs describeWebCacheConfigs(array $options = [])
 * @method DescribeWebCcProtectSwitch describeWebCcProtectSwitch(array $options = [])
 * @method DescribeWebCCRules describeWebCCRules(array $options = [])
 * @method DescribeWebCustomPorts describeWebCustomPorts(array $options = [])
 * @method DescribeWebInstanceRelations describeWebInstanceRelations(array $options = [])
 * @method DescribeWebPreciseAccessRule describeWebPreciseAccessRule(array $options = [])
 * @method DescribeWebRules describeWebRules(array $options = [])
 * @method DetachSceneDefenseObject detachSceneDefenseObject(array $options = [])
 * @method DisableSceneDefensePolicy disableSceneDefensePolicy(array $options = [])
 * @method DisableWebAccessLogConfig disableWebAccessLogConfig(array $options = [])
 * @method DisableWebCC disableWebCC(array $options = [])
 * @method DisableWebCCRule disableWebCCRule(array $options = [])
 * @method EmptyAutoCcBlacklist emptyAutoCcBlacklist(array $options = [])
 * @method EmptyAutoCcWhitelist emptyAutoCcWhitelist(array $options = [])
 * @method EmptySlsLogstore emptySlsLogstore(array $options = [])
 * @method EnableSceneDefensePolicy enableSceneDefensePolicy(array $options = [])
 * @method EnableWebAccessLogConfig enableWebAccessLogConfig(array $options = [])
 * @method EnableWebCC enableWebCC(array $options = [])
 * @method EnableWebCCRule enableWebCCRule(array $options = [])
 * @method ModifyBlackholeStatus modifyBlackholeStatus(array $options = [])
 * @method ModifyBlockStatus modifyBlockStatus(array $options = [])
 * @method ModifyCnameReuse modifyCnameReuse(array $options = [])
 * @method ModifyDomainResource modifyDomainResource(array $options = [])
 * @method ModifyElasticBandWidth modifyElasticBandWidth(array $options = [])
 * @method ModifyFullLogTtl modifyFullLogTtl(array $options = [])
 * @method ModifyHealthCheckConfig modifyHealthCheckConfig(array $options = [])
 * @method ModifyHttp2Enable modifyHttp2Enable(array $options = [])
 * @method ModifyInstanceRemark modifyInstanceRemark(array $options = [])
 * @method ModifyNetworkRuleAttribute modifyNetworkRuleAttribute(array $options = [])
 * @method ModifyPort modifyPort(array $options = [])
 * @method ModifyPortAutoCcStatus modifyPortAutoCcStatus(array $options = [])
 * @method ModifySceneDefensePolicy modifySceneDefensePolicy(array $options = [])
 * @method ModifySchedulerRule modifySchedulerRule(array $options = [])
 * @method ModifyTlsConfig modifyTlsConfig(array $options = [])
 * @method ModifyWebAccessMode modifyWebAccessMode(array $options = [])
 * @method ModifyWebAIProtectMode modifyWebAIProtectMode(array $options = [])
 * @method ModifyWebAIProtectSwitch modifyWebAIProtectSwitch(array $options = [])
 * @method ModifyWebAreaBlock modifyWebAreaBlock(array $options = [])
 * @method ModifyWebAreaBlockSwitch modifyWebAreaBlockSwitch(array $options = [])
 * @method ModifyWebCacheCustomRule modifyWebCacheCustomRule(array $options = [])
 * @method ModifyWebCacheMode modifyWebCacheMode(array $options = [])
 * @method ModifyWebCacheSwitch modifyWebCacheSwitch(array $options = [])
 * @method ModifyWebCCRule modifyWebCCRule(array $options = [])
 * @method ModifyWebIpSetSwitch modifyWebIpSetSwitch(array $options = [])
 * @method ModifyWebPreciseAccessRule modifyWebPreciseAccessRule(array $options = [])
 * @method ModifyWebPreciseAccessSwitch modifyWebPreciseAccessSwitch(array $options = [])
 * @method ModifyWebRule modifyWebRule(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method SwitchSchedulerRule switchSchedulerRule(array $options = [])
 */
class DdoscooApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ddoscoo';

    /** @var string */
    public $version = '2020-01-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getBlacklist()
 * @method $this withBlacklist($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AddAutoCcBlacklist extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AddAutoCcWhitelist extends Rpc
{
}

/**
 * @method string getCert()
 * @method $this withCert($value)
 * @method string getCertId()
 * @method $this withCertId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class AssociateWebCert extends Rpc
{
}

/**
 * @method string getObjects()
 * @method $this withObjects($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class AttachSceneDefenseObject extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class ConfigL7RsPolicy extends Rpc
{
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ConfigLayer4Remark extends Rpc
{
}

/**
 * @method string getBakMode()
 * @method $this withBakMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getListeners()
 * @method $this withListeners($value)
 */
class ConfigLayer4RuleBakMode extends Rpc
{
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ConfigLayer4RulePolicy extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ConfigNetworkRegionBlock extends Rpc
{
}

/**
 * @method string getNetworkRules()
 * @method $this withNetworkRules($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ConfigNetworkRules extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ConfigUdpReflect extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ConfigWebCCTemplate extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getBlackList()
 * @method array getWhiteList()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ConfigWebIpSet extends Rpc
{

    /**
     * @param array $blackList
     *
     * @return $this
     */
	public function withBlackList(array $blackList)
	{
	    $this->data['BlackList'] = $blackList;
		foreach ($blackList as $i => $iValue) {
			$this->options['query']['BlackList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $whiteList
     *
     * @return $this
     */
	public function withWhiteList(array $whiteList)
	{
	    $this->data['WhiteList'] = $whiteList;
		foreach ($whiteList as $i => $iValue) {
			$this->options['query']['WhiteList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskParams()
 * @method $this withTaskParams($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAsyncTask extends Rpc
{
}

/**
 * @method string getHttpsExt()
 * @method $this withHttpsExt($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method array getRealServers()
 * @method array getInstanceIds()
 * @method array getProxyTypes()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateDomainResource extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $proxyTypes
     *
     * @return $this
     */
	public function withProxyTypes(array $proxyTypes)
	{
	    $this->data['ProxyTypes'] = $proxyTypes;
		foreach ($proxyTypes as $depth1 => $depth1Value) {
			foreach ($depth1Value['ProxyPorts'] as $i => $iValue) {
				$this->options['query']['ProxyTypes.' . ($depth1 + 1) . '.ProxyPorts.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ProxyType'])){
				$this->options['query']['ProxyTypes.' . ($depth1 + 1) . '.ProxyType'] = $depth1Value['ProxyType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNetworkRules()
 * @method $this withNetworkRules($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateNetworkRules extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBackendPort()
 * @method $this withBackendPort($value)
 * @method string getFrontendProtocol()
 * @method $this withFrontendProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRealServers()
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 */
class CreatePort extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSceneDefensePolicy extends Rpc
{
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 */
class CreateSchedulerRule extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTags()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getResourceIds()
 */
class CreateTagResources extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAct()
 * @method $this withAct($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getUri()
 * @method $this withUri($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class CreateWebCCRule extends Rpc
{
}

/**
 * @method string getHttpsExt()
 * @method $this withHttpsExt($value)
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method string getDefenseId()
 * @method $this withDefenseId($value)
 * @method array getInstanceIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateWebRule extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteAsyncTask extends Rpc
{
}

/**
 * @method string getBlacklist()
 * @method $this withBlacklist($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteAutoCcBlacklist extends Rpc
{
}

/**
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteAutoCcWhitelist extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteDomainResource extends Rpc
{
}

/**
 * @method string getNetworkRule()
 * @method $this withNetworkRule($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteNetworkRule extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBackendPort()
 * @method $this withBackendPort($value)
 * @method string getFrontendProtocol()
 * @method $this withFrontendProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRealServers()
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 */
class DeletePort extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DeleteSceneDefensePolicy extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteSchedulerRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 * @method array getResourceIds()
 */
class DeleteTagResources extends Rpc
{

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

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getRuleNames()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteWebCacheCustomRule extends Rpc
{

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
	public function withRuleNames(array $ruleNames)
	{
	    $this->data['RuleNames'] = $ruleNames;
		foreach ($ruleNames as $i => $iValue) {
			$this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteWebCCRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getRuleNames()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteWebPreciseAccessRule extends Rpc
{

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
	public function withRuleNames(array $ruleNames)
	{
	    $this->data['RuleNames'] = $ruleNames;
		foreach ($ruleNames as $i => $iValue) {
			$this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteWebRule extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAsyncTasks extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAttackAnalysisMaxQps extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class DescribeAutoCcBlacklist extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class DescribeAutoCcListCount extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class DescribeAutoCcWhitelist extends Rpc
{
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeBackSourceCidr extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribeBlackholeStatus extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeBlockStatus extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeCerts extends Rpc
{
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCnameReuses extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeDDosAllEventList extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeDDosEventArea extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeDDosEventAttackType extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeDDosEventIsp extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDDosEventMax extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method array getInstanceIds()
 */
class DescribeDDoSEvents extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getRange()
 * @method $this withRange($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeDDosEventSrcIp extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDefenseCountStatistics extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDefenseRecords extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainAttackEvents extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainOverview extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainQPSList extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainQpsWithCache extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getInstanceIds()
 * @method string getQueryDomainPattern()
 * @method $this withQueryDomainPattern($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainResource extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomains extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainStatusCodeCount extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainStatusCodeList extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDomainTopAttackList extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainViewSourceCountries extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainViewSourceProvinces extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTop()
 * @method $this withTop($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainViewTopCostTime extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTop()
 * @method $this withTop($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainViewTopUrl extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeElasticBandwidthSpec extends Rpc
{
}

/**
 * @method string getNetworkRules()
 * @method $this withNetworkRules($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHealthCheckList extends Rpc
{
}

/**
 * @method string getNetworkRules()
 * @method $this withNetworkRules($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHealthCheckStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribeInstanceDetails extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEdition()
 * @method $this withEdition($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribeInstanceIds extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEdition()
 * @method $this withEdition($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getExpireStartTime()
 * @method $this withExpireStartTime($value)
 * @method string getExpireEndTime()
 * @method $this withExpireEndTime($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method array getInstanceIds()
 * @method array getStatus()
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

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['query']['Status.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribeInstanceSpecs extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribeInstanceStatistics extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeInstanceStatus extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getRealServers()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeL7RsPolicy extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeLayer4RulePolicy extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLogStoreExistStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeNetworkRegionBlock extends Rpc
{
}

/**
 * @method string getNetworkRules()
 * @method $this withNetworkRules($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeNetworkRuleAttributes extends Rpc
{
}

/**
 * @method string getIsOffset()
 * @method $this withIsOffset($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 * @method string getForwardProtocol()
 * @method $this withForwardProtocol($value)
 */
class DescribeNetworkRules extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEntityObject()
 * @method $this withEntityObject($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class DescribeOpEntities extends Rpc
{
}

/**
 * @method string getIsOffset()
 * @method $this withIsOffset($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrontendProtocol()
 * @method $this withFrontendProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 */
class DescribePort extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortAttackMaxFlow extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortAutoCcStatus extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method array getInstanceIds()
 * @method string getPort()
 * @method $this withPort($value)
 */
class DescribePortConnsCount extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method array getInstanceIds()
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribePortConnsList extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method array getInstanceIds()
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribePortFlowList extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortMaxConns extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortViewSourceCountries extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortViewSourceIsps extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 */
class DescribePortViewSourceProvinces extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DescribeSceneDefenseObjects extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSceneDefensePolicies extends Rpc
{
}

/**
 * @method string getIsOffset()
 * @method $this withIsOffset($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 */
class DescribeSchedulerRules extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSlsAuthStatus extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSlsLogstoreInfo extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSlsOpenStatus extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeStsGrantStatus extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEntityObject()
 * @method $this withEntityObject($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class DescribeSystemLog extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeTagKeys extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTags()
 * @method array getResourceIds()
 */
class DescribeTagResources extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUdpReflect extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUnBlackholeCount extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUnBlockCount extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebAccessLogDispatchStatus extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebAccessLogEmptyCount extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebAccessLogStatus extends Rpc
{
}

/**
 * @method array getDomains()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebAccessMode extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebAreaBlockConfigs extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebCacheConfigs extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebCcProtectSwitch extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIsOffset()
 * @method $this withIsOffset($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeWebCCRules extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebCustomPorts extends Rpc
{
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebInstanceRelations extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomains()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeWebPreciseAccessRule extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getInstanceIds()
 * @method string getQueryDomainPattern()
 * @method $this withQueryDomainPattern($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeWebRules extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getObjects()
 * @method $this withObjects($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class DetachSceneDefenseObject extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DisableSceneDefensePolicy extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DisableWebAccessLogConfig extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DisableWebCC extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DisableWebCCRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class EmptyAutoCcBlacklist extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class EmptyAutoCcWhitelist extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class EmptySlsLogstore extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class EnableSceneDefensePolicy extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class EnableWebAccessLogConfig extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class EnableWebCC extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class EnableWebCCRule extends Rpc
{
}

/**
 * @method string getBlackholeStatus()
 * @method $this withBlackholeStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ModifyBlackholeStatus extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getLines()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyBlockStatus extends Rpc
{

    /**
     * @param array $lines
     *
     * @return $this
     */
	public function withLines(array $lines)
	{
	    $this->data['Lines'] = $lines;
		foreach ($lines as $i => $iValue) {
			$this->options['query']['Lines.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCname()
 * @method $this withCname($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyCnameReuse extends Rpc
{
}

/**
 * @method string getHttpsExt()
 * @method $this withHttpsExt($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method array getRealServers()
 * @method array getProxyTypes()
 * @method array getInstanceIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyDomainResource extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $proxyTypes
     *
     * @return $this
     */
	public function withProxyTypes(array $proxyTypes)
	{
	    $this->data['ProxyTypes'] = $proxyTypes;
		foreach ($proxyTypes as $depth1 => $depth1Value) {
			foreach ($depth1Value['ProxyPorts'] as $i => $iValue) {
				$this->options['query']['ProxyTypes.' . ($depth1 + 1) . '.ProxyPorts.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ProxyType'])){
				$this->options['query']['ProxyTypes.' . ($depth1 + 1) . '.ProxyType'] = $depth1Value['ProxyType'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getElasticBandwidth()
 * @method $this withElasticBandwidth($value)
 */
class ModifyElasticBandWidth extends Rpc
{
}

/**
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyFullLogTtl extends Rpc
{
}

/**
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 * @method string getForwardProtocol()
 * @method $this withForwardProtocol($value)
 */
class ModifyHealthCheckConfig extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyHttp2Enable extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstanceRemark extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 * @method string getForwardProtocol()
 * @method $this withForwardProtocol($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyNetworkRuleAttribute extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBackendPort()
 * @method $this withBackendPort($value)
 * @method string getFrontendProtocol()
 * @method $this withFrontendProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRealServers()
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 */
class ModifyPort extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSwitch()
 * @method $this withSwitch($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyPortAutoCcStatus extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySceneDefensePolicy extends Rpc
{
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 */
class ModifySchedulerRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyTlsConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getAccessMode()
 * @method $this withAccessMode($value)
 */
class ModifyWebAccessMode extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyWebAIProtectMode extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyWebAIProtectSwitch extends Rpc
{
}

/**
 * @method array getRegions()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebAreaBlock extends Rpc
{

    /**
     * @param array $regions
     *
     * @return $this
     */
	public function withRegions(array $regions)
	{
	    $this->data['Regions'] = $regions;
		foreach ($regions as $i => $iValue) {
			$this->options['query']['Regions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyWebAreaBlockSwitch extends Rpc
{
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebCacheCustomRule extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebCacheMode extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebCacheSwitch extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAct()
 * @method $this withAct($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getUri()
 * @method $this withUri($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ModifyWebCCRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyWebIpSetSwitch extends Rpc
{
}

/**
 * @method string getExpires()
 * @method $this withExpires($value)
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebPreciseAccessRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyWebPreciseAccessSwitch extends Rpc
{
}

/**
 * @method string getHttpsExt()
 * @method $this withHttpsExt($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method array getRealServers()
 * @method string getProxyTypes()
 * @method $this withProxyTypes($value)
 * @method array getInstanceIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ModifyWebRule extends Rpc
{

    /**
     * @param array $realServers
     *
     * @return $this
     */
	public function withRealServers(array $realServers)
	{
	    $this->data['RealServers'] = $realServers;
		foreach ($realServers as $i => $iValue) {
			$this->options['query']['RealServers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ReleaseInstance extends Rpc
{
}

/**
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getSwitchData()
 * @method $this withSwitchData($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class SwitchSchedulerRule extends Rpc
{
}
