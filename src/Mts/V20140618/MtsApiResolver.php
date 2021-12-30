<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateMediaWorkflow activateMediaWorkflow(array $options = [])
 * @method AddAsrPipeline addAsrPipeline(array $options = [])
 * @method AddCategory addCategory(array $options = [])
 * @method AddCensorPipeline addCensorPipeline(array $options = [])
 * @method AddCoverPipeline addCoverPipeline(array $options = [])
 * @method AddMCTemplate addMCTemplate(array $options = [])
 * @method AddMedia addMedia(array $options = [])
 * @method AddMediaTag addMediaTag(array $options = [])
 * @method AddMediaWorkflow addMediaWorkflow(array $options = [])
 * @method AddPipeline addPipeline(array $options = [])
 * @method AddPornPipeline addPornPipeline(array $options = [])
 * @method AddSmarttagTemplate addSmarttagTemplate(array $options = [])
 * @method AddTemplate addTemplate(array $options = [])
 * @method AddTerrorismPipeline addTerrorismPipeline(array $options = [])
 * @method AddWaterMarkTemplate addWaterMarkTemplate(array $options = [])
 * @method BindInputBucket bindInputBucket(array $options = [])
 * @method BindOutputBucket bindOutputBucket(array $options = [])
 * @method CancelJob cancelJob(array $options = [])
 * @method CategoryTree categoryTree(array $options = [])
 * @method CheckResource checkResource(array $options = [])
 * @method CreateFpShotDB createFpShotDB(array $options = [])
 * @method CreateInferenceServer createInferenceServer(array $options = [])
 * @method CreateMcuTemplate createMcuTemplate(array $options = [])
 * @method CreateSession createSession(array $options = [])
 * @method DeactivateMediaWorkflow deactivateMediaWorkflow(array $options = [])
 * @method DecryptKey decryptKey(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method DeleteMCTemplate deleteMCTemplate(array $options = [])
 * @method DeleteMcuJob deleteMcuJob(array $options = [])
 * @method DeleteMcuTemplate deleteMcuTemplate(array $options = [])
 * @method DeleteMedia deleteMedia(array $options = [])
 * @method DeleteMediaTag deleteMediaTag(array $options = [])
 * @method DeleteMediaWorkflow deleteMediaWorkflow(array $options = [])
 * @method DeletePipeline deletePipeline(array $options = [])
 * @method DeleteSmarttagTemplate deleteSmarttagTemplate(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteWaterMarkTemplate deleteWaterMarkTemplate(array $options = [])
 * @method DescribeMtsUserResourcePackage describeMtsUserResourcePackage(array $options = [])
 * @method DetectImageSync detectImageSync(array $options = [])
 * @method GetJobInfo getJobInfo(array $options = [])
 * @method GetLicense getLicense(array $options = [])
 * @method GetPackage getPackage(array $options = [])
 * @method ImAudit imAudit(array $options = [])
 * @method ImportFpShotJob importFpShotJob(array $options = [])
 * @method ListAllCategory listAllCategory(array $options = [])
 * @method ListAllMediaBucket listAllMediaBucket(array $options = [])
 * @method ListAsrPipeline listAsrPipeline(array $options = [])
 * @method ListCensorPipeline listCensorPipeline(array $options = [])
 * @method ListCoverPipeline listCoverPipeline(array $options = [])
 * @method ListCustomPersons listCustomPersons(array $options = [])
 * @method ListFpShotDB listFpShotDB(array $options = [])
 * @method ListFpShotFiles listFpShotFiles(array $options = [])
 * @method ListFpShotImportJob listFpShotImportJob(array $options = [])
 * @method ListFpShotNotary listFpShotNotary(array $options = [])
 * @method ListInferenceJob listInferenceJob(array $options = [])
 * @method ListJob listJob(array $options = [])
 * @method ListMedia listMedia(array $options = [])
 * @method ListMediaWorkflowExecutions listMediaWorkflowExecutions(array $options = [])
 * @method ListPornPipeline listPornPipeline(array $options = [])
 * @method ListTerrorismPipeline listTerrorismPipeline(array $options = [])
 * @method LogicalDeleteResource logicalDeleteResource(array $options = [])
 * @method PhysicalDeleteResource physicalDeleteResource(array $options = [])
 * @method PlayerAuth playerAuth(array $options = [])
 * @method PlayInfo playInfo(array $options = [])
 * @method QueryAnalysisJobList queryAnalysisJobList(array $options = [])
 * @method QueryAnnotationJobList queryAnnotationJobList(array $options = [])
 * @method QueryAsrJobList queryAsrJobList(array $options = [])
 * @method QueryAsrPipelineList queryAsrPipelineList(array $options = [])
 * @method QueryAuthConfig queryAuthConfig(array $options = [])
 * @method QueryCensorJobList queryCensorJobList(array $options = [])
 * @method QueryCensorPipelineList queryCensorPipelineList(array $options = [])
 * @method QueryComplexJobList queryComplexJobList(array $options = [])
 * @method QueryCoverJobList queryCoverJobList(array $options = [])
 * @method QueryCoverPipelineList queryCoverPipelineList(array $options = [])
 * @method QueryEditingJobList queryEditingJobList(array $options = [])
 * @method QueryFacerecogJobList queryFacerecogJobList(array $options = [])
 * @method QueryFpCompareJobList queryFpCompareJobList(array $options = [])
 * @method QueryFpDBDeleteJobList queryFpDBDeleteJobList(array $options = [])
 * @method QueryFpFileDeleteJobList queryFpFileDeleteJobList(array $options = [])
 * @method QueryFpImportResult queryFpImportResult(array $options = [])
 * @method QueryFpShotJobList queryFpShotJobList(array $options = [])
 * @method QueryImageSearchJobList queryImageSearchJobList(array $options = [])
 * @method QueryInferenceJob queryInferenceJob(array $options = [])
 * @method QueryInferenceServer queryInferenceServer(array $options = [])
 * @method QueryInnerJob queryInnerJob(array $options = [])
 * @method QueryIProductionJob queryIProductionJob(array $options = [])
 * @method QueryIProductionJobList queryIProductionJobList(array $options = [])
 * @method QueryJobList queryJobList(array $options = [])
 * @method QueryMCJobList queryMCJobList(array $options = [])
 * @method QueryMCTemplateList queryMCTemplateList(array $options = [])
 * @method QueryMcuJob queryMcuJob(array $options = [])
 * @method QueryMcuTemplate queryMcuTemplate(array $options = [])
 * @method QueryMediaCensorJobDetail queryMediaCensorJobDetail(array $options = [])
 * @method QueryMediaCensorJobList queryMediaCensorJobList(array $options = [])
 * @method QueryMediaDetailJobList queryMediaDetailJobList(array $options = [])
 * @method QueryMediaFpDeleteJobList queryMediaFpDeleteJobList(array $options = [])
 * @method QueryMediaInfoJobList queryMediaInfoJobList(array $options = [])
 * @method QueryMediaList queryMediaList(array $options = [])
 * @method QueryMediaListByURL queryMediaListByURL(array $options = [])
 * @method QueryMediaWorkflowExecutionList queryMediaWorkflowExecutionList(array $options = [])
 * @method QueryMediaWorkflowList queryMediaWorkflowList(array $options = [])
 * @method QueryPipelineList queryPipelineList(array $options = [])
 * @method QueryPornJobList queryPornJobList(array $options = [])
 * @method QueryPornPipelineList queryPornPipelineList(array $options = [])
 * @method QuerySmarttagJob querySmarttagJob(array $options = [])
 * @method QuerySmarttagJobList querySmarttagJobList(array $options = [])
 * @method QuerySmarttagTemplateList querySmarttagTemplateList(array $options = [])
 * @method QuerySnapshotJobList querySnapshotJobList(array $options = [])
 * @method QuerySubtitleJobList querySubtitleJobList(array $options = [])
 * @method QueryTagJobList queryTagJobList(array $options = [])
 * @method QueryTemplateList queryTemplateList(array $options = [])
 * @method QueryTerrorismJobList queryTerrorismJobList(array $options = [])
 * @method QueryTerrorismPipelineList queryTerrorismPipelineList(array $options = [])
 * @method QueryVideoGifJobList queryVideoGifJobList(array $options = [])
 * @method QueryVideoPoseJobList queryVideoPoseJobList(array $options = [])
 * @method QueryVideoQualityJob queryVideoQualityJob(array $options = [])
 * @method QueryVideoSplitJobList queryVideoSplitJobList(array $options = [])
 * @method QueryVideoSummaryJobList queryVideoSummaryJobList(array $options = [])
 * @method QueryWaterMarkTemplateList queryWaterMarkTemplateList(array $options = [])
 * @method RefreshCdnDomainConfigsCache refreshCdnDomainConfigsCache(array $options = [])
 * @method RegisterCustomFace registerCustomFace(array $options = [])
 * @method RegisterMediaDetailPerson registerMediaDetailPerson(array $options = [])
 * @method RegisterMediaDetailScenario registerMediaDetailScenario(array $options = [])
 * @method ReportAnnotationJobResult reportAnnotationJobResult(array $options = [])
 * @method ReportCensorJobResult reportCensorJobResult(array $options = [])
 * @method ReportCoverJobResult reportCoverJobResult(array $options = [])
 * @method ReportFacerecogJobResult reportFacerecogJobResult(array $options = [])
 * @method ReportFpShotJobResult reportFpShotJobResult(array $options = [])
 * @method ReportMediaDetailJobResult reportMediaDetailJobResult(array $options = [])
 * @method ReportPornJobResult reportPornJobResult(array $options = [])
 * @method ReportTagJobResult reportTagJobResult(array $options = [])
 * @method ReportTerrorismJobResult reportTerrorismJobResult(array $options = [])
 * @method ReportVideoSplitJobResult reportVideoSplitJobResult(array $options = [])
 * @method SearchMedia searchMedia(array $options = [])
 * @method SearchMediaWorkflow searchMediaWorkflow(array $options = [])
 * @method SearchPipeline searchPipeline(array $options = [])
 * @method SearchTemplate searchTemplate(array $options = [])
 * @method SearchWaterMarkTemplate searchWaterMarkTemplate(array $options = [])
 * @method SetAuthConfig setAuthConfig(array $options = [])
 * @method StopIProductionJob stopIProductionJob(array $options = [])
 * @method SubmitAnalysisJob submitAnalysisJob(array $options = [])
 * @method SubmitAnnotationJob submitAnnotationJob(array $options = [])
 * @method SubmitAsrJob submitAsrJob(array $options = [])
 * @method SubmitBeautifyJobs submitBeautifyJobs(array $options = [])
 * @method SubmitComplexJob submitComplexJob(array $options = [])
 * @method SubmitCoverJob submitCoverJob(array $options = [])
 * @method SubmitEditingJobs submitEditingJobs(array $options = [])
 * @method SubmitFacerecogJob submitFacerecogJob(array $options = [])
 * @method SubmitFpCompareJob submitFpCompareJob(array $options = [])
 * @method SubmitFpDBDeleteJob submitFpDBDeleteJob(array $options = [])
 * @method SubmitFpFileDeleteJob submitFpFileDeleteJob(array $options = [])
 * @method SubmitFpShotJob submitFpShotJob(array $options = [])
 * @method SubmitImageQualityJob submitImageQualityJob(array $options = [])
 * @method SubmitImageSearchJob submitImageSearchJob(array $options = [])
 * @method SubmitInferenceJob submitInferenceJob(array $options = [])
 * @method SubmitInnerJob submitInnerJob(array $options = [])
 * @method SubmitIProductionJob submitIProductionJob(array $options = [])
 * @method SubmitJobs submitJobs(array $options = [])
 * @method SubmitMCJob submitMCJob(array $options = [])
 * @method SubmitMcuJob submitMcuJob(array $options = [])
 * @method SubmitMediaCensorJob submitMediaCensorJob(array $options = [])
 * @method SubmitMediaDetailJob submitMediaDetailJob(array $options = [])
 * @method SubmitMediaFpDeleteJob submitMediaFpDeleteJob(array $options = [])
 * @method SubmitMediaInfoJob submitMediaInfoJob(array $options = [])
 * @method SubmitOssFileCopyJob submitOssFileCopyJob(array $options = [])
 * @method SubmitPornJob submitPornJob(array $options = [])
 * @method SubmitSmarttagJob submitSmarttagJob(array $options = [])
 * @method SubmitSnapshotJob submitSnapshotJob(array $options = [])
 * @method SubmitSubtitleJob submitSubtitleJob(array $options = [])
 * @method SubmitTagJob submitTagJob(array $options = [])
 * @method SubmitTerrorismJob submitTerrorismJob(array $options = [])
 * @method SubmitURLUploadJob submitURLUploadJob(array $options = [])
 * @method SubmitVideoGifJob submitVideoGifJob(array $options = [])
 * @method SubmitVideoPoseJob submitVideoPoseJob(array $options = [])
 * @method SubmitVideoQualityJob submitVideoQualityJob(array $options = [])
 * @method SubmitVideoSplitJob submitVideoSplitJob(array $options = [])
 * @method SubmitVideoSummaryJob submitVideoSummaryJob(array $options = [])
 * @method TagCustomPerson tagCustomPerson(array $options = [])
 * @method UnbindInputBucket unbindInputBucket(array $options = [])
 * @method UnbindOutputBucket unbindOutputBucket(array $options = [])
 * @method UnregisterCustomFace unregisterCustomFace(array $options = [])
 * @method UpdateAsrPipeline updateAsrPipeline(array $options = [])
 * @method UpdateCategoryName updateCategoryName(array $options = [])
 * @method UpdateCensorPipeline updateCensorPipeline(array $options = [])
 * @method UpdateCoverPipeline updateCoverPipeline(array $options = [])
 * @method UpdateMCTemplate updateMCTemplate(array $options = [])
 * @method UpdateMcuTemplate updateMcuTemplate(array $options = [])
 * @method UpdateMedia updateMedia(array $options = [])
 * @method UpdateMediaCategory updateMediaCategory(array $options = [])
 * @method UpdateMediaCover updateMediaCover(array $options = [])
 * @method UpdateMediaPublishState updateMediaPublishState(array $options = [])
 * @method UpdateMediaWorkflow updateMediaWorkflow(array $options = [])
 * @method UpdateMediaWorkflowTriggerMode updateMediaWorkflowTriggerMode(array $options = [])
 * @method UpdatePipeline updatePipeline(array $options = [])
 * @method UpdatePornPipeline updatePornPipeline(array $options = [])
 * @method UpdateSmarttagTemplate updateSmarttagTemplate(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UpdateTerrorismPipeline updateTerrorismPipeline(array $options = [])
 * @method UpdateWaterMarkTemplate updateWaterMarkTemplate(array $options = [])
 */
class MtsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Mts';

    /** @var string */
    public $version = '2014-06-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'mts';
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class ActivateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddAsrPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddCensorPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddCoverPipeline extends Rpc
{
}

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getLive()
 * @method $this withLive($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpam()
 */
class AddMCTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpam($value)
    {
        $this->data['Spam'] = $value;
        $this->options['query']['spam'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getInputUnbind()
 * @method $this withInputUnbind($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getMediaWorkflowUserData()
 * @method $this withMediaWorkflowUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getFileURL()
 * @method $this withFileURL($value)
 */
class AddMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class AddMediaTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpeedLevel()
 * @method $this withSpeedLevel($value)
 */
class AddPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddPornPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKnowledgeConfig()
 * @method $this withKnowledgeConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getLabelVersion()
 * @method $this withLabelVersion($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getFaceCustomParamsConfig()
 * @method $this withFaceCustomParamsConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getFaceCategoryIds()
 * @method $this withFaceCategoryIds($value)
 * @method string getKeywordConfig()
 * @method $this withKeywordConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAnalyseTypes()
 * @method $this withAnalyseTypes($value)
 * @method string getLabelType()
 * @method $this withLabelType($value)
 */
class AddSmarttagTemplate extends Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddTerrorismPipeline extends Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class AddWaterMarkTemplate extends Rpc
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
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class BindInputBucket extends Rpc
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
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class BindOutputBucket extends Rpc
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
class CancelJob extends Rpc
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
class CategoryTree extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class CheckResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class CreateFpShotDB extends Rpc
{
}

/**
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getModelType()
 * @method $this withModelType($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getTestId()
 * @method $this withTestId($value)
 * @method string getModelPath()
 * @method $this withModelPath($value)
 */
class CreateInferenceServer extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMcuTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSessionTime()
 * @method $this withSessionTime($value)
 * @method string getEndUserId()
 * @method $this withEndUserId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class CreateSession extends Rpc
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class DeactivateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DecryptKey extends Rpc
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
 * @method string getCateId()
 * @method $this withCateId($value)
 */
class DeleteCategory extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteMCTemplate extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class DeleteMcuJob extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteMcuTemplate extends Rpc
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
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 */
class DeleteMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class DeleteMediaTag extends Rpc
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 */
class DeleteMediaWorkflow extends Rpc
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
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class DeletePipeline extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteSmarttagTemplate extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteTemplate extends Rpc
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
 * @method string getWaterMarkTemplateId()
 * @method $this withWaterMarkTemplateId($value)
 */
class DeleteWaterMarkTemplate extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 */
class DescribeMtsUserResourcePackage extends Rpc
{
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 */
class DetectImageSync extends Rpc
{
}

/**
 * @method string getJobId()
 */
class GetJobInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['query']['jobId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getHeader()
 * @method $this withHeader($value)
 * @method string getLicenseUrl()
 * @method $this withLicenseUrl($value)
 */
class GetLicense extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getContents()
 * @method $this withContents($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 */
class ImAudit extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFpImportConfig()
 * @method $this withFpImportConfig($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class ImportFpShotJob extends Rpc
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
class ListAllCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAllMediaBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAsrPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCensorPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCoverPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListCustomPersons extends Rpc
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
 * @method string getFpDBIds()
 * @method $this withFpDBIds($value)
 */
class ListFpShotDB extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
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
 */
class ListFpShotFiles extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class ListFpShotImportJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfCreatedTimeRange()
 * @method $this withStartOfCreatedTimeRange($value)
 * @method string getEndOfCreatedTimeRange()
 * @method $this withEndOfCreatedTimeRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListFpShotNotary extends Rpc
{
}

/**
 * @method string getMaxPageSize()
 * @method $this withMaxPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getServerName()
 * @method $this withServerName($value)
 */
class ListInferenceJob extends Rpc
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
 */
class ListJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class ListMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaWorkflowName()
 * @method $this withMediaWorkflowName($value)
 * @method string getInputFileURL()
 * @method $this withInputFileURL($value)
 */
class ListMediaWorkflowExecutions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListPornPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTerrorismPipeline extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class LogicalDeleteResource extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class PhysicalDeleteResource extends Rpc
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
class PlayerAuth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHlsUriToken()
 * @method $this withHlsUriToken($value)
 * @method string getTerminal()
 * @method $this withTerminal($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getAuthInfo()
 * @method $this withAuthInfo($value)
 */
class PlayInfo extends Rpc
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
 * @method string getAnalysisJobIds()
 * @method $this withAnalysisJobIds($value)
 */
class QueryAnalysisJobList extends Rpc
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
 * @method string getAnnotationJobIds()
 * @method $this withAnnotationJobIds($value)
 */
class QueryAnnotationJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryAsrJobList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryAsrPipelineList extends Rpc
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
class QueryAuthConfig extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryCensorJobList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryCensorPipelineList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryComplexJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getCoverJobIds()
 * @method $this withCoverJobIds($value)
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
 */
class QueryCoverJobList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryCoverPipelineList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryEditingJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFacerecogJobIds()
 * @method $this withFacerecogJobIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryFacerecogJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryFpCompareJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryFpDBDeleteJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryFpFileDeleteJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryFpImportResult extends Rpc
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
 * @method string getPrimaryKeyList()
 * @method $this withPrimaryKeyList($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryFpShotJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryImageSearchJobList extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryInferenceJob extends Rpc
{
}

/**
 * @method string getCreateTime()
 * @method $this withCreateTime($value)
 * @method string getMaxPageSize()
 * @method $this withMaxPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getModelType()
 * @method $this withModelType($value)
 */
class QueryInferenceServer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryInnerJob extends Rpc
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
class QueryIProductionJob extends Rpc
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
 * @method string getIProductionJobIds()
 * @method $this withIProductionJobIds($value)
 */
class QueryIProductionJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryJobList extends Rpc
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
class QueryMCJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMCTemplateList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryMcuJob extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class QueryMcuTemplate extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
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
 */
class QueryMediaCensorJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryMediaDetailJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryMediaFpDeleteJobList extends Rpc
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
 * @method string getMediaInfoJobIds()
 * @method $this withMediaInfoJobIds($value)
 */
class QueryMediaInfoJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getFileURLs()
 * @method $this withFileURLs($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaListByURL extends Rpc
{
}

/**
 * @method string getRunIds()
 * @method $this withRunIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaWorkflowExecutionList extends Rpc
{
}

/**
 * @method string getMediaWorkflowIds()
 * @method $this withMediaWorkflowIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaWorkflowList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryPipelineList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryPornJobList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryPornPipelineList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 */
class QuerySmarttagJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
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
class QuerySmarttagJobList extends Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class QuerySmarttagTemplateList extends Rpc
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
 * @method string getSnapshotJobIds()
 * @method $this withSnapshotJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class QuerySnapshotJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QuerySubtitleJobList extends Rpc
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
 * @method string getTagJobIds()
 * @method $this withTagJobIds($value)
 */
class QueryTagJobList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTemplateList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryTerrorismJobList extends Rpc
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
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 */
class QueryTerrorismPipelineList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryVideoGifJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryVideoPoseJobList extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class QueryVideoQualityJob extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryVideoSplitJobList extends Rpc
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
 * @method string getJobIds()
 * @method $this withJobIds($value)
 */
class QueryVideoSummaryJobList extends Rpc
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
 * @method string getWaterMarkTemplateIds()
 * @method $this withWaterMarkTemplateIds($value)
 */
class QueryWaterMarkTemplateList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomains()
 * @method $this withDomains($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RefreshCdnDomainConfigsCache extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 */
class RegisterCustomFace extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonLib()
 * @method $this withPersonLib($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class RegisterMediaDetailPerson extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getScenario()
 * @method $this withScenario($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RegisterMediaDetailScenario extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getAnnotation()
 * @method $this withAnnotation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportAnnotationJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class ReportCensorJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportCoverJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFacerecog()
 * @method $this withFacerecog($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportFacerecogJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportFpShotJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResults()
 * @method $this withResults($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportMediaDetailJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class ReportPornJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportTagJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class ReportTerrorismJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportVideoSplitJobResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class SearchMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStateList()
 * @method $this withStateList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchWaterMarkTemplate extends Rpc
{
}

/**
 * @method string getKey1()
 * @method $this withKey1($value)
 * @method string getKey2()
 * @method $this withKey2($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetAuthConfig extends Rpc
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
class StopIProductionJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAnalysisConfig()
 * @method $this withAnalysisConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitAnalysisJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAnnotationConfig()
 * @method $this withAnnotationConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitAnnotationJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitAsrJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBeautifyConfig()
 * @method $this withBeautifyConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 */
class SubmitBeautifyJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTranscodeOutput()
 * @method $this withTranscodeOutput($value)
 * @method string getInputs()
 * @method $this withInputs($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getComplexConfigs()
 * @method $this withComplexConfigs($value)
 */
class SubmitComplexJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoverConfig()
 * @method $this withCoverConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitCoverJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getEditingInputs()
 * @method $this withEditingInputs($value)
 * @method string getEditingJobURL()
 * @method $this withEditingJobURL($value)
 * @method string getEditingJobOssFileUid()
 * @method $this withEditingJobOssFileUid($value)
 * @method string getEditingJobOutputs()
 * @method $this withEditingJobOutputs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getEditingJobOssFileRoleArn()
 * @method $this withEditingJobOssFileRoleArn($value)
 */
class SubmitEditingJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFacerecogConfig()
 * @method $this withFacerecogConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitFacerecogJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getMasterMedia()
 * @method $this withMasterMedia($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getQueryMedia()
 * @method $this withQueryMedia($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getMatchedFrameStorage()
 * @method $this withMatchedFrameStorage($value)
 */
class SubmitFpCompareJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getDelType()
 * @method $this withDelType($value)
 */
class SubmitFpDBDeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getFileIds()
 * @method $this withFileIds($value)
 */
class SubmitFpFileDeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFpShotConfig()
 * @method $this withFpShotConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitFpShotJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitImageQualityJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getInputVideo()
 * @method $this withInputVideo($value)
 * @method string getInputImage()
 * @method $this withInputImage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class SubmitImageSearchJob extends Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getModelType()
 * @method $this withModelType($value)
 * @method string getServerName()
 * @method $this withServerName($value)
 */
class SubmitInferenceJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class SubmitInnerJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobParams()
 * @method $this withJobParams($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getScheduleParams()
 * @method $this withScheduleParams($value)
 */
class SubmitIProductionJob extends Rpc
{
}

/**
 * @method string getOutputs()
 * @method $this withOutputs($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 */
class SubmitJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCensorConfig()
 * @method $this withCensorConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getTexts()
 * @method $this withTexts($value)
 */
class SubmitMCJob extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
 */
class SubmitMcuJob extends Rpc
{
}

/**
 * @method string getExternalUrl()
 * @method $this withExternalUrl($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getVideoCensorConfig()
 * @method $this withVideoCensorConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getCoverImages()
 * @method $this withCoverImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getBarrages()
 * @method $this withBarrages($value)
 */
class SubmitMediaCensorJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getMediaDetailConfig()
 * @method $this withMediaDetailConfig($value)
 */
class SubmitMediaDetailJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
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
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitMediaFpDeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 */
class SubmitMediaInfoJob extends Rpc
{
}

/**
 * @method string getTargetStorage()
 * @method $this withTargetStorage($value)
 * @method string getNotify()
 * @method $this withNotify($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getSourceStorage()
 * @method $this withSourceStorage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SubmitOssFileCopyJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getPornConfig()
 * @method $this withPornConfig($value)
 */
class SubmitPornJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotConfig()
 * @method $this withSnapshotConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitSnapshotJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getInputConfig()
 * @method $this withInputConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitSubtitleJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTagConfig()
 * @method $this withTagConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitTagJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerrorismConfig()
 * @method $this withTerrorismConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitTerrorismJob extends Rpc
{
}

/**
 * @method string getTargetStorage()
 * @method $this withTargetStorage($value)
 * @method string getSourceFileURL()
 * @method $this withSourceFileURL($value)
 * @method string getNotify()
 * @method $this withNotify($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SubmitURLUploadJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoGifConfig()
 * @method $this withVideoGifConfig($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitVideoGifJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitVideoPoseJob extends Rpc
{
}

/**
 * @method string getJobParams()
 * @method $this withJobParams($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getScheduleParams()
 * @method $this withScheduleParams($value)
 */
class SubmitVideoQualityJob extends Rpc
{
}

/**
 * @method string getVideoSplitConfig()
 * @method $this withVideoSplitConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitVideoSplitJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getVideoSummaryConfig()
 * @method $this withVideoSummaryConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getInput()
 * @method $this withInput($value)
 */
class SubmitVideoSummaryJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonDescription()
 * @method $this withPersonDescription($value)
 * @method string getCategoryDescription()
 * @method $this withCategoryDescription($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategoryName()
 * @method $this withCategoryName($value)
 */
class TagCustomPerson extends Rpc
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
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class UnbindInputBucket extends Rpc
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
 * @method string getBucket()
 * @method $this withBucket($value)
 */
class UnbindOutputBucket extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPersonId()
 * @method $this withPersonId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnregisterCustomFace extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateAsrPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateCategoryName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateCensorPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateCoverPipeline extends Rpc
{
}

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getLive()
 * @method $this withLive($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpam()
 */
class UpdateMCTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpam($value)
    {
        $this->data['Spam'] = $value;
        $this->options['query']['spam'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateMcuTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class UpdateMedia extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCover extends Rpc
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
 * @method string getPublish()
 * @method $this withPublish($value)
 */
class UpdateMediaPublishState extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateMediaWorkflow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 */
class UpdateMediaWorkflowTriggerMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePornPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKnowledgeConfig()
 * @method $this withKnowledgeConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getLabelVersion()
 * @method $this withLabelVersion($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getFaceCustomParamsConfig()
 * @method $this withFaceCustomParamsConfig($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getFaceCategoryIds()
 * @method $this withFaceCategoryIds($value)
 * @method string getKeywordConfig()
 * @method $this withKeywordConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAnalyseTypes()
 * @method $this withAnalyseTypes($value)
 * @method string getLabelType()
 * @method $this withLabelType($value)
 */
class UpdateSmarttagTemplate extends Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateTerrorismPipeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWaterMarkTemplateId()
 * @method $this withWaterMarkTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class UpdateWaterMarkTemplate extends Rpc
{
}
