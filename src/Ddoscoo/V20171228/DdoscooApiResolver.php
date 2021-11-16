<?php

namespace AlibabaCloud\Ddoscoo\V20171228;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddLayer7CCRule addLayer7CCRule(array $options = [])
 * @method CloseDomainSlsConfig closeDomainSlsConfig(array $options = [])
 * @method ConfigHealthCheck configHealthCheck(array $options = [])
 * @method ConfigLayer4Rule configLayer4Rule(array $options = [])
 * @method ConfigLayer4RuleAttribute configLayer4RuleAttribute(array $options = [])
 * @method ConfigLayer7BlackWhiteList configLayer7BlackWhiteList(array $options = [])
 * @method ConfigLayer7CCRule configLayer7CCRule(array $options = [])
 * @method ConfigLayer7CCTemplate configLayer7CCTemplate(array $options = [])
 * @method ConfigLayer7Cert configLayer7Cert(array $options = [])
 * @method ConfigLayer7Rule configLayer7Rule(array $options = [])
 * @method CreateAsyncTask createAsyncTask(array $options = [])
 * @method CreateLayer4Rule createLayer4Rule(array $options = [])
 * @method CreateLayer7Rule createLayer7Rule(array $options = [])
 * @method DeleteAsyncTask deleteAsyncTask(array $options = [])
 * @method DeleteLayer4Rule deleteLayer4Rule(array $options = [])
 * @method DeleteLayer7CCRule deleteLayer7CCRule(array $options = [])
 * @method DeleteLayer7Rule deleteLayer7Rule(array $options = [])
 * @method DescribeBackSourceCidr describeBackSourceCidr(array $options = [])
 * @method DescribeBatchSlsDispatchStatus describeBatchSlsDispatchStatus(array $options = [])
 * @method DescribeDDoSEvents describeDDoSEvents(array $options = [])
 * @method DescribeDDoSTraffic describeDDoSTraffic(array $options = [])
 * @method DescribeDefenseCountStatistics describeDefenseCountStatistics(array $options = [])
 * @method DescribeDomainAccessMode describeDomainAccessMode(array $options = [])
 * @method DescribeDomainAttackEvents describeDomainAttackEvents(array $options = [])
 * @method DescribeDomainQps describeDomainQps(array $options = [])
 * @method DescribeDomainQpsWithCache describeDomainQpsWithCache(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method DescribeDomainSlsStatus describeDomainSlsStatus(array $options = [])
 * @method DescribeElasticBandwidthSpec describeElasticBandwidthSpec(array $options = [])
 * @method DescribeHealthCheckList describeHealthCheckList(array $options = [])
 * @method DescribeHealthCheckStatusList describeHealthCheckStatusList(array $options = [])
 * @method DescribeInstanceDetails describeInstanceDetails(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSpecs describeInstanceSpecs(array $options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics(array $options = [])
 * @method DescribeIpTraffic describeIpTraffic(array $options = [])
 * @method DescribeLayer4RuleAttributes describeLayer4RuleAttributes(array $options = [])
 * @method DescribeLayer4Rules describeLayer4Rules(array $options = [])
 * @method DescribeLayer7CCRules describeLayer7CCRules(array $options = [])
 * @method DescribeLogStoreExistStatus describeLogStoreExistStatus(array $options = [])
 * @method DescribeOpEntities describeOpEntities(array $options = [])
 * @method DescribeSimpleDomains describeSimpleDomains(array $options = [])
 * @method DescribeSlsAuthStatus describeSlsAuthStatus(array $options = [])
 * @method DescribeSlsEmptyCount describeSlsEmptyCount(array $options = [])
 * @method DescribeSlsLogstoreInfo describeSlsLogstoreInfo(array $options = [])
 * @method DescribeSlsOpenStatus describeSlsOpenStatus(array $options = [])
 * @method DescribleCertList describleCertList(array $options = [])
 * @method DescribleLayer7InstanceRelations describleLayer7InstanceRelations(array $options = [])
 * @method DisableLayer7CC disableLayer7CC(array $options = [])
 * @method DisableLayer7CCRule disableLayer7CCRule(array $options = [])
 * @method EmptySlsLogstore emptySlsLogstore(array $options = [])
 * @method EnableLayer7CC enableLayer7CC(array $options = [])
 * @method EnableLayer7CCRule enableLayer7CCRule(array $options = [])
 * @method ListAsyncTask listAsyncTask(array $options = [])
 * @method ListLayer7CustomPorts listLayer7CustomPorts(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListValueAdded listValueAdded(array $options = [])
 * @method ModifyElasticBandWidth modifyElasticBandWidth(array $options = [])
 * @method ModifyFullLogTtl modifyFullLogTtl(array $options = [])
 * @method ModifyInstanceRemark modifyInstanceRemark(array $options = [])
 * @method OpenDomainSlsConfig openDomainSlsConfig(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ReleaseValueAdded releaseValueAdded(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class DdoscooApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ddoscoo';

    /** @var string */
    public $version = '2017-12-28';

    /** @var string */
    public $method = 'POST';
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
class AddLayer7CCRule extends Rpc
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
class CloseDomainSlsConfig extends Rpc
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
class ConfigHealthCheck extends Rpc
{
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ConfigLayer4Rule extends Rpc
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
class ConfigLayer4RuleAttribute extends Rpc
{
}

/**
 * @method array getBlackList()
 * @method array getWhiteList()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ConfigLayer7BlackWhiteList extends Rpc
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
class ConfigLayer7CCRule extends Rpc
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
class ConfigLayer7CCTemplate extends Rpc
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
class ConfigLayer7Cert extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProxyTypeList()
 * @method $this withProxyTypeList($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method array getRealServers()
 * @method array getProxyTypes()
 * @method array getInstanceIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ConfigLayer7Rule extends Rpc
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
		foreach ($proxyTypes as $i => $iValue) {
			$this->options['query']['ProxyTypes.' . ($i + 1)] = $iValue;
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
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateLayer4Rule extends Rpc
{
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRsType()
 * @method $this withRsType($value)
 * @method array getInstanceIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateLayer7Rule extends Rpc
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
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteLayer4Rule extends Rpc
{
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
class DeleteLayer7CCRule extends Rpc
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
class DeleteLayer7Rule extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeBatchSlsDispatchStatus extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEip()
 * @method $this withEip($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeDDoSEvents extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEip()
 * @method $this withEip($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDDoSTraffic extends Rpc
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
 * @method array getDomainList()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDomainAccessMode extends Rpc
{

    /**
     * @param array $domainList
     *
     * @return $this
     */
	public function withDomainList(array $domainList)
	{
	    $this->data['DomainList'] = $domainList;
		foreach ($domainList as $i => $iValue) {
			$this->options['query']['DomainList.' . ($i + 1)] = $iValue;
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainAttackEvents extends Rpc
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
class DescribeDomainQps extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method array getInstanceIds()
 * @method string getQueryDomainPattern()
 * @method $this withQueryDomainPattern($value)
 * @method string getDomain()
 * @method $this withDomain($value)
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainSlsStatus extends Rpc
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
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHealthCheckList extends Rpc
{
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHealthCheckStatusList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceDetails extends Rpc
{
}

/**
 * @method string getEdition()
 * @method $this withEdition($value)
 * @method string getRemark()
 * @method $this withRemark($value)
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceSpecs extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceStatistics extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEip()
 * @method $this withEip($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getQueryProtocol()
 * @method $this withQueryProtocol($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeIpTraffic extends Rpc
{
}

/**
 * @method string getListeners()
 * @method $this withListeners($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeLayer4RuleAttributes extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFrontendPort()
 * @method $this withFrontendPort($value)
 * @method string getForwardProtocol()
 * @method $this withForwardProtocol($value)
 */
class DescribeLayer4Rules extends Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeLayer7CCRules extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
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
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeOpEntities extends Rpc
{
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
class DescribeSimpleDomains extends Rpc
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
class DescribeSlsEmptyCount extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribleCertList extends Rpc
{
}

/**
 * @method array getDomainList()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribleLayer7InstanceRelations extends Rpc
{

    /**
     * @param array $domainList
     *
     * @return $this
     */
	public function withDomainList(array $domainList)
	{
	    $this->data['DomainList'] = $domainList;
		foreach ($domainList as $i => $iValue) {
			$this->options['query']['DomainList.' . ($i + 1)] = $iValue;
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
class DisableLayer7CC extends Rpc
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
class DisableLayer7CCRule extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class EnableLayer7CC extends Rpc
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
class EnableLayer7CCRule extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListAsyncTask extends Rpc
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
class ListLayer7CustomPorts extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
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
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListValueAdded extends Rpc
{
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
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ModifyInstanceRemark extends Rpc
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
class OpenDomainSlsConfig extends Rpc
{
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ReleaseValueAdded extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
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
