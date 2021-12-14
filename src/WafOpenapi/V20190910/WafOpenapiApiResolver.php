<?php

namespace AlibabaCloud\WafOpenapi\V20190910;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateCertificate createCertificate(array $options = [])
 * @method CreateCertificateByCertificateId createCertificateByCertificateId(array $options = [])
 * @method CreateDomain createDomain(array $options = [])
 * @method CreateProtectionModuleRule createProtectionModuleRule(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteProtectionModuleRule deleteProtectionModuleRule(array $options = [])
 * @method DescribeCertificates describeCertificates(array $options = [])
 * @method DescribeCertMatchStatus describeCertMatchStatus(array $options = [])
 * @method DescribeDomain describeDomain(array $options = [])
 * @method DescribeDomainAdvanceConfigs describeDomainAdvanceConfigs(array $options = [])
 * @method DescribeDomainBasicConfigs describeDomainBasicConfigs(array $options = [])
 * @method DescribeDomainList describeDomainList(array $options = [])
 * @method DescribeDomainNames describeDomainNames(array $options = [])
 * @method DescribeDomainRuleGroup describeDomainRuleGroup(array $options = [])
 * @method DescribeInstanceInfo describeInstanceInfo(array $options = [])
 * @method DescribeInstanceSpecInfo describeInstanceSpecInfo(array $options = [])
 * @method DescribeLogServiceStatus describeLogServiceStatus(array $options = [])
 * @method DescribeProtectionModuleCodeConfig describeProtectionModuleCodeConfig(array $options = [])
 * @method DescribeProtectionModuleRules describeProtectionModuleRules(array $options = [])
 * @method DescribeProtectionModuleStatus describeProtectionModuleStatus(array $options = [])
 * @method DescribeWafSourceIpSegment describeWafSourceIpSegment(array $options = [])
 * @method ModifyDomain modifyDomain(array $options = [])
 * @method ModifyDomainIpv6Status modifyDomainIpv6Status(array $options = [])
 * @method ModifyLogRetrievalStatus modifyLogRetrievalStatus(array $options = [])
 * @method ModifyLogServiceStatus modifyLogServiceStatus(array $options = [])
 * @method ModifyProtectionModuleMode modifyProtectionModuleMode(array $options = [])
 * @method ModifyProtectionModuleRule modifyProtectionModuleRule(array $options = [])
 * @method ModifyProtectionModuleStatus modifyProtectionModuleStatus(array $options = [])
 * @method ModifyProtectionRuleCacheStatus modifyProtectionRuleCacheStatus(array $options = [])
 * @method ModifyProtectionRuleStatus modifyProtectionRuleStatus(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method SetDomainRuleGroup setDomainRuleGroup(array $options = [])
 */
class WafOpenapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'waf-openapi';

    /** @var string */
    public $version = '2019-09-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'waf';
}

/**
 * @method string getCertificate()
 * @method $this withCertificate($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getCertificateName()
 * @method $this withCertificateName($value)
 */
class CreateCertificate extends Rpc
{
}

/**
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateCertificateByCertificateId extends Rpc
{
}

/**
 * @method string getIpFollowStatus()
 * @method $this withIpFollowStatus($value)
 * @method string getSniHost()
 * @method $this withSniHost($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHttpPort()
 * @method $this withHttpPort($value)
 * @method string getHttp2Port()
 * @method $this withHttp2Port($value)
 * @method string getWriteTime()
 * @method $this withWriteTime($value)
 * @method string getSniStatus()
 * @method $this withSniStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAccessHeaderMode()
 * @method $this withAccessHeaderMode($value)
 * @method string getAccessType()
 * @method $this withAccessType($value)
 * @method string getLogHeaders()
 * @method $this withLogHeaders($value)
 * @method string getAccessHeaders()
 * @method $this withAccessHeaders($value)
 * @method string getConnectionTime()
 * @method $this withConnectionTime($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getCloudNativeInstances()
 * @method $this withCloudNativeInstances($value)
 * @method string getHttpsRedirect()
 * @method $this withHttpsRedirect($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIps()
 * @method $this withSourceIps($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIsAccessProduct()
 * @method $this withIsAccessProduct($value)
 * @method string getReadTime()
 * @method $this withReadTime($value)
 * @method string getHttpsPort()
 * @method $this withHttpsPort($value)
 * @method string getLoadBalancing()
 * @method $this withLoadBalancing($value)
 * @method string getHttpToUserIp()
 * @method $this withHttpToUserIp($value)
 */
class CreateDomain extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getRule()
 * @method $this withRule($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateProtectionModuleRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteProtectionModuleRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCertificates extends Rpc
{
}

/**
 * @method string getCertificate()
 * @method $this withCertificate($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCertMatchStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomain extends Rpc
{
}

/**
 * @method string getDomainList()
 * @method $this withDomainList($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainAdvanceConfigs extends Rpc
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
 * @method string getAccessType()
 * @method $this withAccessType($value)
 * @method string getCloudNativeProductId()
 * @method $this withCloudNativeProductId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomainKey()
 * @method $this withDomainKey($value)
 */
class DescribeDomainBasicConfigs extends Rpc
{
}

/**
 * @method array getDomainNames()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getIsSub()
 * @method $this withIsSub($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDomainList extends Rpc
{

    /**
     * @param array $domainNames
     *
     * @return $this
     */
	public function withDomainNames(array $domainNames)
	{
	    $this->data['DomainNames'] = $domainNames;
		foreach ($domainNames as $i => $iValue) {
			$this->options['query']['DomainNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCallSource()
 * @method $this withCallSource($value)
 */
class DescribeDomainNames extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainRuleGroup extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeInstanceInfo extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeInstanceSpecInfo extends Rpc
{
}

/**
 * @method array getDomainNames()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLogServiceStatus extends Rpc
{

    /**
     * @param array $domainNames
     *
     * @return $this
     */
	public function withDomainNames(array $domainNames)
	{
	    $this->data['DomainNames'] = $domainNames;
		foreach ($domainNames as $i => $iValue) {
			$this->options['query']['DomainNames.' . ($i + 1)] = $iValue;
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
 * @method string getCodeValue()
 * @method $this withCodeValue($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCodeType()
 * @method $this withCodeType($value)
 */
class DescribeProtectionModuleCodeConfig extends Rpc
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
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeProtectionModuleRules extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeProtectionModuleStatus extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWafSourceIpSegment extends Rpc
{
}

/**
 * @method string getIpFollowStatus()
 * @method $this withIpFollowStatus($value)
 * @method string getSniHost()
 * @method $this withSniHost($value)
 * @method string getHybridCloudType()
 * @method $this withHybridCloudType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHttpPort()
 * @method $this withHttpPort($value)
 * @method string getHttp2Port()
 * @method $this withHttp2Port($value)
 * @method string getWriteTime()
 * @method $this withWriteTime($value)
 * @method string getSniStatus()
 * @method $this withSniStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAccessHeaderMode()
 * @method $this withAccessHeaderMode($value)
 * @method string getAccessType()
 * @method $this withAccessType($value)
 * @method string getBindingIpv6()
 * @method $this withBindingIpv6($value)
 * @method string getLogHeaders()
 * @method $this withLogHeaders($value)
 * @method string getAccessHeaders()
 * @method $this withAccessHeaders($value)
 * @method string getConnectionTime()
 * @method $this withConnectionTime($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getCloudNativeInstances()
 * @method $this withCloudNativeInstances($value)
 * @method string getHttpsRedirect()
 * @method $this withHttpsRedirect($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIps()
 * @method $this withSourceIps($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIsAccessProduct()
 * @method $this withIsAccessProduct($value)
 * @method string getReadTime()
 * @method $this withReadTime($value)
 * @method string getHttpsPort()
 * @method $this withHttpsPort($value)
 * @method string getLoadBalancing()
 * @method $this withLoadBalancing($value)
 * @method string getHttpToUserIp()
 * @method $this withHttpToUserIp($value)
 */
class ModifyDomain extends Rpc
{
}

/**
 * @method string getWafVersion()
 * @method $this withWafVersion($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyDomainIpv6Status extends Rpc
{
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyLogRetrievalStatus extends Rpc
{
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyLogServiceStatus extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyProtectionModuleMode extends Rpc
{
}

/**
 * @method string getRule()
 * @method $this withRule($value)
 * @method string getLockVersion()
 * @method $this withLockVersion($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ModifyProtectionModuleRule extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getModuleStatus()
 * @method $this withModuleStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyProtectionModuleStatus extends Rpc
{
}

/**
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ModifyProtectionRuleCacheStatus extends Rpc
{
}

/**
 * @method string getLockVersion()
 * @method $this withLockVersion($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDefenseType()
 * @method $this withDefenseType($value)
 * @method string getRuleStatus()
 * @method $this withRuleStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ModifyProtectionRuleStatus extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class MoveResourceGroup extends Rpc
{
}

/**
 * @method string getWafVersion()
 * @method $this withWafVersion($value)
 * @method string getRuleGroupId()
 * @method $this withRuleGroupId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomains()
 * @method $this withDomains($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetDomainRuleGroup extends Rpc
{
}
