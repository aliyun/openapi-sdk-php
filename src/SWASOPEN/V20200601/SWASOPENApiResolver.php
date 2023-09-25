<?php

namespace AlibabaCloud\SWASOPEN\V20200601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocatePublicConnection allocatePublicConnection(array $options = [])
 * @method CreateCommand createCommand(array $options = [])
 * @method CreateCustomImage createCustomImage(array $options = [])
 * @method CreateFirewallRule createFirewallRule(array $options = [])
 * @method CreateFirewallRules createFirewallRules(array $options = [])
 * @method CreateInstanceKeyPair createInstanceKeyPair(array $options = [])
 * @method CreateInstances createInstances(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method DeleteCommand deleteCommand(array $options = [])
 * @method DeleteCustomImage deleteCustomImage(array $options = [])
 * @method DeleteFirewallRule deleteFirewallRule(array $options = [])
 * @method DeleteInstanceKeyPair deleteInstanceKeyPair(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteSnapshots deleteSnapshots(array $options = [])
 * @method DescribeCloudAssistantStatus describeCloudAssistantStatus(array $options = [])
 * @method DescribeCloudMonitorAgentStatuses describeCloudMonitorAgentStatuses(array $options = [])
 * @method DescribeCommandInvocations describeCommandInvocations(array $options = [])
 * @method DescribeCommands describeCommands(array $options = [])
 * @method DescribeDatabaseErrorLogs describeDatabaseErrorLogs(array $options = [])
 * @method DescribeDatabaseInstanceMetricData describeDatabaseInstanceMetricData(array $options = [])
 * @method DescribeDatabaseInstanceParameters describeDatabaseInstanceParameters(array $options = [])
 * @method DescribeDatabaseInstances describeDatabaseInstances(array $options = [])
 * @method DescribeDatabaseSlowLogRecords describeDatabaseSlowLogRecords(array $options = [])
 * @method DescribeInstanceKeyPair describeInstanceKeyPair(array $options = [])
 * @method DescribeInstancePasswordsSetting describeInstancePasswordsSetting(array $options = [])
 * @method DescribeInstanceVncUrl describeInstanceVncUrl(array $options = [])
 * @method DescribeInvocationResult describeInvocationResult(array $options = [])
 * @method DescribeInvocations describeInvocations(array $options = [])
 * @method DescribeMonitorData describeMonitorData(array $options = [])
 * @method DescribeSecurityAgentStatus describeSecurityAgentStatus(array $options = [])
 * @method DisableFirewallRule disableFirewallRule(array $options = [])
 * @method EnableFirewallRule enableFirewallRule(array $options = [])
 * @method InstallCloudAssistant installCloudAssistant(array $options = [])
 * @method InstallCloudMonitorAgent installCloudMonitorAgent(array $options = [])
 * @method InvokeCommand invokeCommand(array $options = [])
 * @method ListCustomImages listCustomImages(array $options = [])
 * @method ListDisks listDisks(array $options = [])
 * @method ListFirewallRules listFirewallRules(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListInstancePlansModification listInstancePlansModification(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListInstanceStatus listInstanceStatus(array $options = [])
 * @method ListInstancesTrafficPackages listInstancesTrafficPackages(array $options = [])
 * @method ListPlans listPlans(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method LoginInstance loginInstance(array $options = [])
 * @method ModifyDatabaseInstanceDescription modifyDatabaseInstanceDescription(array $options = [])
 * @method ModifyDatabaseInstanceParameter modifyDatabaseInstanceParameter(array $options = [])
 * @method ModifyFirewallRule modifyFirewallRule(array $options = [])
 * @method ModifyImageShareStatus modifyImageShareStatus(array $options = [])
 * @method ModifyInstanceVncPassword modifyInstanceVncPassword(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method RebootInstances rebootInstances(array $options = [])
 * @method ReleasePublicConnection releasePublicConnection(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ResetDatabaseAccountPassword resetDatabaseAccountPassword(array $options = [])
 * @method ResetDisk resetDisk(array $options = [])
 * @method ResetSystem resetSystem(array $options = [])
 * @method RestartDatabaseInstance restartDatabaseInstance(array $options = [])
 * @method RunCommand runCommand(array $options = [])
 * @method StartDatabaseInstance startDatabaseInstance(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method StartInstances startInstances(array $options = [])
 * @method StartTerminalSession startTerminalSession(array $options = [])
 * @method StopDatabaseInstance stopDatabaseInstance(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method StopInstances stopInstances(array $options = [])
 * @method UpdateCommandAttribute updateCommandAttribute(array $options = [])
 * @method UpdateDiskAttribute updateDiskAttribute(array $options = [])
 * @method UpdateInstanceAttribute updateInstanceAttribute(array $options = [])
 * @method UpdateSnapshotAttribute updateSnapshotAttribute(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method UploadInstanceKeyPair uploadInstanceKeyPair(array $options = [])
 */
class SWASOPENApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'SWAS-OPEN';

    /** @var string */
    public $version = '2020-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'SWAS-OPEN';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class AllocatePublicConnection extends Rpc
{
}

/**
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 */
class CreateCommand extends Rpc
{
}

/**
 * @method string getSystemSnapshotId()
 * @method $this withSystemSnapshotId($value)
 * @method string getDataSnapshotId()
 * @method $this withDataSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateCustomImage extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleProtocol()
 * @method $this withRuleProtocol($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class CreateFirewallRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFirewallRules()
 * @method $this withFirewallRules($value)
 */
class CreateFirewallRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateInstanceKeyPair extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getDataDiskSize()
 * @method $this withDataDiskSize($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateInstances extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class CreateSnapshot extends Rpc
{
}

/**
 * @method string getCommandId()
 * @method $this withCommandId($value)
 */
class DeleteCommand extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteCustomImage extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteFirewallRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstanceKeyPair extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteSnapshot extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 */
class DeleteSnapshots extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeCloudAssistantStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeCloudMonitorAgentStatuses extends Rpc
{
}

/**
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getCommandType()
 * @method $this withCommandType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvocationStatus()
 * @method $this withInvocationStatus($value)
 */
class DescribeCommandInvocations extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProvider()
 * @method $this withProvider($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeCommands extends Rpc
{
}

/**
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDatabaseErrorLogs extends Rpc
{
}

/**
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class DescribeDatabaseInstanceMetricData extends Rpc
{
}

/**
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class DescribeDatabaseInstanceParameters extends Rpc
{
}

/**
 * @method string getDatabaseInstanceIds()
 * @method $this withDatabaseInstanceIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDatabaseInstances extends Rpc
{
}

/**
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDatabaseSlowLogRecords extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceKeyPair extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstancePasswordsSetting extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceVncUrl extends Rpc
{
}

/**
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInvocationResult extends Rpc
{
}

/**
 * @method string getInvokeStatus()
 * @method $this withInvokeStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeInvocations extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeMonitorData extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSecurityAgentStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DisableFirewallRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class EnableFirewallRule extends Rpc
{
}

/**
 * @method string getSite()
 * @method $this withSite($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class InstallCloudAssistant extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class InstallCloudMonitorAgent extends Rpc
{
}

/**
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class InvokeCommand extends Rpc
{
}

/**
 * @method string getSystemSnapshotId()
 * @method $this withSystemSnapshotId($value)
 * @method string getDataSnapshotId()
 * @method $this withDataSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getImageNames()
 * @method $this withImageNames($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class ListCustomImages extends Rpc
{
}

/**
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 */
class ListDisks extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListFirewallRules extends Rpc
{
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class ListImages extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListInstancePlansModification extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPublicIpAddresses()
 * @method $this withPublicIpAddresses($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListInstances extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstanceStatus extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ListInstancesTrafficPackages extends Rpc
{
}

class ListPlans extends Rpc
{
}

class ListRegions extends Rpc
{
}

/**
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getSourceDiskType()
 * @method $this withSourceDiskType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class ListSnapshots extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class LoginInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getDatabaseInstanceDescription()
 * @method $this withDatabaseInstanceDescription($value)
 */
class ModifyDatabaseInstanceDescription extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getForceRestart()
 * @method $this withForceRestart($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyDatabaseInstanceParameter extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleProtocol()
 * @method $this withRuleProtocol($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ModifyFirewallRule extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class ModifyImageShareStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVncPassword()
 * @method $this withVncPassword($value)
 */
class ModifyInstanceVncPassword extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RebootInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForceReboot()
 * @method $this withForceReboot($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class RebootInstances extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class ReleasePublicConnection extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetDatabaseAccountPassword extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class ResetDisk extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ResetSystem extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class RestartDatabaseInstance extends Rpc
{
}

/**
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getWindowsPasswordName()
 * @method $this withWindowsPasswordName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getWorkingUser()
 * @method $this withWorkingUser($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 */
class RunCommand extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class StartDatabaseInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class StartInstances extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartTerminalSession extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDatabaseInstanceId()
 * @method $this withDatabaseInstanceId($value)
 */
class StopDatabaseInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class StopInstances extends Rpc
{
}

/**
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateCommandAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class UpdateDiskAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class UpdateInstanceAttribute extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class UpdateSnapshotAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class UpgradeInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPublicKey()
 * @method $this withPublicKey($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UploadInstanceKeyPair extends Rpc
{
}
