<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeGtmInstanceSystemCname describeGtmInstanceSystemCname(array $options = [])
 * @method OperateBatchDomain operateBatchDomain(array $options = [])
 * @method DescribeBatchResultDetail describeBatchResultDetail(array $options = [])
 * @method DescribeBatchResultCount describeBatchResultCount(array $options = [])
 * @method AddGtmAccessStrategy addGtmAccessStrategy(array $options = [])
 * @method AddGtmAddressPool addGtmAddressPool(array $options = [])
 * @method AddGtmMonitor addGtmMonitor(array $options = [])
 * @method DeleteGtmAccessStrategy deleteGtmAccessStrategy(array $options = [])
 * @method DeleteGtmAddressPool deleteGtmAddressPool(array $options = [])
 * @method DescribeGtmAccessStrategies describeGtmAccessStrategies(array $options = [])
 * @method DescribeGtmAccessStrategy describeGtmAccessStrategy(array $options = [])
 * @method DescribeGtmAccessStrategyAvailableConfig describeGtmAccessStrategyAvailableConfig(array $options = [])
 * @method DescribeGtmAvailableAlertGroup describeGtmAvailableAlertGroup(array $options = [])
 * @method DescribeGtmInstance describeGtmInstance(array $options = [])
 * @method DescribeGtmInstanceAddressPool describeGtmInstanceAddressPool(array $options = [])
 * @method DescribeGtmInstanceAddressPools describeGtmInstanceAddressPools(array $options = [])
 * @method DescribeGtmInstances describeGtmInstances(array $options = [])
 * @method DescribeGtmInstanceStatus describeGtmInstanceStatus(array $options = [])
 * @method DescribeGtmLogs describeGtmLogs(array $options = [])
 * @method DescribeGtmMonitorAvailableConfig describeGtmMonitorAvailableConfig(array $options = [])
 * @method DescribeGtmMonitorConfig describeGtmMonitorConfig(array $options = [])
 * @method SetGtmAccessMode setGtmAccessMode(array $options = [])
 * @method SetGtmMonitorStatus setGtmMonitorStatus(array $options = [])
 * @method UpdateGtmAccessStrategy updateGtmAccessStrategy(array $options = [])
 * @method UpdateGtmAddressPool updateGtmAddressPool(array $options = [])
 * @method UpdateGtmInstanceGlobalConfig updateGtmInstanceGlobalConfig(array $options = [])
 * @method UpdateGtmMonitor updateGtmMonitor(array $options = [])
 * @method QueryCreateInstancePrice queryCreateInstancePrice(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DescribeSupportLines describeSupportLines(array $options = [])
 * @method DescribeDomainNs describeDomainNs(array $options = [])
 * @method DescribeDnsProductInstance describeDnsProductInstance(array $options = [])
 * @method SetDNSSLBStatus setDNSSLBStatus(array $options = [])
 * @method SetDomainRecordStatus setDomainRecordStatus(array $options = [])
 * @method UpdateDNSSLBWeight updateDNSSLBWeight(array $options = [])
 * @method UpdateDomainGroup updateDomainGroup(array $options = [])
 * @method UpdateDomainRecord updateDomainRecord(array $options = [])
 * @method DescribeRecordLogs describeRecordLogs(array $options = [])
 * @method DescribeSubDomainRecords describeSubDomainRecords(array $options = [])
 * @method GetMainDomainName getMainDomainName(array $options = [])
 * @method ModifyHichinaDomainDNS modifyHichinaDomainDNS(array $options = [])
 * @method DescribeDomainGroups describeDomainGroups(array $options = [])
 * @method DescribeDomainInfo describeDomainInfo(array $options = [])
 * @method DescribeDomainLogs describeDomainLogs(array $options = [])
 * @method DescribeDomainRecordInfo describeDomainRecordInfo(array $options = [])
 * @method DescribeDomainRecords describeDomainRecords(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method DeleteDomainRecord deleteDomainRecord(array $options = [])
 * @method DeleteSubDomainRecords deleteSubDomainRecords(array $options = [])
 * @method DescribeDnsProductInstances describeDnsProductInstances(array $options = [])
 * @method DescribeDNSSLBSubDomains describeDNSSLBSubDomains(array $options = [])
 * @method CheckDomainRecord checkDomainRecord(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method AddDomain addDomain(array $options = [])
 * @method AddDomainGroup addDomainGroup(array $options = [])
 * @method AddDomainRecord addDomainRecord(array $options = [])
 * @method ChangeDomainGroup changeDomainGroup(array $options = [])
 * @method ChangeDomainOfDnsProduct changeDomainOfDnsProduct(array $options = [])
 */
class AlidnsApiResolver
{
    use ApiResolverTrait;
}

class V20150109Rpc extends Rpc
{
    /** @var string */
    public $product = 'Alidns';

    /** @var string */
    public $version = '2015-01-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alidns';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceSystemCname extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainRecordInfo()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OperateBatchDomain extends V20150109Rpc
{

    /**
     * @param array $domainRecordInfo
     *
     * @return $this
     */
    public function withDomainRecordInfo(array $domainRecordInfo)
    {
        $this->data['DomainRecordInfo'] = $domainRecordInfo;
        foreach ($domainRecordInfo as $depth1 => $depth1Value) {
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Rr'] = $depth1Value['Rr'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewType'] = $depth1Value['NewType'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewValue'] = $depth1Value['NewValue'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Line'] = $depth1Value['Line'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Domain'] = $depth1Value['Domain'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Ttl'] = $depth1Value['Ttl'];
            $this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewRr'] = $depth1Value['NewRr'];
        }

        return $this;
    }
}

/**
 * @method string getBatchType()
 * @method $this withBatchType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeBatchResultDetail extends V20150109Rpc
{
}

/**
 * @method string getBatchType()
 * @method $this withBatchType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeBatchResultCount extends V20150109Rpc
{
}

/**
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getDefaultAddrPoolId()
 * @method $this withDefaultAddrPoolId($value)
 * @method string getAccessLines()
 * @method $this withAccessLines($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFailoverAddrPoolId()
 * @method $this withFailoverAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddGtmAccessStrategy extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 * @method $this withMinAvailableAddrNum($value)
 */
class AddGtmAddressPool extends V20150109Rpc
{

    /**
     * @param array $addr
     *
     * @return $this
     */
    public function withAddr(array $addr)
    {
        $this->data['Addr'] = $addr;
        foreach ($addr as $depth1 => $depth1Value) {
            $this->options['query']['Addr.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
            $this->options['query']['Addr.' . ($depth1 + 1) . '.LbaWeight'] = $depth1Value['LbaWeight'];
            $this->options['query']['Addr.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getMonitorExtendInfo()
 * @method $this withMonitorExtendInfo($value)
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method array getIspCityNode()
 */
class AddGtmMonitor extends V20150109Rpc
{

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
    public function withIspCityNode(array $ispCityNode)
    {
        $this->data['IspCityNode'] = $ispCityNode;
        foreach ($ispCityNode as $depth1 => $depth1Value) {
            $this->options['query']['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
            $this->options['query']['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
        }

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmAccessStrategy extends V20150109Rpc
{
}

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmAddressPool extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeGtmAccessStrategies extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAccessStrategy extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAccessStrategyAvailableConfig extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAvailableAlertGroup extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstance extends V20150109Rpc
{
}

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceAddressPool extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeGtmInstanceAddressPools extends V20150109Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeGtmInstances extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceStatus extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 */
class DescribeGtmLogs extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmMonitorAvailableConfig extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmMonitorConfig extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAccessMode()
 * @method $this withAccessMode($value)
 */
class SetGtmAccessMode extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetGtmMonitorStatus extends V20150109Rpc
{
}

/**
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getDefaultAddrPoolId()
 * @method $this withDefaultAddrPoolId($value)
 * @method string getAccessLines()
 * @method $this withAccessLines($value)
 * @method string getFailoverAddrPoolId()
 * @method $this withFailoverAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateGtmAccessStrategy extends V20150109Rpc
{
}

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 * @method $this withMinAvailableAddrNum($value)
 */
class UpdateGtmAddressPool extends V20150109Rpc
{

    /**
     * @param array $addr
     *
     * @return $this
     */
    public function withAddr(array $addr)
    {
        $this->data['Addr'] = $addr;
        foreach ($addr as $depth1 => $depth1Value) {
            $this->options['query']['Addr.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
            $this->options['query']['Addr.' . ($depth1 + 1) . '.LbaWeight'] = $depth1Value['LbaWeight'];
            $this->options['query']['Addr.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getAlertGroup()
 * @method $this withAlertGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getUserDomainName()
 * @method $this withUserDomainName($value)
 * @method string getCnameMode()
 * @method $this withCnameMode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLbaStrategy()
 * @method $this withLbaStrategy($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getCnameCustomDomainName()
 * @method $this withCnameCustomDomainName($value)
 */
class UpdateGtmInstanceGlobalConfig extends V20150109Rpc
{
}

/**
 * @method string getMonitorExtendInfo()
 * @method $this withMonitorExtendInfo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method array getIspCityNode()
 */
class UpdateGtmMonitor extends V20150109Rpc
{

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
    public function withIspCityNode(array $ispCityNode)
    {
        $this->data['IspCityNode'] = $ispCityNode;
        foreach ($ispCityNode as $depth1 => $depth1Value) {
            $this->options['query']['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
            $this->options['query']['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
        }

        return $this;
    }
}

/**
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceVersion()
 * @method $this withInstanceVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCreateInstancePrice extends V20150109Rpc
{
}

/**
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceVersion()
 * @method $this withInstanceVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class CreateInstance extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSupportLines extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainNs extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDnsProductInstance extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOpen()
 * @method $this withOpen($value)
 */
class SetDNSSLBStatus extends V20150109Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetDomainRecordStatus extends V20150109Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDNSSLBWeight extends V20150109Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class UpdateDomainGroup extends V20150109Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 */
class UpdateDomainRecord extends V20150109Rpc
{
}

/**
 * @method string getEndDate()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRecordLogs extends V20150109Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['query']['endDate'] = $value;

        return $this;
    }
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSubDomainRecords extends V20150109Rpc
{
}

/**
 * @method string getInputString()
 * @method $this withInputString($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetMainDomainName extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyHichinaDomainDNS extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDomainGroups extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNeedDetailAttributes()
 * @method $this withNeedDetailAttributes($value)
 */
class DescribeDomainInfo extends V20150109Rpc
{
}

/**
 * @method string getEndDate()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDomainLogs extends V20150109Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['query']['endDate'] = $value;

        return $this;
    }
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainRecordInfo extends V20150109Rpc
{
}

/**
 * @method string getValueKeyWord()
 * @method $this withValueKeyWord($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getTypeKeyWord()
 * @method $this withTypeKeyWord($value)
 * @method string getRRKeyWord()
 * @method $this withRRKeyWord($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDomainRecords extends V20150109Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDomains extends V20150109Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomainRecord extends V20150109Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DeleteSubDomainRecords extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDnsProductInstances extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDNSSLBSubDomains extends V20150109Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class CheckDomainRecord extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomain extends V20150109Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomainGroup extends V20150109Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddDomain extends V20150109Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class AddDomainGroup extends V20150109Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 */
class AddDomainRecord extends V20150109Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ChangeDomainGroup extends V20150109Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNewDomain()
 * @method $this withNewDomain($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ChangeDomainOfDnsProduct extends V20150109Rpc
{
}
