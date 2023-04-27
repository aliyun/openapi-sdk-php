<?php

namespace AlibabaCloud\CC5G\V20220314;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDNSAuthorizationRule addDNSAuthorizationRule(array $options = [])
 * @method AddGroupDnsAuthorizationRule addGroupDnsAuthorizationRule(array $options = [])
 * @method AddWirelessCloudConnectorToGroup addWirelessCloudConnectorToGroup(array $options = [])
 * @method AttachVpcToNetLink attachVpcToNetLink(array $options = [])
 * @method CreateAuthorizationRule createAuthorizationRule(array $options = [])
 * @method CreateBatchOperateCardsTask createBatchOperateCardsTask(array $options = [])
 * @method CreateGroupAuthorizationRule createGroupAuthorizationRule(array $options = [])
 * @method CreateIoTCloudConnectorBackhaulRoute createIoTCloudConnectorBackhaulRoute(array $options = [])
 * @method CreateWirelessCloudConnector createWirelessCloudConnector(array $options = [])
 * @method CreateWirelessCloudConnectorGroup createWirelessCloudConnectorGroup(array $options = [])
 * @method DeleteAuthorizationRule deleteAuthorizationRule(array $options = [])
 * @method DeleteBatchOperateCardsTask deleteBatchOperateCardsTask(array $options = [])
 * @method DeleteGroupAuthorizationRule deleteGroupAuthorizationRule(array $options = [])
 * @method DeleteIoTCloudConnectorBackhaulRoute deleteIoTCloudConnectorBackhaulRoute(array $options = [])
 * @method DeleteWirelessCloudConnector deleteWirelessCloudConnector(array $options = [])
 * @method DeleteWirelessCloudConnectorGroup deleteWirelessCloudConnectorGroup(array $options = [])
 * @method DetachVpcFromNetLink detachVpcFromNetLink(array $options = [])
 * @method FailCards failCards(array $options = [])
 * @method GetCard getCard(array $options = [])
 * @method GetCardLockReason getCardLockReason(array $options = [])
 * @method GetCreateCustomerInformation getCreateCustomerInformation(array $options = [])
 * @method GetDiagnoseResultForSingleCard getDiagnoseResultForSingleCard(array $options = [])
 * @method GetWirelessCloudConnector getWirelessCloudConnector(array $options = [])
 * @method GrantNetLink grantNetLink(array $options = [])
 * @method ListAPNs listAPNs(array $options = [])
 * @method ListAuthorizationRules listAuthorizationRules(array $options = [])
 * @method ListBatchOperateCardsTasks listBatchOperateCardsTasks(array $options = [])
 * @method ListCardDayUsages listCardDayUsages(array $options = [])
 * @method ListCards listCards(array $options = [])
 * @method ListCardUsages listCardUsages(array $options = [])
 * @method ListDataPackages listDataPackages(array $options = [])
 * @method ListDiagnoseInfoForSingleCard listDiagnoseInfoForSingleCard(array $options = [])
 * @method ListGroupAuthorizationRules listGroupAuthorizationRules(array $options = [])
 * @method ListIoTCloudConnectorBackhaulRoute listIoTCloudConnectorBackhaulRoute(array $options = [])
 * @method ListOrders listOrders(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListWirelessCloudConnectorGroups listWirelessCloudConnectorGroups(array $options = [])
 * @method ListWirelessCloudConnectors listWirelessCloudConnectors(array $options = [])
 * @method ListZones listZones(array $options = [])
 * @method LockCards lockCards(array $options = [])
 * @method ModifyWirelessCloudConnectorFeature modifyWirelessCloudConnectorFeature(array $options = [])
 * @method OpenCc5gService openCc5gService(array $options = [])
 * @method RebindCards rebindCards(array $options = [])
 * @method RemoveWirelessCloudConnectorFromGroup removeWirelessCloudConnectorFromGroup(array $options = [])
 * @method ResumeCards resumeCards(array $options = [])
 * @method RevokeNetLink revokeNetLink(array $options = [])
 * @method StopCards stopCards(array $options = [])
 * @method SubmitDiagnoseTaskForSingleCard submitDiagnoseTaskForSingleCard(array $options = [])
 * @method SwitchWirelessCloudConnectorToBusiness switchWirelessCloudConnectorToBusiness(array $options = [])
 * @method UnlockCards unlockCards(array $options = [])
 * @method UpdateAuthorizationRule updateAuthorizationRule(array $options = [])
 * @method UpdateBatchOperateCardsTask updateBatchOperateCardsTask(array $options = [])
 * @method UpdateCard updateCard(array $options = [])
 * @method UpdateDNSAuthorizationRule updateDNSAuthorizationRule(array $options = [])
 * @method UpdateGroupAuthorizationRule updateGroupAuthorizationRule(array $options = [])
 * @method UpdateGroupDnsAuthorizationRule updateGroupDnsAuthorizationRule(array $options = [])
 * @method UpdateWirelessCloudConnector updateWirelessCloudConnector(array $options = [])
 * @method UpdateWirelessCloudConnectorGroup updateWirelessCloudConnectorGroup(array $options = [])
 */
class CC5GApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CC5G';

    /** @var string */
    public $version = '2022-03-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'fivegcc';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceDNSIp()
 * @method $this withSourceDNSIp($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddDNSAuthorizationRule extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceDNSIp()
 * @method $this withSourceDNSIp($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddGroupDnsAuthorizationRule extends Rpc
{
}

/**
 * @method array getWirelessCloudConnectorIds()
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class AddWirelessCloudConnectorToGroup extends Rpc
{

    /**
     * @param array $wirelessCloudConnectorIds
     *
     * @return $this
     */
	public function withWirelessCloudConnectorIds(array $wirelessCloudConnectorIds)
	{
	    $this->data['WirelessCloudConnectorIds'] = $wirelessCloudConnectorIds;
		foreach ($wirelessCloudConnectorIds as $i => $iValue) {
			$this->options['query']['WirelessCloudConnectorIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getVSwitches()
 * @method $this withVSwitches($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AttachVpcToNetLink extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateAuthorizationRule extends Rpc
{
}

/**
 * @method string getIccids()
 * @method $this withIccids($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffectType()
 * @method $this withEffectType($value)
 * @method string getWirelessCloudConnectorIds()
 * @method $this withWirelessCloudConnectorIds($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getIccidsOssFilePath()
 * @method $this withIccidsOssFilePath($value)
 */
class CreateBatchOperateCardsTask extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateGroupAuthorizationRule extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class CreateIoTCloudConnectorBackhaulRoute extends Rpc
{
}

/**
 * @method string getUseCase()
 * @method $this withUseCase($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getNetLinks()
 * @method $this withNetLinks($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateWirelessCloudConnector extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateWirelessCloudConnectorGroup extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class DeleteAuthorizationRule extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBatchOperateCardsTaskId()
 * @method $this withBatchOperateCardsTaskId($value)
 */
class DeleteBatchOperateCardsTask extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 */
class DeleteGroupAuthorizationRule extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class DeleteIoTCloudConnectorBackhaulRoute extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class DeleteWirelessCloudConnector extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteWirelessCloudConnectorGroup extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class DetachVpcFromNetLink extends Rpc
{
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class FailCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIccid()
 * @method $this withIccid($value)
 */
class GetCard extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIccid()
 * @method $this withIccid($value)
 */
class GetCardLockReason extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class GetCreateCustomerInformation extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getDiagnoseTaskId()
 * @method $this withDiagnoseTaskId($value)
 */
class GetDiagnoseResultForSingleCard extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class GetWirelessCloudConnector extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getGrantAliUid()
 * @method $this withGrantAliUid($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class GrantNetLink extends Rpc
{
}

/**
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAPN()
 * @method $this withAPN($value)
 */
class ListAPNs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAuthorizationRuleIds()
 * @method $this withAuthorizationRuleIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDns()
 * @method $this withDns($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListAuthorizationRules extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getBatchOperateCardsTaskIds()
 * @method $this withBatchOperateCardsTaskIds($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListBatchOperateCardsTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLatestMonthNum()
 * @method $this withLatestMonthNum($value)
 * @method string getIccids()
 * @method $this withIccids($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class ListCardDayUsages extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getIccids()
 * @method $this withIccids($value)
 * @method string getIccid()
 * @method $this withIccid($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLock()
 * @method $this withLock($value)
 * @method string getMsisdn()
 * @method $this withMsisdn($value)
 * @method string getApn()
 * @method $this withApn($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getOnline()
 * @method $this withOnline($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListCards extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIccids()
 * @method $this withIccids($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class ListCardUsages extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDataPackageIds()
 * @method $this withDataPackageIds($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListDataPackages extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDiagnoseInfoForSingleCard extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAuthorizationRuleIds()
 * @method $this withAuthorizationRuleIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDns()
 * @method $this withDns($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListGroupAuthorizationRules extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class ListIoTCloudConnectorBackhaulRoute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getOrderAction()
 * @method $this withOrderAction($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getOrderIds()
 * @method $this withOrderIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListOrders extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListRegions extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWirelessCloudConnectorGroupStatus()
 * @method $this withWirelessCloudConnectorGroupStatus($value)
 * @method string getWirelessCloudConnectorGroupIds()
 * @method $this withWirelessCloudConnectorGroupIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getWirelessCloudConnectorGroupNames()
 * @method $this withWirelessCloudConnectorGroupNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListWirelessCloudConnectorGroups extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getWirelessCloudConnectorIds()
 * @method $this withWirelessCloudConnectorIds($value)
 * @method string getIsInGroup()
 * @method $this withIsInGroup($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 */
class ListWirelessCloudConnectors extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListZones extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class LockCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getFeatureValue()
 * @method $this withFeatureValue($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class ModifyWirelessCloudConnectorFeature extends Rpc
{
}

class OpenCc5gService extends Rpc
{
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class RebindCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getWirelessCloudConnectorIds()
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class RemoveWirelessCloudConnectorFromGroup extends Rpc
{

    /**
     * @param array $wirelessCloudConnectorIds
     *
     * @return $this
     */
	public function withWirelessCloudConnectorIds(array $wirelessCloudConnectorIds)
	{
	    $this->data['WirelessCloudConnectorIds'] = $wirelessCloudConnectorIds;
		foreach ($wirelessCloudConnectorIds as $i => $iValue) {
			$this->options['query']['WirelessCloudConnectorIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class ResumeCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getNetLinkId()
 * @method $this withNetLinkId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class RevokeNetLink extends Rpc
{
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class StopCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class SubmitDiagnoseTaskForSingleCard extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 */
class SwitchWirelessCloudConnectorToBusiness extends Rpc
{
}

/**
 * @method array getIccids()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class UnlockCards extends Rpc
{

    /**
     * @param array $iccids
     *
     * @return $this
     */
	public function withIccids(array $iccids)
	{
	    $this->data['Iccids'] = $iccids;
		foreach ($iccids as $i => $iValue) {
			$this->options['query']['Iccids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateAuthorizationRule extends Rpc
{
}

/**
 * @method string getIccids()
 * @method $this withIccids($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getBatchOperateCardsTaskId()
 * @method $this withBatchOperateCardsTaskId($value)
 * @method string getEffectType()
 * @method $this withEffectType($value)
 * @method string getWirelessCloudConnectorIds()
 * @method $this withWirelessCloudConnectorIds($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getIccidsOssFilePath()
 * @method $this withIccidsOssFilePath($value)
 */
class UpdateBatchOperateCardsTask extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIccid()
 * @method $this withIccid($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateCard extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceDNSIp()
 * @method $this withSourceDNSIp($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateDNSAuthorizationRule extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDestination()
 * @method $this withDestination($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateGroupAuthorizationRule extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSourceDNSIp()
 * @method $this withSourceDNSIp($value)
 * @method string getAuthorizationRuleId()
 * @method $this withAuthorizationRuleId($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateGroupDnsAuthorizationRule extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWirelessCloudConnectorId()
 * @method $this withWirelessCloudConnectorId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateWirelessCloudConnector extends Rpc
{
}

/**
 * @method string getWirelessCloudConnectorGroupId()
 * @method $this withWirelessCloudConnectorGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateWirelessCloudConnectorGroup extends Rpc
{
}
