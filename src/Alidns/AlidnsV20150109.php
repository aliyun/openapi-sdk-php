<?php

namespace AlibabaCloud\Alidns;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Alidns based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Alidns
 *
 * @method static V20150109\AddDomain addDomain(array $options = [])
 * @method static V20150109\AddDomainGroup addDomainGroup(array $options = [])
 * @method static V20150109\AddDomainRecord addDomainRecord(array $options = [])
 * @method static V20150109\AddGtmAccessStrategy addGtmAccessStrategy(array $options = [])
 * @method static V20150109\AddGtmAddressPool addGtmAddressPool(array $options = [])
 * @method static V20150109\AddGtmMonitor addGtmMonitor(array $options = [])
 * @method static V20150109\ChangeDomainGroup changeDomainGroup(array $options = [])
 * @method static V20150109\ChangeDomainOfDnsProduct changeDomainOfDnsProduct(array $options = [])
 * @method static V20150109\CheckDomainRecord checkDomainRecord(array $options = [])
 * @method static V20150109\CreateInstance createInstance(array $options = [])
 * @method static V20150109\DeleteDomain deleteDomain(array $options = [])
 * @method static V20150109\DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method static V20150109\DeleteDomainRecord deleteDomainRecord(array $options = [])
 * @method static V20150109\DeleteGtmAccessStrategy deleteGtmAccessStrategy(array $options = [])
 * @method static V20150109\DeleteGtmAddressPool deleteGtmAddressPool(array $options = [])
 * @method static V20150109\DeleteSubDomainRecords deleteSubDomainRecords(array $options = [])
 * @method static V20150109\DescribeBatchResultCount describeBatchResultCount(array $options = [])
 * @method static V20150109\DescribeBatchResultDetail describeBatchResultDetail(array $options = [])
 * @method static V20150109\DescribeDNSSLBSubDomains describeDNSSLBSubDomains(array $options = [])
 * @method static V20150109\DescribeDnsProductInstance describeDnsProductInstance(array $options = [])
 * @method static V20150109\DescribeDnsProductInstances describeDnsProductInstances(array $options = [])
 * @method static V20150109\DescribeDomainGroups describeDomainGroups(array $options = [])
 * @method static V20150109\DescribeDomainInfo describeDomainInfo(array $options = [])
 * @method static V20150109\DescribeDomainLogs describeDomainLogs(array $options = [])
 * @method static V20150109\DescribeDomainNs describeDomainNs(array $options = [])
 * @method static V20150109\DescribeDomainRecordInfo describeDomainRecordInfo(array $options = [])
 * @method static V20150109\DescribeDomainRecords describeDomainRecords(array $options = [])
 * @method static V20150109\DescribeDomains describeDomains(array $options = [])
 * @method static V20150109\DescribeGtmAccessStrategies describeGtmAccessStrategies(array $options = [])
 * @method static V20150109\DescribeGtmAccessStrategy describeGtmAccessStrategy(array $options = [])
 * @method static V20150109\DescribeGtmAccessStrategyAvailableConfig describeGtmAccessStrategyAvailableConfig(array $options = [])
 * @method static V20150109\DescribeGtmAvailableAlertGroup describeGtmAvailableAlertGroup(array $options = [])
 * @method static V20150109\DescribeGtmInstance describeGtmInstance(array $options = [])
 * @method static V20150109\DescribeGtmInstanceAddressPool describeGtmInstanceAddressPool(array $options = [])
 * @method static V20150109\DescribeGtmInstanceAddressPools describeGtmInstanceAddressPools(array $options = [])
 * @method static V20150109\DescribeGtmInstanceStatus describeGtmInstanceStatus(array $options = [])
 * @method static V20150109\DescribeGtmInstances describeGtmInstances(array $options = [])
 * @method static V20150109\DescribeGtmLogs describeGtmLogs(array $options = [])
 * @method static V20150109\DescribeGtmMonitorAvailableConfig describeGtmMonitorAvailableConfig(array $options = [])
 * @method static V20150109\DescribeGtmMonitorConfig describeGtmMonitorConfig(array $options = [])
 * @method static V20150109\DescribeRecordLogs describeRecordLogs(array $options = [])
 * @method static V20150109\DescribeSubDomainRecords describeSubDomainRecords(array $options = [])
 * @method static V20150109\DescribeSupportLines describeSupportLines(array $options = [])
 * @method static V20150109\GetMainDomainName getMainDomainName(array $options = [])
 * @method static V20150109\ModifyHichinaDomainDNS modifyHichinaDomainDNS(array $options = [])
 * @method static V20150109\OperateBatchDomain operateBatchDomain(array $options = [])
 * @method static V20150109\QueryCreateInstancePrice queryCreateInstancePrice(array $options = [])
 * @method static V20150109\SetDNSSLBStatus setDNSSLBStatus(array $options = [])
 * @method static V20150109\SetDomainRecordStatus setDomainRecordStatus(array $options = [])
 * @method static V20150109\SetGtmAccessMode setGtmAccessMode(array $options = [])
 * @method static V20150109\SetGtmMonitorStatus setGtmMonitorStatus(array $options = [])
 * @method static V20150109\UpdateDNSSLBWeight updateDNSSLBWeight(array $options = [])
 * @method static V20150109\UpdateDomainGroup updateDomainGroup(array $options = [])
 * @method static V20150109\UpdateDomainRecord updateDomainRecord(array $options = [])
 * @method static V20150109\UpdateGtmAccessStrategy updateGtmAccessStrategy(array $options = [])
 * @method static V20150109\UpdateGtmAddressPool updateGtmAddressPool(array $options = [])
 * @method static V20150109\UpdateGtmInstanceGlobalConfig updateGtmInstanceGlobalConfig(array $options = [])
 * @method static V20150109\UpdateGtmMonitor updateGtmMonitor(array $options = [])
 */
class AlidnsV20150109
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Alidns\\V20150109';
}
