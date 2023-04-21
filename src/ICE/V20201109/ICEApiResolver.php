<?php

namespace AlibabaCloud\ICE\V20201109;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCategory addCategory(array $options = [])
 * @method AddEditingProjectMaterials addEditingProjectMaterials(array $options = [])
 * @method AddFavoritePublicMedia addFavoritePublicMedia(array $options = [])
 * @method AddMediaMarks addMediaMarks(array $options = [])
 * @method AddTemplate addTemplate(array $options = [])
 * @method BatchGetMediaInfos batchGetMediaInfos(array $options = [])
 * @method CancelDNAJob cancelDNAJob(array $options = [])
 * @method CancelFavoritePublicMedia cancelFavoritePublicMedia(array $options = [])
 * @method CreateAudit createAudit(array $options = [])
 * @method CreateCustomTemplate createCustomTemplate(array $options = [])
 * @method CreateDNADB createDNADB(array $options = [])
 * @method CreateEditingProject createEditingProject(array $options = [])
 * @method CreateLiveRecordTemplate createLiveRecordTemplate(array $options = [])
 * @method CreateLiveSnapshotTemplate createLiveSnapshotTemplate(array $options = [])
 * @method CreateLiveTranscodeTemplate createLiveTranscodeTemplate(array $options = [])
 * @method CreatePipeline createPipeline(array $options = [])
 * @method CreateUploadMedia createUploadMedia(array $options = [])
 * @method CreateUploadStream createUploadStream(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method DeleteCustomTemplate deleteCustomTemplate(array $options = [])
 * @method DeleteDNADB deleteDNADB(array $options = [])
 * @method DeleteDNAFiles deleteDNAFiles(array $options = [])
 * @method DeleteEditingProjectMaterials deleteEditingProjectMaterials(array $options = [])
 * @method DeleteEditingProjects deleteEditingProjects(array $options = [])
 * @method DeleteLiveRecordFiles deleteLiveRecordFiles(array $options = [])
 * @method DeleteLiveRecordTemplate deleteLiveRecordTemplate(array $options = [])
 * @method DeleteLiveSnapshotFiles deleteLiveSnapshotFiles(array $options = [])
 * @method DeleteLiveSnapshotTemplate deleteLiveSnapshotTemplate(array $options = [])
 * @method DeleteLiveTranscodeJob deleteLiveTranscodeJob(array $options = [])
 * @method DeleteLiveTranscodeTemplate deleteLiveTranscodeTemplate(array $options = [])
 * @method DeleteMediaInfos deleteMediaInfos(array $options = [])
 * @method DeleteMediaMarks deleteMediaMarks(array $options = [])
 * @method DeletePipeline deletePipeline(array $options = [])
 * @method DeletePlayInfo deletePlayInfo(array $options = [])
 * @method DeleteSmartJob deleteSmartJob(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescribeFilterConfigs describeFilterConfigs(array $options = [])
 * @method DescribeMeterIceEditUsage describeMeterIceEditUsage(array $options = [])
 * @method DescribeMeterIceLiveMediaConvertUsage describeMeterIceLiveMediaConvertUsage(array $options = [])
 * @method DescribeMeterIceMediaConvertUHDUsage describeMeterIceMediaConvertUHDUsage(array $options = [])
 * @method DescribeMeterIceMediaConvertUsage describeMeterIceMediaConvertUsage(array $options = [])
 * @method DescribeMeterIceMpsAiUsage describeMeterIceMpsAiUsage(array $options = [])
 * @method DescribeMeterImsEditUsage describeMeterImsEditUsage(array $options = [])
 * @method DescribeMeterImsLiveEditUsage describeMeterImsLiveEditUsage(array $options = [])
 * @method DescribeMeterImsLiveMediaConvertUsage describeMeterImsLiveMediaConvertUsage(array $options = [])
 * @method DescribeMeterImsLiveRecordUsage describeMeterImsLiveRecordUsage(array $options = [])
 * @method DescribeMeterImsLiveSnapshotUsage describeMeterImsLiveSnapshotUsage(array $options = [])
 * @method DescribeMeterImsMediaConvertUHDUsage describeMeterImsMediaConvertUHDUsage(array $options = [])
 * @method DescribeMeterImsMediaConvertUsage describeMeterImsMediaConvertUsage(array $options = [])
 * @method DescribeMeterImsMpsAiUsage describeMeterImsMpsAiUsage(array $options = [])
 * @method DescribeMeterImsSummary describeMeterImsSummary(array $options = [])
 * @method DescribePlayDetail describePlayDetail(array $options = [])
 * @method DescribePlayEventList describePlayEventList(array $options = [])
 * @method DescribePlayFirstFrameDurationMetricData describePlayFirstFrameDurationMetricData(array $options = [])
 * @method DescribePlayList describePlayList(array $options = [])
 * @method DescribePlayMetricData describePlayMetricData(array $options = [])
 * @method DescribePlayQoeList describePlayQoeList(array $options = [])
 * @method DescribePlayQosList describePlayQosList(array $options = [])
 * @method DescribeQueryConfigs describeQueryConfigs(array $options = [])
 * @method GetCategories getCategories(array $options = [])
 * @method GetContentAnalyzeConfig getContentAnalyzeConfig(array $options = [])
 * @method GetCustomTemplate getCustomTemplate(array $options = [])
 * @method GetDefaultStorageLocation getDefaultStorageLocation(array $options = [])
 * @method GetDynamicImageJob getDynamicImageJob(array $options = [])
 * @method GetEditingProject getEditingProject(array $options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials(array $options = [])
 * @method GetEventCallback getEventCallback(array $options = [])
 * @method GetLiveEditingIndexFile getLiveEditingIndexFile(array $options = [])
 * @method GetLiveEditingJob getLiveEditingJob(array $options = [])
 * @method GetLiveRecordJob getLiveRecordJob(array $options = [])
 * @method GetLiveRecordTemplate getLiveRecordTemplate(array $options = [])
 * @method GetLiveSnapshotJob getLiveSnapshotJob(array $options = [])
 * @method GetLiveSnapshotTemplate getLiveSnapshotTemplate(array $options = [])
 * @method GetLiveTranscodeJob getLiveTranscodeJob(array $options = [])
 * @method GetLiveTranscodeTemplate getLiveTranscodeTemplate(array $options = [])
 * @method GetMediaInfo getMediaInfo(array $options = [])
 * @method GetMediaInfoJob getMediaInfoJob(array $options = [])
 * @method GetMediaMarks getMediaMarks(array $options = [])
 * @method GetMediaProducingJob getMediaProducingJob(array $options = [])
 * @method GetPackageJob getPackageJob(array $options = [])
 * @method GetPipeline getPipeline(array $options = [])
 * @method GetPlayInfo getPlayInfo(array $options = [])
 * @method GetPublicMediaInfo getPublicMediaInfo(array $options = [])
 * @method GetSmartHandleJob getSmartHandleJob(array $options = [])
 * @method GetSnapshotJob getSnapshotJob(array $options = [])
 * @method GetSnapshotUrls getSnapshotUrls(array $options = [])
 * @method GetSystemTemplate getSystemTemplate(array $options = [])
 * @method GetTemplate getTemplate(array $options = [])
 * @method GetTemplateMaterials getTemplateMaterials(array $options = [])
 * @method GetTemplateParams getTemplateParams(array $options = [])
 * @method GetTranscodeJob getTranscodeJob(array $options = [])
 * @method GetUrlUploadInfos getUrlUploadInfos(array $options = [])
 * @method GetWorkflowTask getWorkflowTask(array $options = [])
 * @method ListAllPublicMediaTags listAllPublicMediaTags(array $options = [])
 * @method ListCustomTemplates listCustomTemplates(array $options = [])
 * @method ListDNADB listDNADB(array $options = [])
 * @method ListDNAFiles listDNAFiles(array $options = [])
 * @method ListDynamicImageJobs listDynamicImageJobs(array $options = [])
 * @method ListLiveRecordFiles listLiveRecordFiles(array $options = [])
 * @method ListLiveRecordJobs listLiveRecordJobs(array $options = [])
 * @method ListLiveRecordTemplates listLiveRecordTemplates(array $options = [])
 * @method ListLiveSnapshotFiles listLiveSnapshotFiles(array $options = [])
 * @method ListLiveSnapshotJobs listLiveSnapshotJobs(array $options = [])
 * @method ListLiveSnapshotTemplates listLiveSnapshotTemplates(array $options = [])
 * @method ListLiveTranscodeJobs listLiveTranscodeJobs(array $options = [])
 * @method ListLiveTranscodeTemplates listLiveTranscodeTemplates(array $options = [])
 * @method ListMediaBasicInfos listMediaBasicInfos(array $options = [])
 * @method ListMediaInfoJobs listMediaInfoJobs(array $options = [])
 * @method ListMediaMarks listMediaMarks(array $options = [])
 * @method ListPackageJobs listPackageJobs(array $options = [])
 * @method ListPipelines listPipelines(array $options = [])
 * @method ListPublicMediaBasicInfos listPublicMediaBasicInfos(array $options = [])
 * @method ListSmartJobs listSmartJobs(array $options = [])
 * @method ListSmartSysAvatarModels listSmartSysAvatarModels(array $options = [])
 * @method ListSnapshotJobs listSnapshotJobs(array $options = [])
 * @method ListSystemTemplates listSystemTemplates(array $options = [])
 * @method ListTemplates listTemplates(array $options = [])
 * @method ListTranscodeJobs listTranscodeJobs(array $options = [])
 * @method QueryDNAJobList queryDNAJobList(array $options = [])
 * @method QueryIProductionJob queryIProductionJob(array $options = [])
 * @method QueryMediaCensorJobDetail queryMediaCensorJobDetail(array $options = [])
 * @method QueryMediaCensorJobList queryMediaCensorJobList(array $options = [])
 * @method QuerySmarttagJob querySmarttagJob(array $options = [])
 * @method RefreshUploadMedia refreshUploadMedia(array $options = [])
 * @method RegisterMediaInfo registerMediaInfo(array $options = [])
 * @method RegisterMediaStream registerMediaStream(array $options = [])
 * @method SearchEditingProject searchEditingProject(array $options = [])
 * @method SearchMedia searchMedia(array $options = [])
 * @method SearchMediaByFace searchMediaByFace(array $options = [])
 * @method SearchMediaClipByFace searchMediaClipByFace(array $options = [])
 * @method SearchPublicMediaInfo searchPublicMediaInfo(array $options = [])
 * @method SendLiveSnapshotJobCommand sendLiveSnapshotJobCommand(array $options = [])
 * @method SendLiveTranscodeJobCommand sendLiveTranscodeJobCommand(array $options = [])
 * @method SetContentAnalyzeConfig setContentAnalyzeConfig(array $options = [])
 * @method SetDefaultCustomTemplate setDefaultCustomTemplate(array $options = [])
 * @method SetDefaultStorageLocation setDefaultStorageLocation(array $options = [])
 * @method SetEventCallback setEventCallback(array $options = [])
 * @method StartWorkflow startWorkflow(array $options = [])
 * @method SubmitASRJob submitASRJob(array $options = [])
 * @method SubmitAudioProduceJob submitAudioProduceJob(array $options = [])
 * @method SubmitAvatarVideoJob submitAvatarVideoJob(array $options = [])
 * @method SubmitDNAJob submitDNAJob(array $options = [])
 * @method SubmitDynamicChartJob submitDynamicChartJob(array $options = [])
 * @method SubmitDynamicImageJob submitDynamicImageJob(array $options = [])
 * @method SubmitIProductionJob submitIProductionJob(array $options = [])
 * @method SubmitLiveEditingJob submitLiveEditingJob(array $options = [])
 * @method SubmitLiveRecordJob submitLiveRecordJob(array $options = [])
 * @method SubmitLiveSnapshotJob submitLiveSnapshotJob(array $options = [])
 * @method SubmitLiveTranscodeJob submitLiveTranscodeJob(array $options = [])
 * @method SubmitMediaCensorJob submitMediaCensorJob(array $options = [])
 * @method SubmitMediaInfoJob submitMediaInfoJob(array $options = [])
 * @method SubmitMediaProducingJob submitMediaProducingJob(array $options = [])
 * @method SubmitPackageJob submitPackageJob(array $options = [])
 * @method SubmitSmarttagJob submitSmarttagJob(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method SubmitSubtitleProduceJob submitSubtitleProduceJob(array $options = [])
 * @method SubmitSyncMediaInfoJob submitSyncMediaInfoJob(array $options = [])
 * @method SubmitTranscodeJob submitTranscodeJob(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method UpdateCustomTemplate updateCustomTemplate(array $options = [])
 * @method UpdateEditingProject updateEditingProject(array $options = [])
 * @method UpdateLiveRecordTemplate updateLiveRecordTemplate(array $options = [])
 * @method UpdateLiveSnapshotTemplate updateLiveSnapshotTemplate(array $options = [])
 * @method UpdateLiveTranscodeJob updateLiveTranscodeJob(array $options = [])
 * @method UpdateLiveTranscodeTemplate updateLiveTranscodeTemplate(array $options = [])
 * @method UpdateMediaInfo updateMediaInfo(array $options = [])
 * @method UpdateMediaMarks updateMediaMarks(array $options = [])
 * @method UpdatePipeline updatePipeline(array $options = [])
 * @method UpdateSmartJob updateSmartJob(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UploadMediaByURL uploadMediaByURL(array $options = [])
 * @method UploadStreamByURL uploadStreamByURL(array $options = [])
 */
class ICEApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ICE';

    /** @var string */
    public $version = '2020-11-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ice';
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class AddCategory extends Rpc
{
}

/**
 * @method string getMaterialMaps()
 * @method $this withMaterialMaps($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class AddEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class AddFavoritePublicMedia extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaMarks()
 * @method $this withMediaMarks($value)
 */
class AddMediaMarks extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRelatedMediaids()
 * @method $this withRelatedMediaids($value)
 * @method string getCoverUrl()
 * @method $this withCoverUrl($value)
 * @method string getPreviewMedia()
 * @method $this withPreviewMedia($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AddTemplate extends Rpc
{
}

/**
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class BatchGetMediaInfos extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class CancelDNAJob extends Rpc
{
}

/**
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class CancelFavoritePublicMedia extends Rpc
{
}

/**
 * @method string getAuditContent()
 * @method $this withAuditContent($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateAudit extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSubtype()
 * @method $this withSubtype($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCustomTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getModel()
 * @method $this withModel($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateDNADB extends Rpc
{
}

/**
 * @method string getBusinessConfig()
 * @method $this withBusinessConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getMaterialMaps()
 * @method $this withMaterialMaps($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getProjectType()
 * @method $this withProjectType($value)
 * @method string getFEExtend()
 * @method $this withFEExtend($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getClipsParam()
 * @method $this withClipsParam($value)
 */
class CreateEditingProject extends Rpc
{
}

/**
 * @method string getRecordFormat()
 * @method string getName()
 */
class CreateLiveRecordTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordFormat($value)
    {
        $this->data['RecordFormat'] = $value;
        $this->options['form_params']['RecordFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getTimeInterval()
 * @method string getSequenceFormat()
 * @method string getTemplateName()
 * @method string getOverwriteFormat()
 */
class CreateLiveSnapshotTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeInterval($value)
    {
        $this->data['TimeInterval'] = $value;
        $this->options['form_params']['TimeInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSequenceFormat($value)
    {
        $this->data['SequenceFormat'] = $value;
        $this->options['form_params']['SequenceFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOverwriteFormat($value)
    {
        $this->data['OverwriteFormat'] = $value;
        $this->options['form_params']['OverwriteFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateLiveTranscodeTemplate extends Rpc
{
}

/**
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePipeline extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getFileInfo()
 * @method $this withFileInfo($value)
 * @method string getMediaMetaData()
 * @method $this withMediaMetaData($value)
 * @method string getPostProcessConfig()
 * @method $this withPostProcessConfig($value)
 * @method string getUploadSource()
 * @method $this withUploadSource($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getUploadTargetConfig()
 * @method $this withUploadTargetConfig($value)
 */
class CreateUploadMedia extends Rpc
{
}

/**
 * @method string getFileExtension()
 * @method $this withFileExtension($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getHDRType()
 * @method $this withHDRType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class CreateUploadStream extends Rpc
{
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 */
class DeleteCategory extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteCustomTemplate extends Rpc
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
 * @method string getDBId()
 * @method $this withDBId($value)
 */
class DeleteDNADB extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrimaryKeys()
 * @method $this withPrimaryKeys($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBId()
 * @method $this withDBId($value)
 */
class DeleteDNAFiles extends Rpc
{
}

/**
 * @method string getMaterialType()
 * @method $this withMaterialType($value)
 * @method string getMaterialIds()
 * @method $this withMaterialIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteEditingProjectMaterials extends Rpc
{
}

/**
 * @method string getProjectIds()
 * @method $this withProjectIds($value)
 */
class DeleteEditingProjects extends Rpc
{
}

/**
 * @method string getRemoveFile()
 * @method $this withRemoveFile($value)
 * @method array getRecordIds()
 */
class DeleteLiveRecordFiles extends Rpc
{

    /**
     * @param array $recordIds
     *
     * @return $this
     */
	public function withRecordIds(array $recordIds)
	{
	    $this->data['RecordIds'] = $recordIds;
		foreach ($recordIds as $i => $iValue) {
			$this->options['query']['RecordIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteLiveRecordTemplate extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDeleteOriginalFile()
 * @method $this withDeleteOriginalFile($value)
 * @method string getCreateTimestampList()
 * @method $this withCreateTimestampList($value)
 */
class DeleteLiveSnapshotFiles extends Rpc
{
}

/**
 * @method string getTemplateId()
 */
class DeleteLiveSnapshotTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteLiveTranscodeJob extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteLiveTranscodeTemplate extends Rpc
{
}

/**
 * @method string getInputURLs()
 * @method $this withInputURLs($value)
 * @method string getDeletePhysicalFiles()
 * @method $this withDeletePhysicalFiles($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class DeleteMediaInfos extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaMarkIds()
 * @method $this withMediaMarkIds($value)
 */
class DeleteMediaMarks extends Rpc
{
}

/**
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class DeletePipeline extends Rpc
{
}

/**
 * @method string getDeletePhysicalFiles()
 * @method $this withDeletePhysicalFiles($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getFileURLs()
 * @method $this withFileURLs($value)
 */
class DeletePlayInfo extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteSmartJob extends Rpc
{
}

/**
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 */
class DeleteTemplate extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeFilterConfigs extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterIceEditUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterIceLiveMediaConvertUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeMeterIceMediaConvertUHDUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterIceMediaConvertUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterIceMpsAiUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsEditUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsLiveEditUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsLiveMediaConvertUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsLiveRecordUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsLiveSnapshotUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeMeterImsMediaConvertUHDUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsMediaConvertUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsMpsAiUsage extends Rpc
{
}

/**
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeMeterImsSummary extends Rpc
{
}

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getPlayTs()
 * @method $this withPlayTs($value)
 */
class DescribePlayDetail extends Rpc
{
}

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getPlayTs()
 * @method $this withPlayTs($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribePlayEventList extends Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 */
class DescribePlayFirstFrameDurationMetricData extends Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getPlayType()
 * @method $this withPlayType($value)
 * @method string getOrderName()
 * @method $this withOrderName($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribePlayList extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 * @method string getSdkVersion()
 * @method $this withSdkVersion($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getItemConfigs()
 * @method $this withItemConfigs($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getExperienceLevel()
 * @method $this withExperienceLevel($value)
 * @method string getTerminalType()
 * @method $this withTerminalType($value)
 */
class DescribePlayMetricData extends Rpc
{
}

/**
 * @method string getNetwork()
 * @method $this withNetwork($value)
 * @method string getMetricTypes()
 * @method $this withMetricTypes($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getItemConfigs()
 * @method $this withItemConfigs($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getOrderName()
 * @method $this withOrderName($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getTerminalType()
 * @method $this withTerminalType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePlayQoeList extends Rpc
{
}

/**
 * @method string getNetwork()
 * @method $this withNetwork($value)
 * @method string getMetricTypes()
 * @method $this withMetricTypes($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getItemConfigs()
 * @method $this withItemConfigs($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getOrderName()
 * @method $this withOrderName($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getTerminalType()
 * @method $this withTerminalType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePlayQosList extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeQueryConfigs extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class GetCategories extends Rpc
{
}

class GetContentAnalyzeConfig extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSubtype()
 * @method $this withSubtype($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetCustomTemplate extends Rpc
{
}

class GetDefaultStorageLocation extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetDynamicImageJob extends Rpc
{
}

/**
 * @method string getFEExtendFlag()
 * @method $this withFEExtendFlag($value)
 * @method string getRequestSource()
 * @method $this withRequestSource($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEditingProject extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEditingProjectMaterials extends Rpc
{
}

class GetEventCallback extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class GetLiveEditingIndexFile extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetLiveEditingJob extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetLiveRecordJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetLiveRecordTemplate extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetLiveSnapshotJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetLiveSnapshotTemplate extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetLiveTranscodeJob extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetLiveTranscodeTemplate extends Rpc
{
}

/**
 * @method string getInputURL()
 * @method $this withInputURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 */
class GetMediaInfo extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetMediaInfoJob extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaMarkIds()
 * @method $this withMediaMarkIds($value)
 */
class GetMediaMarks extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetMediaProducingJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetPackageJob extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class GetPipeline extends Rpc
{
}

/**
 * @method string getInputURL()
 * @method $this withInputURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getFileURLs()
 * @method $this withFileURLs($value)
 */
class GetPlayInfo extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class GetPublicMediaInfo extends Rpc
{
}

/**
 * @method string getWithAiResult()
 * @method $this withWithAiResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetSmartHandleJob extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetSnapshotJob extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 */
class GetSnapshotUrls extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetSystemTemplate extends Rpc
{
}

/**
 * @method string getRelatedMediaidFlag()
 * @method $this withRelatedMediaidFlag($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetTemplate extends Rpc
{
}

/**
 * @method string getFileList()
 * @method $this withFileList($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetTemplateMaterials extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetTemplateParams extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getParentJobId()
 * @method $this withParentJobId($value)
 */
class GetTranscodeJob extends Rpc
{
}

/**
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 */
class GetUrlUploadInfos extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetWorkflowTask extends Rpc
{
}

/**
 * @method string getWebSdkVersion()
 * @method $this withWebSdkVersion($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class ListAllPublicMediaTags extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubtype()
 * @method $this withSubtype($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListCustomTemplates extends Rpc
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
 * @method string getDBIds()
 * @method $this withDBIds($value)
 */
class ListDNADB extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBId()
 * @method $this withDBId($value)
 */
class ListDNAFiles extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndOfCreateTime()
 * @method $this withEndOfCreateTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartOfCreateTime()
 * @method $this withStartOfCreateTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDynamicImageJobs extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getRecordFormat()
 * @method $this withRecordFormat($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListLiveRecordFiles extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListLiveRecordJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getTemplateIds()
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListLiveRecordTemplates extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $templateIds
     *
     * @return $this
     */
	public function withTemplateIds(array $templateIds)
	{
	    $this->data['TemplateIds'] = $templateIds;
		foreach ($templateIds as $i => $iValue) {
			$this->options['query']['TemplateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListLiveSnapshotFiles extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeyWord()
 * @method $this withSearchKeyWord($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListLiveSnapshotJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getTemplateIds()
 * @method string getType()
 * @method $this withType($value)
 * @method string getSearchKeyWord()
 * @method $this withSearchKeyWord($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListLiveSnapshotTemplates extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $templateIds
     *
     * @return $this
     */
	public function withTemplateIds(array $templateIds)
	{
	    $this->data['TemplateIds'] = $templateIds;
		foreach ($templateIds as $i => $iValue) {
			$this->options['query']['TemplateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStartMode()
 * @method $this withStartMode($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListLiveTranscodeJobs extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getVideoCodec()
 * @method $this withVideoCodec($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListLiveTranscodeTemplates extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getIncludeDynamicMetaData()
 * @method $this withIncludeDynamicMetaData($value)
 * @method string getUploadSource()
 * @method $this withUploadSource($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getIncludeFileBasicInfo()
 * @method $this withIncludeFileBasicInfo($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListMediaBasicInfos extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndOfCreateTime()
 * @method $this withEndOfCreateTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartOfCreateTime()
 * @method $this withStartOfCreateTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListMediaInfoJobs extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaMarkIds()
 * @method $this withMediaMarkIds($value)
 */
class ListMediaMarks extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndOfCreateTime()
 * @method $this withEndOfCreateTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartOfCreateTime()
 * @method $this withStartOfCreateTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPackageJobs extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPipelines extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getIncludeFileBasicInfo()
 * @method $this withIncludeFileBasicInfo($value)
 * @method string getMediaTagId()
 * @method $this withMediaTagId($value)
 */
class ListPublicMediaBasicInfos extends Rpc
{
}

/**
 * @method string getShowInputInfo()
 * @method $this withShowInputInfo($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getJobState()
 * @method $this withJobState($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListSmartJobs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSmartSysAvatarModels extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndOfCreateTime()
 * @method $this withEndOfCreateTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartOfCreateTime()
 * @method $this withStartOfCreateTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListSnapshotJobs extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSubtype()
 * @method $this withSubtype($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListSystemTemplates extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCreateSource()
 * @method $this withCreateSource($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTemplates extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndOfCreateTime()
 * @method $this withEndOfCreateTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getParentJobId()
 * @method $this withParentJobId($value)
 * @method string getStartOfCreateTime()
 * @method $this withStartOfCreateTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTranscodeJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryDNAJobList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryIProductionJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaCensorJobDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryMediaCensorJobList extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getParams()
 * @method $this withParams($value)
 */
class QuerySmarttagJob extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 */
class RefreshUploadMedia extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getDynamicMetaDataList()
 * @method $this withDynamicMetaDataList($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 * @method string getMediaTags()
 * @method $this withMediaTags($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getDynamicMetaData()
 * @method $this withDynamicMetaData($value)
 * @method string getUploadSource()
 * @method $this withUploadSource($value)
 * @method string getInputURL()
 * @method $this withInputURL($value)
 * @method string getReferenceId()
 * @method $this withReferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getMediaType()
 * @method $this withMediaType($value)
 * @method string getRegisterConfig()
 * @method $this withRegisterConfig($value)
 */
class RegisterMediaInfo extends Rpc
{
}

/**
 * @method string getInputURL()
 * @method $this withInputURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 */
class RegisterMediaStream extends Rpc
{
}

/**
 * @method string getForceNewIndex()
 * @method $this withForceNewIndex($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectType()
 * @method $this withProjectType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCreateSource()
 * @method $this withCreateSource($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SearchEditingProject extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMatch()
 * @method $this withMatch($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class SearchMedia extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPersonImageUrl()
 * @method $this withPersonImageUrl($value)
 * @method string getFaceSearchToken()
 * @method $this withFaceSearchToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SearchMediaByFace extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getFaceSearchToken()
 * @method $this withFaceSearchToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SearchMediaClipByFace extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getAuthorized()
 * @method $this withAuthorized($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getDynamicMetaDataMatchFields()
 * @method $this withDynamicMetaDataMatchFields($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getFavorite()
 * @method $this withFavorite($value)
 */
class SearchPublicMediaInfo extends Rpc
{
}

/**
 * @method string getCommand()
 * @method string getJobId()
 */
class SendLiveSnapshotJobCommand extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['form_params']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class SendLiveTranscodeJobCommand extends Rpc
{
}

/**
 * @method string getAuto()
 * @method $this withAuto($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 */
class SetContentAnalyzeConfig extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class SetDefaultCustomTemplate extends Rpc
{
}

/**
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getPath()
 * @method $this withPath($value)
 */
class SetDefaultStorageLocation extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getCallbackType()
 * @method $this withCallbackType($value)
 * @method string getCallbackQueueName()
 * @method $this withCallbackQueueName($value)
 * @method string getEventTypeList()
 * @method $this withEventTypeList($value)
 * @method string getAuthSwitch()
 * @method $this withAuthSwitch($value)
 * @method string getCallbackURL()
 * @method $this withCallbackURL($value)
 */
class SetEventCallback extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTaskInput()
 * @method $this withTaskInput($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class StartWorkflow extends Rpc
{
}

/**
 * @method string getInputFile()
 * @method $this withInputFile($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 */
class SubmitASRJob extends Rpc
{
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getEditingConfig()
 * @method $this withEditingConfig($value)
 * @method string getInputConfig()
 * @method $this withInputConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 * @method string getIsAsync()
 * @method $this withIsAsync($value)
 */
class SubmitAudioProduceJob extends Rpc
{
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getInputConfig()
 * @method $this withInputConfig($value)
 * @method string getEditingConfig()
 * @method $this withEditingConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 */
class SubmitAvatarVideoJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPrimaryKey()
 * @method $this withPrimaryKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getDBId()
 * @method $this withDBId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class SubmitDNAJob extends Rpc
{
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getChartType()
 * @method $this withChartType($value)
 * @method string getChartTitle()
 * @method $this withChartTitle($value)
 * @method string getChartConfig()
 * @method $this withChartConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUnit()
 * @method $this withUnit($value)
 * @method string getDataSource()
 * @method $this withDataSource($value)
 * @method string getBackground()
 * @method $this withBackground($value)
 * @method string getSubtitle()
 * @method $this withSubtitle($value)
 * @method string getAxisParams()
 * @method $this withAxisParams($value)
 */
class SubmitDynamicChartJob extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitDynamicImageJob extends Rpc
{
}

/**
 * @method string getJobParams()
 * @method $this withJobParams($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitIProductionJob extends Rpc
{
}

/**
 * @method string getLiveStreamConfig()
 * @method $this withLiveStreamConfig($value)
 * @method string getClips()
 * @method $this withClips($value)
 * @method string getOutputMediaTarget()
 * @method $this withOutputMediaTarget($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOutputMediaConfig()
 * @method $this withOutputMediaConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getMediaProduceConfig()
 * @method $this withMediaProduceConfig($value)
 */
class SubmitLiveEditingJob extends Rpc
{
}

/**
 * @method string getStreamInput()
 * @method string getTemplateId()
 * @method string getName()
 * @method string getNotifyUrl()
 * @method string getRecordOutput()
 */
class SubmitLiveRecordJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamInput($value)
    {
        $this->data['StreamInput'] = $value;
        $this->options['form_params']['StreamInput'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyUrl($value)
    {
        $this->data['NotifyUrl'] = $value;
        $this->options['form_params']['NotifyUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordOutput($value)
    {
        $this->data['RecordOutput'] = $value;
        $this->options['form_params']['RecordOutput'] = $value;

        return $this;
    }
}

/**
 * @method string getStreamInput()
 * @method string getTemplateId()
 * @method string getSnapshotOutput()
 * @method string getCallbackUrl()
 * @method string getJobName()
 */
class SubmitLiveSnapshotJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamInput($value)
    {
        $this->data['StreamInput'] = $value;
        $this->options['form_params']['StreamInput'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnapshotOutput($value)
    {
        $this->data['SnapshotOutput'] = $value;
        $this->options['form_params']['SnapshotOutput'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackUrl($value)
    {
        $this->data['CallbackUrl'] = $value;
        $this->options['form_params']['CallbackUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['form_params']['JobName'] = $value;

        return $this;
    }
}

/**
 * @method string getStreamInput()
 * @method $this withStreamInput($value)
 * @method string getTranscodeOutput()
 * @method $this withTranscodeOutput($value)
 * @method string getTimedConfig()
 * @method $this withTimedConfig($value)
 * @method string getStartMode()
 * @method $this withStartMode($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitLiveTranscodeJob extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getCoverImages()
 * @method $this withCoverImages($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getBarrages()
 * @method $this withBarrages($value)
 */
class SubmitMediaCensorJob extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitMediaInfoJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOutputMediaTarget()
 * @method $this withOutputMediaTarget($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getEditingProduceConfig()
 * @method $this withEditingProduceConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOutputMediaConfig()
 * @method $this withOutputMediaConfig($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getProjectMetadata()
 * @method $this withProjectMetadata($value)
 * @method string getClipsParam()
 * @method $this withClipsParam($value)
 * @method string getMediaMarks()
 * @method $this withMediaMarks($value)
 */
class SubmitMediaProducingJob extends Rpc
{
}

/**
 * @method string getInputs()
 * @method $this withInputs($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitPackageJob extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getContentAddr()
 * @method $this withContentAddr($value)
 */
class SubmitSmarttagJob extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitSnapshotJob extends Rpc
{
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getEditingConfig()
 * @method $this withEditingConfig($value)
 * @method string getInputConfig()
 * @method $this withInputConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getIsAsync()
 * @method $this withIsAsync($value)
 */
class SubmitSubtitleProduceJob extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitSyncMediaInfoJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOutputGroup()
 * @method $this withOutputGroup($value)
 * @method string getInputGroup()
 * @method $this withInputGroup($value)
 * @method string getScheduleConfig()
 * @method $this withScheduleConfig($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SubmitTranscodeJob extends Rpc
{
}

/**
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class UpdateCategory extends Rpc
{
}

/**
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateCustomTemplate extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFEExtend()
 * @method $this withFEExtend($value)
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTimeline()
 * @method $this withTimeline($value)
 * @method string getClipsParam()
 * @method $this withClipsParam($value)
 */
class UpdateEditingProject extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method string getRecordFormat()
 * @method string getName()
 */
class UpdateLiveRecordTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordFormat($value)
    {
        $this->data['RecordFormat'] = $value;
        $this->options['form_params']['RecordFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getTimeInterval()
 * @method string getTemplateId()
 * @method string getSequenceFormat()
 * @method string getTemplateName()
 * @method string getOverwriteFormat()
 */
class UpdateLiveSnapshotTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeInterval($value)
    {
        $this->data['TimeInterval'] = $value;
        $this->options['form_params']['TimeInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSequenceFormat($value)
    {
        $this->data['SequenceFormat'] = $value;
        $this->options['form_params']['SequenceFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['form_params']['TemplateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOverwriteFormat($value)
    {
        $this->data['OverwriteFormat'] = $value;
        $this->options['form_params']['OverwriteFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getStreamInput()
 * @method $this withStreamInput($value)
 * @method string getTranscodeOutput()
 * @method $this withTranscodeOutput($value)
 * @method string getTimedConfig()
 * @method $this withTimedConfig($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateLiveTranscodeJob extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateLiveTranscodeTemplate extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getAppendDynamicMeta()
 * @method $this withAppendDynamicMeta($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getDynamicMetaDataList()
 * @method $this withDynamicMetaDataList($value)
 * @method string getMediaTags()
 * @method $this withMediaTags($value)
 * @method string getDynamicMetaData()
 * @method $this withDynamicMetaData($value)
 * @method string getInputURL()
 * @method $this withInputURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getReferenceId()
 * @method $this withReferenceId($value)
 * @method string getSnapshots()
 * @method $this withSnapshots($value)
 * @method string getAppendTags()
 * @method $this withAppendTags($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getAppendSnapshots()
 * @method $this withAppendSnapshots($value)
 */
class UpdateMediaInfo extends Rpc
{
}

/**
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getMediaMarks()
 * @method $this withMediaMarks($value)
 */
class UpdateMediaMarks extends Rpc
{
}

/**
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdatePipeline extends Rpc
{
}

/**
 * @method string getFEExtend()
 * @method $this withFEExtend($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class UpdateSmartJob extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getRelatedMediaids()
 * @method $this withRelatedMediaids($value)
 * @method string getCoverUrl()
 * @method $this withCoverUrl($value)
 * @method string getPreviewMedia()
 * @method $this withPreviewMedia($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateTemplate extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getMediaMetaData()
 * @method $this withMediaMetaData($value)
 * @method string getPostProcessConfig()
 * @method $this withPostProcessConfig($value)
 * @method string getUploadSource()
 * @method $this withUploadSource($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getUploadTargetConfig()
 * @method $this withUploadTargetConfig($value)
 */
class UploadMediaByURL extends Rpc
{
}

/**
 * @method string getFileExtension()
 * @method $this withFileExtension($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getHDRType()
 * @method $this withHDRType($value)
 * @method string getDefinition()
 * @method $this withDefinition($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UploadStreamByURL extends Rpc
{
}
