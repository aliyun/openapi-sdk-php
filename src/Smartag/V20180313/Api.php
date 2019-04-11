<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method SetSagRouteableAddress setSagRouteableAddress(array $options = [])
 * @method ClearSagRouteableAddress clearSagRouteableAddress(array $options = [])
 * @method DescribeNetworkOptimizationSettings describeNetworkOptimizationSettings(array $options = [])
 * @method DescribeSagRouteableAddress describeSagRouteableAddress(array $options = [])
 * @method ModifyNetworkOptimization modifyNetworkOptimization(array $options = [])
 * @method DetachNetworkOptimizationSags detachNetworkOptimizationSags(array $options = [])
 * @method DescribeNetworkOptimizationSags describeNetworkOptimizationSags(array $options = [])
 * @method DescribeNetworkOptimizations describeNetworkOptimizations(array $options = [])
 * @method DeleteNetworkOptimizationSetting deleteNetworkOptimizationSetting(array $options = [])
 * @method DeleteNetworkOptimization deleteNetworkOptimization(array $options = [])
 * @method CreateNetworkOptimization createNetworkOptimization(array $options = [])
 * @method AddNetworkOptimizationSetting addNetworkOptimizationSetting(array $options = [])
 * @method AttachNetworkOptimizationSags attachNetworkOptimizationSags(array $options = [])
 * @method ModifySerialNumber modifySerialNumber(array $options = [])
 * @method KickOutClients kickOutClients(array $options = [])
 * @method DescribeSagOnlineClientStatistics describeSagOnlineClientStatistics(array $options = [])
 * @method ResetSmartAccessGatewayClientUserPassword resetSmartAccessGatewayClientUserPassword(array $options = [])
 * @method ModifySmartAccessGatewayClientUser modifySmartAccessGatewayClientUser(array $options = [])
 * @method DescribeUserOnlineClientStatistics describeUserOnlineClientStatistics(array $options = [])
 * @method DescribeUserOnlineClients describeUserOnlineClients(array $options = [])
 * @method DescribeUserFlowStatistics describeUserFlowStatistics(array $options = [])
 * @method DeleteSmartAccessGatewayClientUser deleteSmartAccessGatewayClientUser(array $options = [])
 * @method DescribeSmartAccessGatewayClientUsers describeSmartAccessGatewayClientUsers(array $options = [])
 * @method CreateSmartAccessGatewayClientUser createSmartAccessGatewayClientUser(array $options = [])
 * @method DescribeACLs describeACLs(array $options = [])
 * @method DescribeACLAttribute describeACLAttribute(array $options = [])
 * @method DeleteACL deleteACL(array $options = [])
 * @method DeleteACLRule deleteACLRule(array $options = [])
 * @method ModifyACLRule modifyACLRule(array $options = [])
 * @method DisassociateACL disassociateACL(array $options = [])
 * @method AssociateACL associateACL(array $options = [])
 * @method AddACLRule addACLRule(array $options = [])
 * @method ModifyACL modifyACL(array $options = [])
 * @method CreateACL createACL(array $options = [])
 * @method UnicomSignConfirm unicomSignConfirm(array $options = [])
 * @method UpgradeSmartAccessGateway upgradeSmartAccessGateway(array $options = [])
 * @method DowngradeSmartAccessGateway downgradeSmartAccessGateway(array $options = [])
 * @method DeleteSAGLinkLevelHa deleteSAGLinkLevelHa(array $options = [])
 * @method SwitchSAGHaState switchSAGHaState(array $options = [])
 * @method CreateSAGLinkLevelHa createSAGLinkLevelHa(array $options = [])
 * @method UnicomOrderConfirm unicomOrderConfirm(array $options = [])
 * @method DescribeGrantRules describeGrantRules(array $options = [])
 * @method GrantInstanceToCbn grantInstanceToCbn(array $options = [])
 * @method RevokeInstanceFromCbn revokeInstanceFromCbn(array $options = [])
 * @method RebootSmartAccessGateway rebootSmartAccessGateway(array $options = [])
 * @method SwitchCloudBoxHaState switchCloudBoxHaState(array $options = [])
 * @method CreateSmartAccessGateway createSmartAccessGateway(array $options = [])
 * @method DescribeSmartAccessGatewayHa describeSmartAccessGatewayHa(array $options = [])
 * @method DeleteDedicatedLineBackup deleteDedicatedLineBackup(array $options = [])
 * @method CreateDedicatedLineBackup createDedicatedLineBackup(array $options = [])
 * @method ActivateSmartAccessGateway activateSmartAccessGateway(array $options = [])
 * @method UnlockSmartAccessGateway unlockSmartAccessGateway(array $options = [])
 * @method DescribeSmartAccessGatewayVersions describeSmartAccessGatewayVersions(array $options = [])
 * @method BindSmartAccessGateway bindSmartAccessGateway(array $options = [])
 * @method CreateCloudConnectNetwork createCloudConnectNetwork(array $options = [])
 * @method DeleteCloudConnectNetwork deleteCloudConnectNetwork(array $options = [])
 * @method DescribeCloudConnectNetworks describeCloudConnectNetworks(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSmartAccessGateways describeSmartAccessGateways(array $options = [])
 * @method GetCloudConnectNetworkUseLimit getCloudConnectNetworkUseLimit(array $options = [])
 * @method GetSmartAccessGatewayUseLimit getSmartAccessGatewayUseLimit(array $options = [])
 * @method ModifyCloudConnectNetwork modifyCloudConnectNetwork(array $options = [])
 * @method ModifySmartAccessGateway modifySmartAccessGateway(array $options = [])
 * @method UnbindSmartAccessGateway unbindSmartAccessGateway(array $options = [])
 * @method UpdateSmartAccessGatewayVersion updateSmartAccessGatewayVersion(array $options = [])
 */
class SmartagApiResolver
{
    use ApiResolverTrait;
}

class V20180313Rpc extends Rpc
{
    /** @var string */
    public $product = 'Smartag';

    /** @var string */
    public $version = '2018-03-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'smartag';
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteableAddress()
 * @method $this withRouteableAddress($value)
 */
class SetSagRouteableAddress extends V20180313Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ClearSagRouteableAddress extends V20180313Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkOptimizationSettings extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSagRouteableAddress extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNetworkOptimization extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getSmartAGIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachNetworkOptimizationSags extends V20180313Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
    public function withSmartAGIds(array $smartAGIds)
    {
        $this->data['SmartAGIds'] = $smartAGIds;
        foreach ($smartAGIds as $i => $iValue) {
            $this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkOptimizationSags extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkOptimizations extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DeleteNetworkOptimizationSetting extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNetworkOptimization extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateNetworkOptimization extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class AddNetworkOptimizationSetting extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getSmartAGIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachNetworkOptimizationSags extends V20180313Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
    public function withSmartAGIds(array $smartAGIds)
    {
        $this->data['SmartAGIds'] = $smartAGIds;
        foreach ($smartAGIds as $i => $iValue) {
            $this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySerialNumber extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class KickOutClients extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getSmartAGIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSagOnlineClientStatistics extends V20180313Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
    public function withSmartAGIds(array $smartAGIds)
    {
        $this->data['SmartAGIds'] = $smartAGIds;
        foreach ($smartAGIds as $i => $iValue) {
            $this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ResetSmartAccessGatewayClientUserPassword extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ModifySmartAccessGatewayClientUser extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method array getUserNames()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserOnlineClientStatistics extends V20180313Rpc
{

    /**
     * @param array $userNames
     *
     * @return $this
     */
    public function withUserNames(array $userNames)
    {
        $this->data['UserNames'] = $userNames;
        foreach ($userNames as $i => $iValue) {
            $this->options['query']['UserNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeUserOnlineClients extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getStatisticsDate()
 * @method $this withStatisticsDate($value)
 * @method array getUserNames()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserFlowStatistics extends V20180313Rpc
{

    /**
     * @param array $userNames
     *
     * @return $this
     */
    public function withUserNames(array $userNames)
    {
        $this->data['UserNames'] = $userNames;
        foreach ($userNames as $i => $iValue) {
            $this->options['query']['UserNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteSmartAccessGatewayClientUser extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeSmartAccessGatewayClientUsers extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserMail()
 * @method $this withUserMail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateSmartAccessGatewayClientUser extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeACLs extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeACLAttribute extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteACL extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcrId()
 * @method $this withAcrId($value)
 */
class DeleteACLRule extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAcrId()
 * @method $this withAcrId($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class ModifyACLRule extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisassociateACL extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateACL extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AddACLRule extends V20180313Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyACL extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateACL extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTmsOrder()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnicomSignConfirm extends V20180313Rpc
{

    /**
     * @param array $tmsOrder
     *
     * @return $this
     */
    public function withTmsOrder(array $tmsOrder)
    {
        $this->data['TmsOrder'] = $tmsOrder;
        foreach ($tmsOrder as $depth1 => $depth1Value) {
            $this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TmsCode'] = $depth1Value['TmsCode'];
            $this->options['query']['TmsOrder.' . ($depth1 + 1) . '.SigningTime'] = $depth1Value['SigningTime'];
            $this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TmsOrderCode'] = $depth1Value['TmsOrderCode'];
            $this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getBandWidthSpec()
 * @method $this withBandWidthSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class UpgradeSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getBandWidthSpec()
 * @method $this withBandWidthSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class DowngradeSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSAGLinkLevelHa extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchSAGHaState extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupLinkId()
 * @method $this withBackupLinkId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMainLinkRegionId()
 * @method $this withMainLinkRegionId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMainLinkId()
 * @method $this withMainLinkId($value)
 * @method string getBackupLinkRegionId()
 * @method $this withBackupLinkRegionId($value)
 */
class CreateSAGLinkLevelHa extends V20180313Rpc
{
}

/**
 * @method string getTmsCode()
 * @method $this withTmsCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getOrderItem()
 * @method string getOwnerUserId()
 * @method $this withOwnerUserId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOrderPostFee()
 * @method $this withOrderPostFee($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTmsOrderCode()
 * @method $this withTmsOrderCode($value)
 * @method string getTradeId()
 * @method $this withTradeId($value)
 */
class UnicomOrderConfirm extends V20180313Rpc
{

    /**
     * @param array $orderItem
     *
     * @return $this
     */
    public function withOrderItem(array $orderItem)
    {
        $this->data['OrderItem'] = $orderItem;
        foreach ($orderItem as $depth1 => $depth1Value) {
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.ScItemName'] = $depth1Value['ScItemName'];
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.ItemAmount'] = $depth1Value['ItemAmount'];
            foreach ($depth1Value['SnList'] as $i => $iValue) {
                $this->options['query']['OrderItem.' . ($depth1 + 1) . '.SnList.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.OrderItemId'] = $depth1Value['OrderItemId'];
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.ScItemCode'] = $depth1Value['ScItemCode'];
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.ItemQuantity'] = $depth1Value['ItemQuantity'];
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
            $this->options['query']['OrderItem.' . ($depth1 + 1) . '.TradeItemId'] = $depth1Value['TradeItemId'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAssociatedCcnId()
 * @method $this withAssociatedCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeGrantRules extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenUid()
 * @method $this withCenUid($value)
 * @method string getCenInstanceId()
 * @method $this withCenInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GrantInstanceToCbn extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenInstanceId()
 * @method $this withCenInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeInstanceFromCbn extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RebootSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchCloudBoxHaState extends V20180313Rpc
{
}

/**
 * @method string getMaxBandWidth()
 * @method $this withMaxBandWidth($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getReceiverTown()
 * @method $this withReceiverTown($value)
 * @method string getReceiverDistrict()
 * @method $this withReceiverDistrict($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getReceiverAddress()
 * @method $this withReceiverAddress($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBuyerMessage()
 * @method $this withBuyerMessage($value)
 * @method string getHardWareSpec()
 * @method $this withHardWareSpec($value)
 * @method string getReceiverEmail()
 * @method $this withReceiverEmail($value)
 * @method string getReceiverState()
 * @method $this withReceiverState($value)
 * @method string getReceiverCity()
 * @method $this withReceiverCity($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getReceiverMobile()
 * @method $this withReceiverMobile($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReceiverPhone()
 * @method $this withReceiverPhone($value)
 * @method string getReceiverName()
 * @method $this withReceiverName($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getReceiverCountry()
 * @method $this withReceiverCountry($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 * @method string getReceiverZip()
 * @method $this withReceiverZip($value)
 */
class CreateSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSmartAccessGatewayHa extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDedicatedLineBackup extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getVbrRegionId()
 * @method $this withVbrRegionId($value)
 */
class CreateDedicatedLineBackup extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ActivateSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnlockSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSmartAccessGatewayVersions extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BindSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnatCidrBlock()
 * @method $this withSnatCidrBlock($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCloudConnectNetwork extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCloudConnectNetwork extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCloudConnectNetworks extends V20180313Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAssociatedCcnId()
 * @method $this withAssociatedCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUnboundAclIds()
 * @method $this withUnboundAclIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSmartAccessGateways extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetCloudConnectNetworkUseLimit extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetSmartAccessGatewayUseLimit extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnatCidrBlock()
 * @method $this withSnatCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCloudConnectNetwork extends V20180313Rpc
{
}

/**
 * @method array getSnatEntries()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityLockThreshold()
 * @method $this withSecurityLockThreshold($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySmartAccessGateway extends V20180313Rpc
{

    /**
     * @param array $snatEntries
     *
     * @return $this
     */
    public function withSnatEntries(array $snatEntries)
    {
        $this->data['SnatEntries'] = $snatEntries;
        foreach ($snatEntries as $depth1 => $depth1Value) {
            $this->options['query']['SnatEntries.' . ($depth1 + 1) . '.CidrBlock'] = $depth1Value['CidrBlock'];
            $this->options['query']['SnatEntries.' . ($depth1 + 1) . '.SnatIp'] = $depth1Value['SnatIp'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnbindSmartAccessGateway extends V20180313Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class UpdateSmartAccessGatewayVersion extends V20180313Rpc
{
}
