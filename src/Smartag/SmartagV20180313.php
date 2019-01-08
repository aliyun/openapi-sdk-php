<?php

namespace AlibabaCloud\Smartag;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Smartag based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Smartag
 *
 * @method static V20180313\ActivateSmartAccessGateway activateSmartAccessGateway(array $options = [])
 * @method static V20180313\AddACLRule addACLRule(array $options = [])
 * @method static V20180313\AssociateACL associateACL(array $options = [])
 * @method static V20180313\BindSmartAccessGateway bindSmartAccessGateway(array $options = [])
 * @method static V20180313\CreateACL createACL(array $options = [])
 * @method static V20180313\CreateCloudConnectNetwork createCloudConnectNetwork(array $options = [])
 * @method static V20180313\CreateDedicatedLineBackup createDedicatedLineBackup(array $options = [])
 * @method static V20180313\CreateSAGLinkLevelHa createSAGLinkLevelHa(array $options = [])
 * @method static V20180313\CreateSmartAccessGateway createSmartAccessGateway(array $options = [])
 * @method static V20180313\DeleteACL deleteACL(array $options = [])
 * @method static V20180313\DeleteACLRule deleteACLRule(array $options = [])
 * @method static V20180313\DeleteCloudConnectNetwork deleteCloudConnectNetwork(array $options = [])
 * @method static V20180313\DeleteDedicatedLineBackup deleteDedicatedLineBackup(array $options = [])
 * @method static V20180313\DeleteSAGLinkLevelHa deleteSAGLinkLevelHa(array $options = [])
 * @method static V20180313\DescribeACLAttribute describeACLAttribute(array $options = [])
 * @method static V20180313\DescribeACLs describeACLs(array $options = [])
 * @method static V20180313\DescribeCloudConnectNetworks describeCloudConnectNetworks(array $options = [])
 * @method static V20180313\DescribeGrantRules describeGrantRules(array $options = [])
 * @method static V20180313\DescribeRegions describeRegions(array $options = [])
 * @method static V20180313\DescribeSmartAccessGatewayHa describeSmartAccessGatewayHa(array $options = [])
 * @method static V20180313\DescribeSmartAccessGatewayVersions describeSmartAccessGatewayVersions(array $options = [])
 * @method static V20180313\DescribeSmartAccessGateways describeSmartAccessGateways(array $options = [])
 * @method static V20180313\DisassociateACL disassociateACL(array $options = [])
 * @method static V20180313\DowngradeSmartAccessGateway downgradeSmartAccessGateway(array $options = [])
 * @method static V20180313\GetCloudConnectNetworkUseLimit getCloudConnectNetworkUseLimit(array $options = [])
 * @method static V20180313\GetSmartAccessGatewayUseLimit getSmartAccessGatewayUseLimit(array $options = [])
 * @method static V20180313\GrantInstanceToCbn grantInstanceToCbn(array $options = [])
 * @method static V20180313\ModifyACL modifyACL(array $options = [])
 * @method static V20180313\ModifyACLRule modifyACLRule(array $options = [])
 * @method static V20180313\ModifyCloudConnectNetwork modifyCloudConnectNetwork(array $options = [])
 * @method static V20180313\ModifySmartAccessGateway modifySmartAccessGateway(array $options = [])
 * @method static V20180313\RebootSmartAccessGateway rebootSmartAccessGateway(array $options = [])
 * @method static V20180313\RevokeInstanceFromCbn revokeInstanceFromCbn(array $options = [])
 * @method static V20180313\SwitchCloudBoxHaState switchCloudBoxHaState(array $options = [])
 * @method static V20180313\SwitchSAGHaState switchSAGHaState(array $options = [])
 * @method static V20180313\UnbindSmartAccessGateway unbindSmartAccessGateway(array $options = [])
 * @method static V20180313\UnicomOrderConfirm unicomOrderConfirm(array $options = [])
 * @method static V20180313\UnicomSignConfirm unicomSignConfirm(array $options = [])
 * @method static V20180313\UnlockSmartAccessGateway unlockSmartAccessGateway(array $options = [])
 * @method static V20180313\UpdateSmartAccessGatewayVersion updateSmartAccessGatewayVersion(array $options = [])
 * @method static V20180313\UpgradeSmartAccessGateway upgradeSmartAccessGateway(array $options = [])
 */
class SmartagV20180313
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Smartag\\V20180313';
}
