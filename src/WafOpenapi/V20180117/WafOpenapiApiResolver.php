<?php

namespace AlibabaCloud\WafOpenapi\V20180117;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAclRule createAclRule(array $options = [])
 * @method CreateCertAndKey createCertAndKey(array $options = [])
 * @method CreateDomainConfig createDomainConfig(array $options = [])
 * @method CreateProtectionModuleRule createProtectionModuleRule(array $options = [])
 * @method DeleteAclRule deleteAclRule(array $options = [])
 * @method DeleteDomainConfig deleteDomainConfig(array $options = [])
 * @method DescribeAclRules describeAclRules(array $options = [])
 * @method DescribeAsyncTaskStatus describeAsyncTaskStatus(array $options = [])
 * @method DescribeDomainConfig describeDomainConfig(array $options = [])
 * @method DescribeDomainConfigStatus describeDomainConfigStatus(array $options = [])
 * @method DescribeDomainNames describeDomainNames(array $options = [])
 * @method DescribePayInfo describePayInfo(array $options = [])
 * @method DescribeProtectionModuleRules describeProtectionModuleRules(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeWafSourceIpSegment describeWafSourceIpSegment(array $options = [])
 * @method ModifyAclRule modifyAclRule(array $options = [])
 * @method ModifyDomainConfig modifyDomainConfig(array $options = [])
 * @method ModifyProtectionRuleCacheStatus modifyProtectionRuleCacheStatus(array $options = [])
 * @method ModifyProtectionRuleStatus modifyProtectionRuleStatus(array $options = [])
 * @method ModifyWafSwitch modifyWafSwitch(array $options = [])
 */
class WafOpenapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'waf-openapi';

    /** @var string */
    public $version = '2018-01-17';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'waf';
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateAclRule extends Rpc
{
}

/**
 * @method string getCert()
 * @method $this withCert($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHttpsCertName()
 * @method $this withHttpsCertName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateCertAndKey extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHttpPort()
 * @method $this withHttpPort($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getProtocols()
 * @method $this withProtocols($value)
 * @method string getRsType()
 * @method $this withRsType($value)
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
 * @method string getHttpsPort()
 * @method $this withHttpsPort($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLoadBalancing()
 * @method $this withLoadBalancing($value)
 * @method string getHttpToUserIp()
 * @method $this withHttpToUserIp($value)
 */
class CreateDomainConfig extends Rpc
{
}

/**
 * @method string getRule()
 * @method $this withRule($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDefense()
 * @method $this withDefense($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateProtectionModuleRule extends Rpc
{

    /** @var string */
    public $scheme = 'http';
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
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DeleteAclRule extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DeleteDomainConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeAclRules extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWafRequestId()
 * @method $this withWafRequestId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeAsyncTaskStatus extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeDomainConfig extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeDomainConfigStatus extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeDomainNames extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribePayInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDefense()
 * @method $this withDefense($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeProtectionModuleRules extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRegions extends Rpc
{

    /** @var string */
    public $scheme = 'http';
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeWafSourceIpSegment extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyAclRule extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHttpPort()
 * @method $this withHttpPort($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getProtocols()
 * @method $this withProtocols($value)
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
 * @method string getHttpsPort()
 * @method $this withHttpsPort($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLoadBalancing()
 * @method $this withLoadBalancing($value)
 * @method string getHttpToUserIp()
 * @method $this withHttpToUserIp($value)
 */
class ModifyDomainConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDefense()
 * @method $this withDefense($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyProtectionRuleCacheStatus extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getLockVersion()
 * @method $this withLockVersion($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDefense()
 * @method $this withDefense($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleStatus()
 * @method $this withRuleStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyProtectionRuleStatus extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getServiceOn()
 * @method $this withServiceOn($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyWafSwitch extends Rpc
{
}
