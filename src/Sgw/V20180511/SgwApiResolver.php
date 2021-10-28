<?php

namespace AlibabaCloud\Sgw\V20180511;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateAllInOneGateway activateAllInOneGateway(array $options = [])
 * @method ActivateGateway activateGateway(array $options = [])
 * @method AddSharesToExpressSync addSharesToExpressSync(array $options = [])
 * @method AddTagsToGateway addTagsToGateway(array $options = [])
 * @method CheckActivationKey checkActivationKey(array $options = [])
 * @method CheckBlockVolumeName checkBlockVolumeName(array $options = [])
 * @method CheckGatewayEssdSupport checkGatewayEssdSupport(array $options = [])
 * @method CheckMnsService checkMnsService(array $options = [])
 * @method CheckRole checkRole(array $options = [])
 * @method CheckSlrRole checkSlrRole(array $options = [])
 * @method CheckUpgradeVersion checkUpgradeVersion(array $options = [])
 * @method CreateCache createCache(array $options = [])
 * @method CreateElasticGatewayPrivateZone createElasticGatewayPrivateZone(array $options = [])
 * @method CreateExpressSync createExpressSync(array $options = [])
 * @method CreateGateway createGateway(array $options = [])
 * @method CreateGatewayBlockVolume createGatewayBlockVolume(array $options = [])
 * @method CreateGatewayCacheDisk createGatewayCacheDisk(array $options = [])
 * @method CreateGatewayFileShare createGatewayFileShare(array $options = [])
 * @method CreateGatewayLogging createGatewayLogging(array $options = [])
 * @method CreateGatewaySMBUser createGatewaySMBUser(array $options = [])
 * @method CreateStorageBundle createStorageBundle(array $options = [])
 * @method DeleteCSGClients deleteCSGClients(array $options = [])
 * @method DeleteElasticGatewayPrivateZone deleteElasticGatewayPrivateZone(array $options = [])
 * @method DeleteExpressSync deleteExpressSync(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method DeleteGatewayBlockVolumes deleteGatewayBlockVolumes(array $options = [])
 * @method DeleteGatewayCacheDisk deleteGatewayCacheDisk(array $options = [])
 * @method DeleteGatewayFileShares deleteGatewayFileShares(array $options = [])
 * @method DeleteGatewayLogging deleteGatewayLogging(array $options = [])
 * @method DeleteGatewaySMBUser deleteGatewaySMBUser(array $options = [])
 * @method DeleteStorageBundle deleteStorageBundle(array $options = [])
 * @method DeployCacheDisk deployCacheDisk(array $options = [])
 * @method DeployCSGClients deployCSGClients(array $options = [])
 * @method DeployGateway deployGateway(array $options = [])
 * @method DescribeAccountConfig describeAccountConfig(array $options = [])
 * @method DescribeBlockVolumeSnapshots describeBlockVolumeSnapshots(array $options = [])
 * @method DescribeCSGClients describeCSGClients(array $options = [])
 * @method DescribeCSGClientTasks describeCSGClientTasks(array $options = [])
 * @method DescribeDashboard describeDashboard(array $options = [])
 * @method DescribeExpireCaches describeExpireCaches(array $options = [])
 * @method DescribeExpressSyncs describeExpressSyncs(array $options = [])
 * @method DescribeExpressSyncShares describeExpressSyncShares(array $options = [])
 * @method DescribeGateway describeGateway(array $options = [])
 * @method DescribeGatewayActions describeGatewayActions(array $options = [])
 * @method DescribeGatewayADInfo describeGatewayADInfo(array $options = [])
 * @method DescribeGatewayAuthInfo describeGatewayAuthInfo(array $options = [])
 * @method DescribeGatewayBlockVolumes describeGatewayBlockVolumes(array $options = [])
 * @method DescribeGatewayBucketCaches describeGatewayBucketCaches(array $options = [])
 * @method DescribeGatewayCaches describeGatewayCaches(array $options = [])
 * @method DescribeGatewayCapacityLimit describeGatewayCapacityLimit(array $options = [])
 * @method DescribeGatewayCategories describeGatewayCategories(array $options = [])
 * @method DescribeGatewayClasses describeGatewayClasses(array $options = [])
 * @method DescribeGatewayCredential describeGatewayCredential(array $options = [])
 * @method DescribeGatewayDNS describeGatewayDNS(array $options = [])
 * @method DescribeGatewayFileShares describeGatewayFileShares(array $options = [])
 * @method DescribeGatewayFileStatus describeGatewayFileStatus(array $options = [])
 * @method DescribeGatewayImages describeGatewayImages(array $options = [])
 * @method DescribeGatewayInfo describeGatewayInfo(array $options = [])
 * @method DescribeGatewayLDAPInfo describeGatewayLDAPInfo(array $options = [])
 * @method DescribeGatewayLocations describeGatewayLocations(array $options = [])
 * @method DescribeGatewayLogging describeGatewayLogging(array $options = [])
 * @method DescribeGatewayLogs describeGatewayLogs(array $options = [])
 * @method DescribeGatewayModificationClasses describeGatewayModificationClasses(array $options = [])
 * @method DescribeGatewayNFSClients describeGatewayNFSClients(array $options = [])
 * @method DescribeGateways describeGateways(array $options = [])
 * @method DescribeGatewaysForCms describeGatewaysForCms(array $options = [])
 * @method DescribeGatewaySMBUsers describeGatewaySMBUsers(array $options = [])
 * @method DescribeGatewaysTags describeGatewaysTags(array $options = [])
 * @method DescribeGatewayStatistics describeGatewayStatistics(array $options = [])
 * @method DescribeGatewayStock describeGatewayStock(array $options = [])
 * @method DescribeGatewayTypes describeGatewayTypes(array $options = [])
 * @method DescribeKmsKey describeKmsKey(array $options = [])
 * @method DescribeMqttConfig describeMqttConfig(array $options = [])
 * @method DescribeOssBucketInfo describeOssBucketInfo(array $options = [])
 * @method DescribeOssBuckets describeOssBuckets(array $options = [])
 * @method DescribePayAsYouGoPrice describePayAsYouGoPrice(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSharesBucketInfoForExpressSync describeSharesBucketInfoForExpressSync(array $options = [])
 * @method DescribeStorageBundle describeStorageBundle(array $options = [])
 * @method DescribeStorageBundles describeStorageBundles(array $options = [])
 * @method DescribeSubscriptionPrice describeSubscriptionPrice(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeUserBusinessStatus describeUserBusinessStatus(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DisableGatewayLogging disableGatewayLogging(array $options = [])
 * @method DisableGatewayNFSVersion disableGatewayNFSVersion(array $options = [])
 * @method EnableGatewayIpv6 enableGatewayIpv6(array $options = [])
 * @method EnableGatewayLogging enableGatewayLogging(array $options = [])
 * @method ExpandCacheDisk expandCacheDisk(array $options = [])
 * @method ExpandGatewayNetworkBandwidth expandGatewayNetworkBandwidth(array $options = [])
 * @method GenerateGatewayToken generateGatewayToken(array $options = [])
 * @method GenerateMqttToken generateMqttToken(array $options = [])
 * @method GenerateStsToken generateStsToken(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyGateway modifyGateway(array $options = [])
 * @method ModifyGatewayBlockVolume modifyGatewayBlockVolume(array $options = [])
 * @method ModifyGatewayClass modifyGatewayClass(array $options = [])
 * @method ModifyGatewayFileShare modifyGatewayFileShare(array $options = [])
 * @method ModifyGatewayFileShareWatermark modifyGatewayFileShareWatermark(array $options = [])
 * @method ModifyStorageBundle modifyStorageBundle(array $options = [])
 * @method OpenSgwService openSgwService(array $options = [])
 * @method OperateGateway operateGateway(array $options = [])
 * @method ReleaseService releaseService(array $options = [])
 * @method RemoveSharesFromExpressSync removeSharesFromExpressSync(array $options = [])
 * @method RemoveTagsFromGateway removeTagsFromGateway(array $options = [])
 * @method ReportBlockVolumes reportBlockVolumes(array $options = [])
 * @method ReportFileShares reportFileShares(array $options = [])
 * @method ReportGatewayInfo reportGatewayInfo(array $options = [])
 * @method ReportGatewayUsage reportGatewayUsage(array $options = [])
 * @method ResetGatewayPassword resetGatewayPassword(array $options = [])
 * @method RestartFileShares restartFileShares(array $options = [])
 * @method SetGatewayADInfo setGatewayADInfo(array $options = [])
 * @method SetGatewayDNS setGatewayDNS(array $options = [])
 * @method SetGatewayLDAPInfo setGatewayLDAPInfo(array $options = [])
 * @method SwitchCSGClientsReverseSyncConfiguration switchCSGClientsReverseSyncConfiguration(array $options = [])
 * @method SwitchGatewayExpirationPolicy switchGatewayExpirationPolicy(array $options = [])
 * @method SwitchToSubscription switchToSubscription(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TriggerGatewayRemoteSync triggerGatewayRemoteSync(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateGatewayBlockVolume updateGatewayBlockVolume(array $options = [])
 * @method UpdateGatewayFileShare updateGatewayFileShare(array $options = [])
 * @method UpgradeGateway upgradeGateway(array $options = [])
 * @method UploadCSGClientLog uploadCSGClientLog(array $options = [])
 * @method UploadGatewayLog uploadGatewayLog(array $options = [])
 * @method ValidateExpressSyncConfig validateExpressSyncConfig(array $options = [])
 * @method ValidateGatewayName validateGatewayName(array $options = [])
 */
class SgwApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'sgw';

    /** @var string */
    public $version = '2018-05-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hcs_sgw';
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getDeviceNumber()
 * @method $this withDeviceNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ActivateAllInOneGateway extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ActivateGateway extends Rpc
{
}

/**
 * @method string getExpressSyncId()
 * @method $this withExpressSyncId($value)
 * @method string getGatewayShares()
 * @method $this withGatewayShares($value)
 * @method string getGatewayRegions()
 * @method $this withGatewayRegions($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class AddSharesToExpressSync extends Rpc
{
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class AddTagsToGateway extends Rpc
{
}

/**
 * @method string getCryptKey()
 * @method $this withCryptKey($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCryptText()
 * @method $this withCryptText($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CheckActivationKey extends Rpc
{
}

/**
 * @method string getVolumeName()
 * @method $this withVolumeName($value)
 * @method string getBucketEndpoint()
 * @method $this withBucketEndpoint($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 */
class CheckBlockVolumeName extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CheckGatewayEssdSupport extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CheckMnsService extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 */
class CheckRole extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getCreateIfNotExist()
 * @method $this withCreateIfNotExist($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CheckSlrRole extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getGatewayVersion()
 * @method $this withGatewayVersion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CheckUpgradeVersion extends Rpc
{
}

/**
 * @method string getSizeInGB()
 * @method $this withSizeInGB($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CreateCache extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CreateElasticGatewayPrivateZone extends Rpc
{
}

/**
 * @method string getBucketRegion()
 * @method $this withBucketRegion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBucketPrefix()
 * @method $this withBucketPrefix($value)
 */
class CreateExpressSync extends Rpc
{
}

/**
 * @method string getGatewayClass()
 * @method $this withGatewayClass($value)
 * @method string getGatewayVersion()
 * @method $this withGatewayVersion($value)
 * @method string getInitCacheSize()
 * @method $this withInitCacheSize($value)
 * @method string getPostPaid()
 * @method $this withPostPaid($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getReleaseAfterExpiration()
 * @method $this withReleaseAfterExpiration($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 * @method string getInitCacheConfig()
 * @method $this withInitCacheConfig($value)
 * @method string getInitCacheCategory()
 * @method $this withInitCacheCategory($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPublicNetworkBandwidth()
 * @method $this withPublicNetworkBandwidth($value)
 */
class CreateGateway extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getRecovery()
 * @method $this withRecovery($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getChunkSize()
 * @method $this withChunkSize($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getVolumeProtocol()
 * @method $this withVolumeProtocol($value)
 * @method string getChapEnabled()
 * @method $this withChapEnabled($value)
 * @method string getCacheMode()
 * @method $this withCacheMode($value)
 * @method string getLocalFilePath()
 * @method $this withLocalFilePath($value)
 * @method string getOssBucketSsl()
 * @method $this withOssBucketSsl($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getChapInUser()
 * @method $this withChapInUser($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getChapInPassword()
 * @method $this withChapInPassword($value)
 */
class CreateGatewayBlockVolume extends Rpc
{
}

/**
 * @method string getCacheDiskSizeInGB()
 * @method $this withCacheDiskSizeInGB($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCacheDiskCategory()
 * @method $this withCacheDiskCategory($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CreateGatewayCacheDisk extends Rpc
{
}

/**
 * @method string getInPlace()
 * @method $this withInPlace($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getReadWriteClientList()
 * @method $this withReadWriteClientList($value)
 * @method string getBypassCacheRead()
 * @method $this withBypassCacheRead($value)
 * @method string getBackendLimit()
 * @method $this withBackendLimit($value)
 * @method string getSquash()
 * @method $this withSquash($value)
 * @method string getReadOnlyClientList()
 * @method $this withReadOnlyClientList($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getKmsRotatePeriod()
 * @method $this withKmsRotatePeriod($value)
 * @method string getRemoteSyncDownload()
 * @method $this withRemoteSyncDownload($value)
 * @method string getShareProtocol()
 * @method $this withShareProtocol($value)
 * @method string getNfsV4Optimization()
 * @method $this withNfsV4Optimization($value)
 * @method string getAccessBasedEnumeration()
 * @method $this withAccessBasedEnumeration($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getSupportArchive()
 * @method $this withSupportArchive($value)
 * @method string getCacheMode()
 * @method $this withCacheMode($value)
 * @method string getLocalFilePath()
 * @method $this withLocalFilePath($value)
 * @method string getPartialSyncPaths()
 * @method $this withPartialSyncPaths($value)
 * @method string getDownloadLimit()
 * @method $this withDownloadLimit($value)
 * @method string getReadOnlyUserList()
 * @method $this withReadOnlyUserList($value)
 * @method string getFastReclaim()
 * @method $this withFastReclaim($value)
 * @method string getWindowsAcl()
 * @method $this withWindowsAcl($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getTransferAcceleration()
 * @method $this withTransferAcceleration($value)
 * @method string getClientSideCmk()
 * @method $this withClientSideCmk($value)
 * @method string getPathPrefix()
 * @method $this withPathPrefix($value)
 * @method string getBrowsable()
 * @method $this withBrowsable($value)
 * @method string getReadWriteUserList()
 * @method $this withReadWriteUserList($value)
 * @method string getPollingInterval()
 * @method $this withPollingInterval($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getServerSideAlgorithm()
 * @method $this withServerSideAlgorithm($value)
 * @method string getServerSideCmk()
 * @method $this withServerSideCmk($value)
 * @method string getServerSideEncryption()
 * @method $this withServerSideEncryption($value)
 * @method string getIgnoreDelete()
 * @method $this withIgnoreDelete($value)
 * @method string getLagPeriod()
 * @method $this withLagPeriod($value)
 * @method string getDirectIO()
 * @method $this withDirectIO($value)
 * @method string getClientSideEncryption()
 * @method $this withClientSideEncryption($value)
 * @method string getOssBucketSsl()
 * @method $this withOssBucketSsl($value)
 * @method string getRemoteSync()
 * @method $this withRemoteSync($value)
 * @method string getFrontendLimit()
 * @method $this withFrontendLimit($value)
 */
class CreateGatewayFileShare extends Rpc
{
}

/**
 * @method string getSlsLogstore()
 * @method $this withSlsLogstore($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class CreateGatewayLogging extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateGatewaySMBUser extends Rpc
{
}

/**
 * @method string getBackendBucketRegionId()
 * @method $this withBackendBucketRegionId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class CreateStorageBundle extends Rpc
{
}

/**
 * @method string getClientIds()
 * @method $this withClientIds($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteCSGClients extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeleteElasticGatewayPrivateZone extends Rpc
{
}

/**
 * @method string getExpressSyncId()
 * @method $this withExpressSyncId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteExpressSync extends Rpc
{
}

/**
 * @method string getReasonDetail()
 * @method $this withReasonDetail($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getReasonType()
 * @method $this withReasonType($value)
 */
class DeleteGateway extends Rpc
{
}

/**
 * @method string getIsSourceDeletion()
 * @method $this withIsSourceDeletion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeleteGatewayBlockVolumes extends Rpc
{
}

/**
 * @method string getLocalFilePath()
 * @method $this withLocalFilePath($value)
 * @method string getCacheId()
 * @method $this withCacheId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeleteGatewayCacheDisk extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeleteGatewayFileShares extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeleteGatewayLogging extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DeleteGatewaySMBUser extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DeleteStorageBundle extends Rpc
{
}

/**
 * @method string getSizeInGB()
 * @method $this withSizeInGB($value)
 * @method string getCacheConfig()
 * @method $this withCacheConfig($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeployCacheDisk extends Rpc
{
}

/**
 * @method string getEcsInstanceIds()
 * @method $this withEcsInstanceIds($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeployCSGClients extends Rpc
{
}

/**
 * @method string getGatewayClass()
 * @method $this withGatewayClass($value)
 * @method string getGatewayVersion()
 * @method $this withGatewayVersion($value)
 * @method array getDataDisk()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DeployGateway extends Rpc
{

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['CacheConfig'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.CacheConfig'] = $depth1Value['CacheConfig'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeAccountConfig extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeBlockVolumeSnapshots extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeCSGClients extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeCSGClientTasks extends Rpc
{
}

/**
 * @method string getBackendBucketRegionId()
 * @method $this withBackendBucketRegionId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDashboard extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeExpireCaches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getBucketPrefix()
 * @method $this withBucketPrefix($value)
 */
class DescribeExpressSyncs extends Rpc
{
}

/**
 * @method string getIsExternal()
 * @method $this withIsExternal($value)
 * @method string getExpressSyncIds()
 * @method $this withExpressSyncIds($value)
 * @method string getIsCrossRegion()
 * @method $this withIsCrossRegion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeExpressSyncShares extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGateway extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayActions extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayADInfo extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayAuthInfo extends Rpc
{
}

/**
 * @method string getRefresh()
 * @method $this withRefresh($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayBlockVolumes extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeGatewayBucketCaches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayCaches extends Rpc
{
}

/**
 * @method string getSizeInGB()
 * @method $this withSizeInGB($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayCapacityLimit extends Rpc
{
}

/**
 * @method string getGatewayLocation()
 * @method $this withGatewayLocation($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayCategories extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayClasses extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayCredential extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayDNS extends Rpc
{
}

/**
 * @method string getRefresh()
 * @method $this withRefresh($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayFileShares extends Rpc
{
}

/**
 * @method string getFilePath()
 * @method $this withFilePath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayFileStatus extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeGatewayImages extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayInfo extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayLDAPInfo extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayLocations extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayLogging extends Rpc
{
}

/**
 * @method string getLogFilePath()
 * @method $this withLogFilePath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayLogs extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayModificationClasses extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewayNFSClients extends Rpc
{
}

/**
 * @method string getEcsInstanceIds()
 * @method $this withEcsInstanceIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DescribeGateways extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getGatewayRegionId()
 * @method $this withGatewayRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeGatewaysForCms extends Rpc
{
}

/**
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeGatewaySMBUsers extends Rpc
{
}

/**
 * @method string getGatewayIds()
 * @method $this withGatewayIds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTagCategory()
 * @method $this withTagCategory($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DescribeGatewaysTags extends Rpc
{
}

/**
 * @method string getGatewayCategory()
 * @method $this withGatewayCategory($value)
 * @method string getGatewayLocation()
 * @method $this withGatewayLocation($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getTargetAccountId()
 * @method $this withTargetAccountId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayStatistics extends Rpc
{
}

/**
 * @method string getGatewayRegionId()
 * @method $this withGatewayRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayStock extends Rpc
{
}

/**
 * @method string getGatewayCategory()
 * @method $this withGatewayCategory($value)
 * @method string getGatewayLocation()
 * @method $this withGatewayLocation($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeGatewayTypes extends Rpc
{
}

/**
 * @method string getKmsKey()
 * @method $this withKmsKey($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeKmsKey extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeMqttConfig extends Rpc
{
}

/**
 * @method string getBucketEndpoint()
 * @method $this withBucketEndpoint($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DescribeOssBucketInfo extends Rpc
{
}

/**
 * @method string getBucketEndpoint()
 * @method $this withBucketEndpoint($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeOssBuckets extends Rpc
{
}

/**
 * @method string getGatewayClass()
 * @method $this withGatewayClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribePayAsYouGoPrice extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getBucketRegion()
 * @method $this withBucketRegion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 */
class DescribeSharesBucketInfoForExpressSync extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DescribeStorageBundle extends Rpc
{
}

/**
 * @method string getBackendBucketRegionId()
 * @method $this withBackendBucketRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeStorageBundles extends Rpc
{
}

/**
 * @method string getGatewayClass()
 * @method $this withGatewayClass($value)
 * @method string getCacheSSDSize()
 * @method $this withCacheSSDSize($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getPeriodQuantity()
 * @method $this withPeriodQuantity($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCacheCloudEfficiencySize()
 * @method $this withCacheCloudEfficiencySize($value)
 */
class DescribeSubscriptionPrice extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserBusinessStatus extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DescribeVpcs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class DescribeVSwitches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DisableGatewayLogging extends Rpc
{
}

/**
 * @method string getNFSVersion()
 * @method $this withNFSVersion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class DisableGatewayNFSVersion extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class EnableGatewayIpv6 extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class EnableGatewayLogging extends Rpc
{
}

/**
 * @method string getLocalFilePath()
 * @method $this withLocalFilePath($value)
 * @method string getNewSizeInGB()
 * @method $this withNewSizeInGB($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ExpandCacheDisk extends Rpc
{
}

/**
 * @method string getNewNetworkBandwidth()
 * @method $this withNewNetworkBandwidth($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ExpandGatewayNetworkBandwidth extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class GenerateGatewayToken extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class GenerateMqttToken extends Rpc
{
}

/**
 * @method string getTokenType()
 * @method $this withTokenType($value)
 * @method string getExpireInSeconds()
 * @method $this withExpireInSeconds($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class GenerateStsToken extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 */
class ListTagResources extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ModifyGateway extends Rpc
{
}

/**
 * @method string getCacheConfig()
 * @method $this withCacheConfig($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ModifyGatewayBlockVolume extends Rpc
{
}

/**
 * @method string getGatewayClass()
 * @method $this withGatewayClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ModifyGatewayClass extends Rpc
{
}

/**
 * @method string getCacheConfig()
 * @method $this withCacheConfig($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ModifyGatewayFileShare extends Rpc
{
}

/**
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ModifyGatewayFileShareWatermark extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class ModifyStorageBundle extends Rpc
{
}

class OpenSgwService extends Rpc
{
}

/**
 * @method string getOperateAction()
 * @method $this withOperateAction($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class OperateGateway extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ReleaseService extends Rpc
{
}

/**
 * @method string getExpressSyncId()
 * @method $this withExpressSyncId($value)
 * @method string getGatewayShares()
 * @method $this withGatewayShares($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class RemoveSharesFromExpressSync extends Rpc
{
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class RemoveTagsFromGateway extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class ReportBlockVolumes extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class ReportFileShares extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayStatus()
 * @method $this withGatewayStatus($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class ReportGatewayInfo extends Rpc
{
}

/**
 * @method string getClientUUID()
 * @method $this withClientUUID($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class ReportGatewayUsage extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ResetGatewayPassword extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getShareProtocol()
 * @method $this withShareProtocol($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class RestartFileShares extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getServerIp()
 * @method $this withServerIp($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 */
class SetGatewayADInfo extends Rpc
{
}

/**
 * @method string getDnsServer()
 * @method $this withDnsServer($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class SetGatewayDNS extends Rpc
{
}

/**
 * @method string getIsTls()
 * @method $this withIsTls($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getRootDN()
 * @method $this withRootDN($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getServerIp()
 * @method $this withServerIp($value)
 * @method string getBaseDN()
 * @method $this withBaseDN($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 */
class SetGatewayLDAPInfo extends Rpc
{
}

/**
 * @method string getReverseSyncInternalSecond()
 * @method $this withReverseSyncInternalSecond($value)
 * @method string getClientIds()
 * @method $this withClientIds($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getIsReverseSync()
 * @method $this withIsReverseSync($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SwitchCSGClientsReverseSyncConfiguration extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class SwitchGatewayExpirationPolicy extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class SwitchToSubscription extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
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
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class TriggerGatewayRemoteSync extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTagKey()
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
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

/**
 * @method string getChapEnabled()
 * @method $this withChapEnabled($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getChapInUser()
 * @method $this withChapInUser($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getChapInPassword()
 * @method $this withChapInPassword($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayBlockVolume extends Rpc
{
}

/**
 * @method string getClientSideCmk()
 * @method $this withClientSideCmk($value)
 * @method string getInPlace()
 * @method $this withInPlace($value)
 * @method string getBrowsable()
 * @method $this withBrowsable($value)
 * @method string getReadWriteUserList()
 * @method $this withReadWriteUserList($value)
 * @method string getPollingInterval()
 * @method $this withPollingInterval($value)
 * @method string getReadWriteClientList()
 * @method $this withReadWriteClientList($value)
 * @method string getBypassCacheRead()
 * @method $this withBypassCacheRead($value)
 * @method string getBackendLimit()
 * @method $this withBackendLimit($value)
 * @method string getSquash()
 * @method $this withSquash($value)
 * @method string getReadOnlyClientList()
 * @method $this withReadOnlyClientList($value)
 * @method string getServerSideCmk()
 * @method $this withServerSideCmk($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getKmsRotatePeriod()
 * @method $this withKmsRotatePeriod($value)
 * @method string getRemoteSyncDownload()
 * @method $this withRemoteSyncDownload($value)
 * @method string getServerSideEncryption()
 * @method $this withServerSideEncryption($value)
 * @method string getNfsV4Optimization()
 * @method $this withNfsV4Optimization($value)
 * @method string getAccessBasedEnumeration()
 * @method $this withAccessBasedEnumeration($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getIgnoreDelete()
 * @method $this withIgnoreDelete($value)
 * @method string getLagPeriod()
 * @method $this withLagPeriod($value)
 * @method string getDirectIO()
 * @method $this withDirectIO($value)
 * @method string getClientSideEncryption()
 * @method $this withClientSideEncryption($value)
 * @method string getCacheMode()
 * @method $this withCacheMode($value)
 * @method string getDownloadLimit()
 * @method $this withDownloadLimit($value)
 * @method string getReadOnlyUserList()
 * @method $this withReadOnlyUserList($value)
 * @method string getFastReclaim()
 * @method $this withFastReclaim($value)
 * @method string getWindowsAcl()
 * @method $this withWindowsAcl($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIndexId()
 * @method $this withIndexId($value)
 * @method string getTransferAcceleration()
 * @method $this withTransferAcceleration($value)
 * @method string getRemoteSync()
 * @method $this withRemoteSync($value)
 * @method string getFrontendLimit()
 * @method $this withFrontendLimit($value)
 */
class UpdateGatewayFileShare extends Rpc
{
}

/**
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpgradeGateway extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getClientRegionId()
 * @method $this withClientRegionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class UploadCSGClientLog extends Rpc
{
}

/**
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UploadGatewayLog extends Rpc
{
}

/**
 * @method string getBucketRegion()
 * @method $this withBucketRegion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBucketPrefix()
 * @method $this withBucketPrefix($value)
 */
class ValidateExpressSyncConfig extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getStorageBundleId()
 * @method $this withStorageBundleId($value)
 */
class ValidateGatewayName extends Rpc
{
}
