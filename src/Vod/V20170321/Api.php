<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteMultipartUpload deleteMultipartUpload(array $options = [])
 * @method MoveAppResource moveAppResource(array $options = [])
 * @method ListAppInfo listAppInfo(array $options = [])
 * @method DeleteAppInfo deleteAppInfo(array $options = [])
 * @method UpdateAppInfo updateAppInfo(array $options = [])
 * @method GetAppInfos getAppInfos(array $options = [])
 * @method CreateAppInfo createAppInfo(array $options = [])
 * @method DeleteMessageCallback deleteMessageCallback(array $options = [])
 * @method AttachAppPolicyToIdentity attachAppPolicyToIdentity(array $options = [])
 * @method DetachAppPolicyFromIdentity detachAppPolicyFromIdentity(array $options = [])
 * @method ListAppPoliciesForIdentity listAppPoliciesForIdentity(array $options = [])
 * @method GetTranscodeSummary getTranscodeSummary(array $options = [])
 * @method ListTranscodeTask listTranscodeTask(array $options = [])
 * @method GetTranscodeTask getTranscodeTask(array $options = [])
 * @method DeleteAttachedMedia deleteAttachedMedia(array $options = [])
 * @method UpdateAttachedMediaInfos updateAttachedMediaInfos(array $options = [])
 * @method GetAttachedMediaInfo getAttachedMediaInfo(array $options = [])
 * @method GetURLUploadInfos getURLUploadInfos(array $options = [])
 * @method SetDefaultAITemplate setDefaultAITemplate(array $options = [])
 * @method GetDefaultAITemplate getDefaultAITemplate(array $options = [])
 * @method ListAITemplate listAITemplate(array $options = [])
 * @method GetAITemplate getAITemplate(array $options = [])
 * @method UpdateAITemplate updateAITemplate(array $options = [])
 * @method DeleteAITemplate deleteAITemplate(array $options = [])
 * @method AddAITemplate addAITemplate(array $options = [])
 * @method GetMediaAuditResultTimeline getMediaAuditResultTimeline(array $options = [])
 * @method DescribeVodDomainLog describeVodDomainLog(array $options = [])
 * @method DescribeVodDomainTrafficData describeVodDomainTrafficData(array $options = [])
 * @method DescribeVodDomainBpsData describeVodDomainBpsData(array $options = [])
 * @method DescribeVodRefreshQuota describeVodRefreshQuota(array $options = [])
 * @method DescribeVodRefreshTasks describeVodRefreshTasks(array $options = [])
 * @method RefreshVodObjectCaches refreshVodObjectCaches(array $options = [])
 * @method PreloadVodObjectCaches preloadVodObjectCaches(array $options = [])
 * @method GetMediaAuditResultDetail getMediaAuditResultDetail(array $options = [])
 * @method GetMediaAuditResult getMediaAuditResult(array $options = [])
 * @method SubmitAIMediaAuditJob submitAIMediaAuditJob(array $options = [])
 * @method GetAIMediaAuditJob getAIMediaAuditJob(array $options = [])
 * @method UpdateTranscodeTemplateGroup updateTranscodeTemplateGroup(array $options = [])
 * @method AddTranscodeTemplateGroup addTranscodeTemplateGroup(array $options = [])
 * @method DeleteTranscodeTemplateGroup deleteTranscodeTemplateGroup(array $options = [])
 * @method GetTranscodeTemplateGroup getTranscodeTemplateGroup(array $options = [])
 * @method SetDefaultTranscodeTemplateGroup setDefaultTranscodeTemplateGroup(array $options = [])
 * @method ListTranscodeTemplateGroup listTranscodeTemplateGroup(array $options = [])
 * @method UpdateVodTemplate updateVodTemplate(array $options = [])
 * @method ListVodTemplate listVodTemplate(array $options = [])
 * @method GetVodTemplate getVodTemplate(array $options = [])
 * @method DeleteVodTemplate deleteVodTemplate(array $options = [])
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
 * @method GetVideoInfos getVideoInfos(array $options = [])
 * @method SearchMedia searchMedia(array $options = [])
 * @method SubmitPreprocessJobs submitPreprocessJobs(array $options = [])
 * @method DescribePlayVideoStatis describePlayVideoStatis(array $options = [])
 * @method DescribePlayUserTotal describePlayUserTotal(array $options = [])
 * @method DescribePlayUserAvg describePlayUserAvg(array $options = [])
 * @method DescribePlayTopVideos describePlayTopVideos(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method EditLiveRecordVideo editLiveRecordVideo(array $options = [])
 * @method AddFaceRegistration addFaceRegistration(array $options = [])
 * @method SubmitTranscodeJobs submitTranscodeJobs(array $options = [])
 * @method ListLiveRecordVideo listLiveRecordVideo(array $options = [])
 * @method CreateAudit createAudit(array $options = [])
 * @method GetAuditHistory getAuditHistory(array $options = [])
 * @method ListAIJob listAIJob(array $options = [])
 * @method SubmitAIJob submitAIJob(array $options = [])
 * @method GetImageInfo getImageInfo(array $options = [])
 * @method DeleteStream deleteStream(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method SetEditingProjectMaterials setEditingProjectMaterials(array $options = [])
 * @method UpdateEditingProject updateEditingProject(array $options = [])
 * @method SearchEditingProject searchEditingProject(array $options = [])
 * @method ProduceEditingProjectVideo produceEditingProjectVideo(array $options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials(array $options = [])
 * @method GetEditingProject getEditingProject(array $options = [])
 * @method AddEditingProject addEditingProject(array $options = [])
 * @method DeleteEditingProject deleteEditingProject(array $options = [])
 * @method GetMezzanineInfo getMezzanineInfo(array $options = [])
 * @method GetFileInfo getFileInfo(array $options = [])
 * @method GetCategories getCategories(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method AddCategory addCategory(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method GetPlayInfo getPlayInfo(array $options = [])
 * @method CreateUploadImage createUploadImage(array $options = [])
 * @method SetMessageCallback setMessageCallback(array $options = [])
 * @method GetMessageCallback getMessageCallback(array $options = [])
 * @method UpdateVideoInfo updateVideoInfo(array $options = [])
 * @method GetVideoList getVideoList(array $options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth(array $options = [])
 * @method GetVideoInfo getVideoInfo(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method RefreshUploadVideo refreshUploadVideo(array $options = [])
 * @method CreateUploadVideo createUploadVideo(array $options = [])
 */
class VodApiResolver
{
    use ApiResolverTrait;
}

class V20170321Rpc extends Rpc
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
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class DeleteMultipartUpload extends V20170321Rpc
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
class MoveAppResource extends V20170321Rpc
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
class ListAppInfo extends V20170321Rpc
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
class DeleteAppInfo extends V20170321Rpc
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
class UpdateAppInfo extends V20170321Rpc
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
class GetAppInfos extends V20170321Rpc
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
class CreateAppInfo extends V20170321Rpc
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
class DeleteMessageCallback extends V20170321Rpc
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
class AttachAppPolicyToIdentity extends V20170321Rpc
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
class DetachAppPolicyFromIdentity extends V20170321Rpc
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
class ListAppPoliciesForIdentity extends V20170321Rpc
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
class GetTranscodeSummary extends V20170321Rpc
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
class ListTranscodeTask extends V20170321Rpc
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
class GetTranscodeTask extends V20170321Rpc
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
class DeleteAttachedMedia extends V20170321Rpc
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
class UpdateAttachedMediaInfos extends V20170321Rpc
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
class GetAttachedMediaInfo extends V20170321Rpc
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
class GetURLUploadInfos extends V20170321Rpc
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
class SetDefaultAITemplate extends V20170321Rpc
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
class GetDefaultAITemplate extends V20170321Rpc
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
class ListAITemplate extends V20170321Rpc
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
class GetAITemplate extends V20170321Rpc
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
class UpdateAITemplate extends V20170321Rpc
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
class DeleteAITemplate extends V20170321Rpc
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
class AddAITemplate extends V20170321Rpc
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
class GetMediaAuditResultTimeline extends V20170321Rpc
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
class DescribeVodDomainLog extends V20170321Rpc
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
class DescribeVodDomainTrafficData extends V20170321Rpc
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
class DescribeVodDomainBpsData extends V20170321Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVodRefreshQuota extends V20170321Rpc
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
class DescribeVodRefreshTasks extends V20170321Rpc
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
class RefreshVodObjectCaches extends V20170321Rpc
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
class PreloadVodObjectCaches extends V20170321Rpc
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
class GetMediaAuditResultDetail extends V20170321Rpc
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
class GetMediaAuditResult extends V20170321Rpc
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
class SubmitAIMediaAuditJob extends V20170321Rpc
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
class GetAIMediaAuditJob extends V20170321Rpc
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
class UpdateTranscodeTemplateGroup extends V20170321Rpc
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
class AddTranscodeTemplateGroup extends V20170321Rpc
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
class DeleteTranscodeTemplateGroup extends V20170321Rpc
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
class GetTranscodeTemplateGroup extends V20170321Rpc
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
class SetDefaultTranscodeTemplateGroup extends V20170321Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTranscodeTemplateGroup extends V20170321Rpc
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
class UpdateVodTemplate extends V20170321Rpc
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
class ListVodTemplate extends V20170321Rpc
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
class GetVodTemplate extends V20170321Rpc
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
class DeleteVodTemplate extends V20170321Rpc
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
class AddVodTemplate extends V20170321Rpc
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
class CreateUploadAttachedMedia extends V20170321Rpc
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
class RegisterMedia extends V20170321Rpc
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
class DeleteWatermark extends V20170321Rpc
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
class GetWatermark extends V20170321Rpc
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
class SetDefaultWatermark extends V20170321Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListWatermark extends V20170321Rpc
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
class UpdateWatermark extends V20170321Rpc
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
class AddWatermark extends V20170321Rpc
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
class GetMediaDNAResult extends V20170321Rpc
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
class DeleteMezzanines extends V20170321Rpc
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
class UpdateImageInfos extends V20170321Rpc
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
class DeleteImage extends V20170321Rpc
{
}

/**
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class ListAuditSecurityIp extends V20170321Rpc
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
class SetAuditSecurityIp extends V20170321Rpc
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
class UploadMediaByURL extends V20170321Rpc
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
class UpdateVideoInfos extends V20170321Rpc
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
class GetVideoInfos extends V20170321Rpc
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
class SearchMedia extends V20170321Rpc
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
class SubmitPreprocessJobs extends V20170321Rpc
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
class DescribePlayVideoStatis extends V20170321Rpc
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
class DescribePlayUserTotal extends V20170321Rpc
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
class DescribePlayUserAvg extends V20170321Rpc
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
class DescribePlayTopVideos extends V20170321Rpc
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
class ListSnapshots extends V20170321Rpc
{
}

/**
 * @method string getSnapshots()
 * @method $this withSnapshots($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EditLiveRecordVideo extends V20170321Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonLibrary()
 * @method $this withPersonLibrary($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 */
class AddFaceRegistration extends V20170321Rpc
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
class SubmitTranscodeJobs extends V20170321Rpc
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
class ListLiveRecordVideo extends V20170321Rpc
{
}

/**
 * @method string getAuditContent()
 * @method $this withAuditContent($value)
 */
class CreateAudit extends V20170321Rpc
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
class GetAuditHistory extends V20170321Rpc
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
class ListAIJob extends V20170321Rpc
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
 * @method string getMediaType()
 * @method $this withMediaType($value)
 */
class SubmitAIJob extends V20170321Rpc
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
class GetImageInfo extends V20170321Rpc
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
class DeleteStream extends V20170321Rpc
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
class SubmitSnapshotJob extends V20170321Rpc
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
class SetEditingProjectMaterials extends V20170321Rpc
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
class UpdateEditingProject extends V20170321Rpc
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
class SearchEditingProject extends V20170321Rpc
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
class ProduceEditingProjectVideo extends V20170321Rpc
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
class GetEditingProjectMaterials extends V20170321Rpc
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
class GetEditingProject extends V20170321Rpc
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
class AddEditingProject extends V20170321Rpc
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
class DeleteEditingProject extends V20170321Rpc
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
class GetMezzanineInfo extends V20170321Rpc
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
class GetFileInfo extends V20170321Rpc
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
class GetCategories extends V20170321Rpc
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
class UpdateCategory extends V20170321Rpc
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
class AddCategory extends V20170321Rpc
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
class DeleteCategory extends V20170321Rpc
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
class GetPlayInfo extends V20170321Rpc
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
class CreateUploadImage extends V20170321Rpc
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
class SetMessageCallback extends V20170321Rpc
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
class GetMessageCallback extends V20170321Rpc
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
class UpdateVideoInfo extends V20170321Rpc
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
class GetVideoList extends V20170321Rpc
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
class GetVideoPlayAuth extends V20170321Rpc
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
class GetVideoInfo extends V20170321Rpc
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
class DeleteVideo extends V20170321Rpc
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
class RefreshUploadVideo extends V20170321Rpc
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
class CreateUploadVideo extends V20170321Rpc
{
}
