<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetAIVideoTagResult getAIVideoTagResult(array $options = [])
 * @method GetUploadDetails getUploadDetails(array $options = [])
 * @method DescribeVodStorageData describeVodStorageData(array $options = [])
 * @method DescribeVodAIData describeVodAIData(array $options = [])
 * @method DescribeVodTranscodeData describeVodTranscodeData(array $options = [])
 * @method DeleteMultipartUpload deleteMultipartUpload(array $options = [])
 * @method GetAttachedMediaInfo getAttachedMediaInfo(array $options = [])
 * @method DeleteAttachedMedia deleteAttachedMedia(array $options = [])
 * @method UpdateAttachedMediaInfos updateAttachedMediaInfos(array $options = [])
 * @method AttachAppPolicyToIdentity attachAppPolicyToIdentity(array $options = [])
 * @method DetachAppPolicyFromIdentity detachAppPolicyFromIdentity(array $options = [])
 * @method ListAppPoliciesForIdentity listAppPoliciesForIdentity(array $options = [])
 * @method CreateAppInfo createAppInfo(array $options = [])
 * @method GetAppInfos getAppInfos(array $options = [])
 * @method UpdateAppInfo updateAppInfo(array $options = [])
 * @method DeleteAppInfo deleteAppInfo(array $options = [])
 * @method ListAppInfo listAppInfo(array $options = [])
 * @method MoveAppResource moveAppResource(array $options = [])
 * @method DeleteMessageCallback deleteMessageCallback(array $options = [])
 * @method GetTranscodeSummary getTranscodeSummary(array $options = [])
 * @method ListTranscodeTask listTranscodeTask(array $options = [])
 * @method GetTranscodeTask getTranscodeTask(array $options = [])
 * @method GetURLUploadInfos getURLUploadInfos(array $options = [])
 * @method UpdateTranscodeTemplateGroup updateTranscodeTemplateGroup(array $options = [])
 * @method AddTranscodeTemplateGroup addTranscodeTemplateGroup(array $options = [])
 * @method DeleteTranscodeTemplateGroup deleteTranscodeTemplateGroup(array $options = [])
 * @method GetTranscodeTemplateGroup getTranscodeTemplateGroup(array $options = [])
 * @method SetDefaultTranscodeTemplateGroup setDefaultTranscodeTemplateGroup(array $options = [])
 * @method ListTranscodeTemplateGroup listTranscodeTemplateGroup(array $options = [])
 * @method GetAIMediaAuditJob getAIMediaAuditJob(array $options = [])
 * @method SubmitAIMediaAuditJob submitAIMediaAuditJob(array $options = [])
 * @method GetMediaAuditResult getMediaAuditResult(array $options = [])
 * @method GetMediaAuditResultDetail getMediaAuditResultDetail(array $options = [])
 * @method GetMediaAuditResultTimeline getMediaAuditResultTimeline(array $options = [])
 * @method AddAITemplate addAITemplate(array $options = [])
 * @method DeleteAITemplate deleteAITemplate(array $options = [])
 * @method UpdateAITemplate updateAITemplate(array $options = [])
 * @method GetAITemplate getAITemplate(array $options = [])
 * @method ListAITemplate listAITemplate(array $options = [])
 * @method GetDefaultAITemplate getDefaultAITemplate(array $options = [])
 * @method SetDefaultAITemplate setDefaultAITemplate(array $options = [])
 * @method DescribeVodDomainLog describeVodDomainLog(array $options = [])
 * @method DescribeVodDomainCertificateInfo describeVodDomainCertificateInfo(array $options = [])
 * @method DescribeVodDomainTrafficData describeVodDomainTrafficData(array $options = [])
 * @method DescribeVodDomainBpsData describeVodDomainBpsData(array $options = [])
 * @method DescribeVodDomainUsageData describeVodDomainUsageData(array $options = [])
 * @method DescribeVodCertificateList describeVodCertificateList(array $options = [])
 * @method BatchStopVodDomain batchStopVodDomain(array $options = [])
 * @method DeleteVodDomain deleteVodDomain(array $options = [])
 * @method SetVodDomainCertificate setVodDomainCertificate(array $options = [])
 * @method DeleteVodSpecificConfig deleteVodSpecificConfig(array $options = [])
 * @method BatchSetVodDomainConfigs batchSetVodDomainConfigs(array $options = [])
 * @method AddVodDomain addVodDomain(array $options = [])
 * @method DescribeVodRefreshQuota describeVodRefreshQuota(array $options = [])
 * @method DescribeVodRefreshTasks describeVodRefreshTasks(array $options = [])
 * @method DescribeVodDomainConfigs describeVodDomainConfigs(array $options = [])
 * @method DescribeVodUserDomains describeVodUserDomains(array $options = [])
 * @method UpdateVodDomain updateVodDomain(array $options = [])
 * @method RefreshVodObjectCaches refreshVodObjectCaches(array $options = [])
 * @method PreloadVodObjectCaches preloadVodObjectCaches(array $options = [])
 * @method BatchStartVodDomain batchStartVodDomain(array $options = [])
 * @method DescribeVodDomainDetail describeVodDomainDetail(array $options = [])
 * @method DeleteVodTemplate deleteVodTemplate(array $options = [])
 * @method GetVodTemplate getVodTemplate(array $options = [])
 * @method ListVodTemplate listVodTemplate(array $options = [])
 * @method UpdateVodTemplate updateVodTemplate(array $options = [])
 * @method AddVodTemplate addVodTemplate(array $options = [])
 * @method CreateUploadAttachedMedia createUploadAttachedMedia(array $options = [])
 * @method RegisterMedia registerMedia(array $options = [])
 * @method DeleteWatermark deleteWatermark(array $options = [])
 * @method GetWatermark getWatermark(array $options = [])
 * @method SetDefaultWatermark setDefaultWatermark(array $options = [])
 * @method ListWatermark listWatermark(array $options = [])
 * @method UpdateWatermark updateWatermark(array $options = [])
 * @method AddWatermark addWatermark(array $options = [])
 * @method GetMediaDNAResult getMediaDNAResult(array $options = [])
 * @method DeleteMezzanines deleteMezzanines(array $options = [])
 * @method UpdateImageInfos updateImageInfos(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method ListAuditSecurityIp listAuditSecurityIp(array $options = [])
 * @method SetAuditSecurityIp setAuditSecurityIp(array $options = [])
 * @method UploadMediaByURL uploadMediaByURL(array $options = [])
 * @method UpdateVideoInfos updateVideoInfos(array $options = [])
 * @method SearchMedia searchMedia(array $options = [])
 * @method GetVideoInfos getVideoInfos(array $options = [])
 * @method SubmitPreprocessJobs submitPreprocessJobs(array $options = [])
 * @method DescribePlayVideoStatis describePlayVideoStatis(array $options = [])
 * @method DescribePlayUserTotal describePlayUserTotal(array $options = [])
 * @method DescribePlayUserAvg describePlayUserAvg(array $options = [])
 * @method DescribePlayTopVideos describePlayTopVideos(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method SubmitTranscodeJobs submitTranscodeJobs(array $options = [])
 * @method ListLiveRecordVideo listLiveRecordVideo(array $options = [])
 * @method CreateAudit createAudit(array $options = [])
 * @method GetAuditHistory getAuditHistory(array $options = [])
 * @method ListAIJob listAIJob(array $options = [])
 * @method SubmitAIJob submitAIJob(array $options = [])
 * @method GetImageInfo getImageInfo(array $options = [])
 * @method DeleteStream deleteStream(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method UpdateEditingProject updateEditingProject(array $options = [])
 * @method SetEditingProjectMaterials setEditingProjectMaterials(array $options = [])
 * @method SearchEditingProject searchEditingProject(array $options = [])
 * @method ProduceEditingProjectVideo produceEditingProjectVideo(array $options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials(array $options = [])
 * @method GetEditingProject getEditingProject(array $options = [])
 * @method DeleteEditingProject deleteEditingProject(array $options = [])
 * @method AddEditingProject addEditingProject(array $options = [])
 * @method GetMezzanineInfo getMezzanineInfo(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method GetCategories getCategories(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method AddCategory addCategory(array $options = [])
 * @method GetPlayInfo getPlayInfo(array $options = [])
 * @method CreateUploadImage createUploadImage(array $options = [])
 * @method SetMessageCallback setMessageCallback(array $options = [])
 * @method GetMessageCallback getMessageCallback(array $options = [])
 * @method UpdateVideoInfo updateVideoInfo(array $options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth(array $options = [])
 * @method GetVideoList getVideoList(array $options = [])
 * @method GetVideoInfo getVideoInfo(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method RefreshUploadVideo refreshUploadVideo(array $options = [])
 * @method CreateUploadVideo createUploadVideo(array $options = [])
 */
class VodApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'vod';

    /** @var string */
    public $version = '2017-03-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vod';
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
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetAIVideoTagResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class GetUploadDetails extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodStorageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAIType()
 * @method $this withAIType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodAIData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStorage()
 * @method $this withStorage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeVodTranscodeData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class DeleteMultipartUpload extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetAttachedMediaInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAttachedMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateAttachedMediaInfos extends Rpc
{
}

/**
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachAppPolicyToIdentity extends Rpc
{
}

/**
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPolicyNames()
 * @method $this withPolicyNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachAppPolicyFromIdentity extends Rpc
{
}

/**
 * @method string getIdentityName()
 * @method $this withIdentityName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIdentityType()
 * @method $this withIdentityType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAppPoliciesForIdentity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateAppInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetAppInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAppInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAppInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAppInfo extends Rpc
{
}

/**
 * @method string getTargetAppId()
 * @method $this withTargetAppId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class MoveAppResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMessageCallback extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class GetTranscodeSummary extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTranscodeTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTranscodeTaskId()
 * @method $this withTranscodeTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetTranscodeTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetURLUploadInfos extends Rpc
{
}

/**
 * @method string getTranscodeTemplateList()
 * @method $this withTranscodeTemplateList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLocked()
 * @method $this withLocked($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class UpdateTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getTranscodeTemplateList()
 * @method $this withTranscodeTemplateList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class AddTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTranscodeTemplateIds()
 * @method $this withTranscodeTemplateIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 * @method string getForceDelGroup()
 * @method $this withForceDelGroup($value)
 */
class DeleteTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class GetTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTranscodeTemplateGroupId()
 * @method $this withTranscodeTemplateGroupId($value)
 */
class SetDefaultTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTranscodeTemplateGroup extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetAIMediaAuditJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class SubmitAIMediaAuditJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaAuditResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaAuditResultDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaAuditResultTimeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetDefaultAITemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class SetDefaultAITemplate extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainLog extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainTrafficData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVodDomainBpsData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 */
class DescribeVodDomainUsageData extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodCertificateList extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStopVodDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVodDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class SetVodDomainCertificate extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVodSpecificConfig extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchSetVodDomainConfigs extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddVodDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodRefreshQuota extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeVodRefreshTasks extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainConfigs extends Rpc
{
}

/**
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 */
class DescribeVodUserDomains extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateVodDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class RefreshVodObjectCaches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PreloadVodObjectCaches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStartVodDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodDomainDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVodTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVodTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListVodTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateVodTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubTemplateType()
 * @method $this withSubTemplateType($value)
 */
class AddVodTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateIds()
 * @method $this withCateIds($value)
 * @method string getIcon()
 * @method $this withIcon($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getMediaExt()
 * @method $this withMediaExt($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadAttachedMedia extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegisterMetadatas()
 * @method $this withRegisterMetadatas($value)
 * @method string getWorkFlowId()
 * @method $this withWorkFlowId($value)
 */
class RegisterMedia extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteWatermark extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetWatermark extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDefaultWatermark extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListWatermark extends Rpc
{
}

/**
 * @method string getWatermarkId()
 * @method $this withWatermarkId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWatermarkConfig()
 * @method $this withWatermarkConfig($value)
 */
class UpdateWatermark extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getWatermarkConfig()
 * @method $this withWatermarkConfig($value)
 */
class AddWatermark extends Rpc
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
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetMediaDNAResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class DeleteMezzanines extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateImageInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageURLs()
 * @method $this withImageURLs($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeleteImageType()
 * @method $this withDeleteImageType($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class ListAuditSecurityIp extends Rpc
{
}

/**
 * @method string getOperateMode()
 * @method $this withOperateMode($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getIps()
 * @method $this withIps($value)
 */
class SetAuditSecurityIp extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getUploadMetadatas()
 * @method $this withUploadMetadatas($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 * @method string getMessageCallback()
 * @method $this withMessageCallback($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 */
class UploadMediaByURL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateVideoInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMatch()
 * @method $this withMatch($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScrollToken()
 * @method $this withScrollToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class SearchMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class GetVideoInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPreprocessType()
 * @method $this withPreprocessType($value)
 */
class SubmitPreprocessJobs extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayVideoStatis extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayUserTotal extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePlayUserAvg extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizDate()
 * @method $this withBizDate($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribePlayTopVideos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class ListSnapshots extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getEncryptConfig()
 * @method $this withEncryptConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitTranscodeJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class ListLiveRecordVideo extends Rpc
{
}

/**
 * @method string getAuditContent()
 * @method $this withAuditContent($value)
 */
class CreateAudit extends Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class GetAuditHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAIJob extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class SubmitAIJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetImageInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteStream extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getSpecifiedOffsetTime()
 * @method $this withSpecifiedOffsetTime($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getSpriteSnapshotConfig()
 * @method $this withSpriteSnapshotConfig($value)
 * @method string getSnapshotTemplateId()
 * @method $this withSnapshotTemplateId($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class SubmitSnapshotJob extends Rpc
{
}

/**
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class UpdateEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaterialIds()
 * @method $this withMaterialIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SetEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SearchEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaMetadata()
 * @method $this withMediaMetadata($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getProduceConfig()
 * @method $this withProduceConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ProduceEditingProjectVideo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaterialType()
 * @method $this withMaterialType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEditingProjectMaterials extends Rpc
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
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getProjectIds()
 * @method $this withProjectIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteEditingProject extends Rpc
{
}

/**
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getDivision()
 * @method $this withDivision($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 */
class AddEditingProject extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPreviewSegment()
 * @method $this withPreviewSegment($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 */
class GetMezzanineInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class UpdateCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class GetCategories extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class AddCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getPlayerVersion()
 * @method $this withPlayerVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResultType()
 * @method $this withResultType($value)
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getAuthInfo()
 * @method $this withAuthInfo($value)
 */
class GetPlayInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageExt()
 * @method $this withImageExt($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOriginalFileName()
 * @method $this withOriginalFileName($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadImage extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEventTypeList()
 * @method $this withEventTypeList($value)
 * @method string getMnsQueueName()
 * @method $this withMnsQueueName($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackType()
 * @method $this withCallbackType($value)
 * @method string getCallbackSwitch()
 * @method $this withCallbackSwitch($value)
 * @method string getMnsEndpoint()
 * @method $this withMnsEndpoint($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAuthSwitch()
 * @method $this withAuthSwitch($value)
 * @method string getCallbackURL()
 * @method $this withCallbackURL($value)
 */
class SetMessageCallback extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetMessageCallback extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getDownloadSwitch()
 * @method $this withDownloadSwitch($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCustomMediaInfo()
 * @method $this withCustomMediaInfo($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateVideoInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getAuthInfoTimeout()
 * @method $this withAuthInfoTimeout($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVideoPlayAuth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 */
class GetVideoList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVideoInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoIds()
 * @method $this withVideoIds($value)
 */
class DeleteVideo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RefreshUploadVideo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTranscodeMode()
 * @method $this withTranscodeMode($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getCustomMediaInfo()
 * @method $this withCustomMediaInfo($value)
 */
class CreateUploadVideo extends Rpc
{
}
