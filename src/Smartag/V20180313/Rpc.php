<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withSmartAGIds(array $value)
    {
        $this->data['SmartAGIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withSmartAGIds(array $value)
    {
        $this->data['SmartAGIds'] = $value;
        foreach ($value as $i => $iValue) {
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
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withSmartAGIds(array $value)
    {
        $this->data['SmartAGIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withUserNames(array $value)
    {
        $this->data['UserNames'] = $value;
        foreach ($value as $i => $iValue) {
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
 * @method array getUserNames()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserFlowStatistics extends V20180313Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserNames(array $value)
    {
        $this->data['UserNames'] = $value;
        foreach ($value as $i => $iValue) {
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
 * @method string getUserMail()
 * @method $this withUserMail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsStaticIp()
 * @method $this withIsStaticIp($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getIsSharedUser()
 * @method $this withIsSharedUser($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withTmsOrder(array $value)
    {
        $this->data['TmsOrder'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsCode'] = $value[$i]['TmsCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.SigningTime'] = $value[$i]['SigningTime'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TmsOrderCode'] = $value[$i]['TmsOrderCode'];
            $this->options['query']['TmsOrder.' . ($i + 1) . '.TradeId'] = $value[$i]['TradeId'];
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withOrderItem(array $value)
    {
        $this->data['OrderItem'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OrderItem.' . ($i + 1) . '.ScItemName'] = $value[$i]['ScItemName'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ItemAmount'] = $value[$i]['ItemAmount'];
            foreach ($value[$i]['SnLists'] as $j => $jValue) {
                $this->options['query']['OrderItem.' . ($i + 1) . '.SnList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['OrderItem.' . ($i + 1) . '.OrderItemId'] = $value[$i]['OrderItemId'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ScItemCode'] = $value[$i]['ScItemCode'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.ItemQuantity'] = $value[$i]['ItemQuantity'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.TradeId'] = $value[$i]['TradeId'];
            $this->options['query']['OrderItem.' . ($i + 1) . '.TradeItemId'] = $value[$i]['TradeItemId'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withSnatEntries(array $value)
    {
        $this->data['SnatEntries'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SnatEntries.' . ($i + 1) . '.CidrBlock'] = $value[$i]['CidrBlock'];
            $this->options['query']['SnatEntries.' . ($i + 1) . '.SnatIp'] = $value[$i]['SnatIp'];
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
