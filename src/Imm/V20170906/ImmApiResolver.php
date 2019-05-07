<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DetectImageLogos detectImageLogos(array $options = [])
 * @method UpdateFaceGroup updateFaceGroup(array $options = [])
 * @method FindSimilarFaces findSimilarFaces(array $options = [])
 * @method FindImagesByTagNames findImagesByTagNames(array $options = [])
 * @method FindImages findImages(array $options = [])
 * @method IndexVideo indexVideo(array $options = [])
 * @method GetVideo getVideo(array $options = [])
 * @method ListVideos listVideos(array $options = [])
 * @method DeleteVideo deleteVideo(array $options = [])
 * @method ListVideoAudios listVideoAudios(array $options = [])
 * @method ListVideoFrames listVideoFrames(array $options = [])
 * @method IndexImage indexImage(array $options = [])
 * @method CompareImageFaces compareImageFaces(array $options = [])
 * @method DetectImageCelebrity detectImageCelebrity(array $options = [])
 * @method DetectImageTexts detectImageTexts(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DetectImageFaces detectImageFaces(array $options = [])
 * @method DetectImageTags detectImageTags(array $options = [])
 * @method DeleteSet deleteSet(array $options = [])
 * @method ListSetTags listSetTags(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method ListSets listSets(array $options = [])
 * @method UpdateSet updateSet(array $options = [])
 * @method CreateSet createSet(array $options = [])
 * @method CreateVideoAnalyseTask createVideoAnalyseTask(array $options = [])
 * @method GetVideoTask getVideoTask(array $options = [])
 * @method DeleteVideoTask deleteVideoTask(array $options = [])
 * @method ListVideoTasks listVideoTasks(array $options = [])
 * @method GetSet getSet(array $options = [])
 * @method GetImageJob getImageJob(array $options = [])
 * @method DeleteImageJob deleteImageJob(array $options = [])
 * @method ListImageJobs listImageJobs(array $options = [])
 * @method CreateGroupFacesJob createGroupFacesJob(array $options = [])
 * @method CreateDocIndexTask createDocIndexTask(array $options = [])
 * @method GetDocIndexTask getDocIndexTask(array $options = [])
 * @method UpdateDocIndexMeta updateDocIndexMeta(array $options = [])
 * @method GetDocIndex getDocIndex(array $options = [])
 * @method DeleteDocIndex deleteDocIndex(array $options = [])
 * @method SearchDocIndex searchDocIndex(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method DetectLogo detectLogo(array $options = [])
 * @method DetectClothes detectClothes(array $options = [])
 * @method DetectQRCodes detectQRCodes(array $options = [])
 * @method CompareFace compareFace(array $options = [])
 * @method RegistFace registFace(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method GetFaceSearchImage getFaceSearchImage(array $options = [])
 * @method GetFaceSearchUser getFaceSearchUser(array $options = [])
 * @method GetFaceSearchGroup getFaceSearchGroup(array $options = [])
 * @method DeleteFaceSearchGroup deleteFaceSearchGroup(array $options = [])
 * @method DeleteFaceSearchUser deleteFaceSearchUser(array $options = [])
 * @method ListFaceSearchGroups listFaceSearchGroups(array $options = [])
 * @method ListFaceSearchGroupImages listFaceSearchGroupImages(array $options = [])
 * @method DeleteFaceSearchImageById deleteFaceSearchImageById(array $options = [])
 * @method ListFaceSearchGroupUsers listFaceSearchGroupUsers(array $options = [])
 * @method DeleteTagByUrl deleteTagByUrl(array $options = [])
 * @method DeleteTagByName deleteTagByName(array $options = [])
 * @method ListTagNames listTagNames(array $options = [])
 * @method ListOfficeConversionTask listOfficeConversionTask(array $options = [])
 * @method ListTagPhotos listTagPhotos(array $options = [])
 * @method GetOfficeConversionTask getOfficeConversionTask(array $options = [])
 * @method DeleteOfficeConversionTask deleteOfficeConversionTask(array $options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ConvertOfficeFormat convertOfficeFormat(array $options = [])
 * @method PhotoProcess photoProcess(array $options = [])
 * @method GetPhotoProcessTask getPhotoProcessTask(array $options = [])
 * @method DeletePhotoProcessTask deletePhotoProcessTask(array $options = [])
 * @method ListPhotoProcessTasks listPhotoProcessTasks(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method GetTagSet getTagSet(array $options = [])
 * @method ListFaceGroups listFaceGroups(array $options = [])
 * @method CreateFaceSet createFaceSet(array $options = [])
 * @method IndexTag indexTag(array $options = [])
 * @method DeleteTagSet deleteTagSet(array $options = [])
 * @method ListTagSets listTagSets(array $options = [])
 * @method CreateTagSet createTagSet(array $options = [])
 * @method DeleteFaceJob deleteFaceJob(array $options = [])
 * @method CreateTagJob createTagJob(array $options = [])
 * @method DetectTag detectTag(array $options = [])
 * @method DeleteTagJob deleteTagJob(array $options = [])
 * @method GetTagJob getTagJob(array $options = [])
 * @method ListTagJobs listTagJobs(array $options = [])
 * @method PutProject putProject(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method DeletePornBatchDetectJob deletePornBatchDetectJob(array $options = [])
 * @method CreatePornBatchDetectJob createPornBatchDetectJob(array $options = [])
 * @method GetPornBatchDetectJob getPornBatchDetectJob(array $options = [])
 * @method ListPornBatchDetectJobs listPornBatchDetectJobs(array $options = [])
 */
class ImmApiResolver
{
    use ApiResolverTrait;
}

class V20170906Rpc extends Rpc
{
    /** @var string */
    public $product = 'imm';

    /** @var string */
    public $version = '2017-09-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imm';
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectImageLogos extends V20170906Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupCoverFaceId()
 * @method $this withGroupCoverFaceId($value)
 */
class UpdateFaceGroup extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getMinSimilarity()
 * @method $this withMinSimilarity($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getFaceId()
 * @method $this withFaceId($value)
 */
class FindSimilarFaces extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 */
class FindImagesByTagNames extends V20170906Rpc
{
}

/**
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getImageSizeRange()
 * @method $this withImageSizeRange($value)
 * @method string getRemarksBPrefix()
 * @method $this withRemarksBPrefix($value)
 * @method string getLocationBoundary()
 * @method $this withLocationBoundary($value)
 * @method string getImageTimeRange()
 * @method $this withImageTimeRange($value)
 * @method string getOCRContentsMatch()
 * @method $this withOCRContentsMatch($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getRemarksDPrefix()
 * @method $this withRemarksDPrefix($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getAgeRange()
 * @method $this withAgeRange($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getRemarksAPrefix()
 * @method $this withRemarksAPrefix($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getSourceUriPrefix()
 * @method $this withSourceUriPrefix($value)
 * @method string getEmotion()
 * @method $this withEmotion($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getRemarksCPrefix()
 * @method $this withRemarksCPrefix($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getModifyTimeRange()
 * @method $this withModifyTimeRange($value)
 */
class FindImages extends V20170906Rpc
{
}

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class IndexVideo extends V20170906Rpc
{
}

/**
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetVideo extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListVideos extends V20170906Rpc
{
}

/**
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getResources()
 * @method $this withResources($value)
 */
class DeleteVideo extends V20170906Rpc
{
}

/**
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoAudios extends V20170906Rpc
{
}

/**
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListVideoFrames extends V20170906Rpc
{
}

/**
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 */
class IndexImage extends V20170906Rpc
{
}

/**
 * @method string getImageUriB()
 * @method $this withImageUriB($value)
 * @method string getImageUriA()
 * @method $this withImageUriA($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getFaceIdA()
 * @method $this withFaceIdA($value)
 * @method string getFaceIdB()
 * @method $this withFaceIdB($value)
 */
class CompareImageFaces extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getLibrary()
 * @method $this withLibrary($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 */
class DetectImageCelebrity extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectImageTexts extends V20170906Rpc
{
}

/**
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getSourceUri()
 * @method $this withSourceUri($value)
 * @method string getSourcePosition()
 * @method $this withSourcePosition($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class UpdateImage extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 */
class ListImages extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteImage extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 */
class DetectImageFaces extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRealUid()
 * @method $this withRealUid($value)
 */
class DetectImageTags extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class DeleteSet extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListSetTags extends V20170906Rpc
{
}

/**
 * @method string getImageUri()
 * @method $this withImageUri($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetImage extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListSets extends V20170906Rpc
{
}

/**
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class UpdateSet extends V20170906Rpc
{
}

/**
 * @method string getSetName()
 * @method $this withSetName($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateSet extends V20170906Rpc
{
}

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateVideoAnalyseTask extends V20170906Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetVideoTask extends V20170906Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteVideoTask extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListVideoTasks extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetSet extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class GetImageJob extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class DeleteImageJob extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 */
class ListImageJobs extends V20170906Rpc
{
}

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class CreateGroupFacesJob extends V20170906Rpc
{
}

/**
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class CreateDocIndexTask extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDocIndexTask extends V20170906Rpc
{
}

/**
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class UpdateDocIndexMeta extends V20170906Rpc
{
}

/**
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class GetDocIndex extends V20170906Rpc
{
}

/**
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class DeleteDocIndex extends V20170906Rpc
{
}

/**
 * @method string getModifiedTimeEnd()
 * @method $this withModifiedTimeEnd($value)
 * @method string getCustomKey1()
 * @method $this withCustomKey1($value)
 * @method string getSet()
 * @method $this withSet($value)
 * @method string getSizeLimitEnd()
 * @method $this withSizeLimitEnd($value)
 * @method string getCustomKey5()
 * @method $this withCustomKey5($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getCustomKey4()
 * @method $this withCustomKey4($value)
 * @method string getCustomKey3()
 * @method $this withCustomKey3($value)
 * @method string getCustomKey2()
 * @method $this withCustomKey2($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getModifiedTimeStart()
 * @method $this withModifiedTimeStart($value)
 * @method string getPageNumLimitStart()
 * @method $this withPageNumLimitStart($value)
 * @method string getCustomKey6()
 * @method $this withCustomKey6($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getPageNumLimitEnd()
 * @method $this withPageNumLimitEnd($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getSizeLimitStart()
 * @method $this withSizeLimitStart($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 */
class SearchDocIndex extends V20170906Rpc
{
}

/**
 * @method string getNewServiceRole()
 * @method $this withNewServiceRole($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getNewCU()
 * @method $this withNewCU($value)
 */
class UpdateProject extends V20170906Rpc
{
}

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectLogo extends V20170906Rpc
{
}

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectClothes extends V20170906Rpc
{
}

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectQRCodes extends V20170906Rpc
{
}

/**
 * @method string getSrcUriB()
 * @method $this withSrcUriB($value)
 * @method string getSrcUriA()
 * @method $this withSrcUriA($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class CompareFace extends V20170906Rpc
{
}

/**
 * @method string getChooseBiggestFace()
 * @method $this withChooseBiggestFace($value)
 * @method string getIsQualityLimit()
 * @method $this withIsQualityLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getRegisterCheckLevel()
 * @method $this withRegisterCheckLevel($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class RegistFace extends V20170906Rpc
{
}

/**
 * @method string getResultNum()
 * @method $this withResultNum($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSearchThresholdLevel()
 * @method $this withSearchThresholdLevel($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getIsThreshold()
 * @method $this withIsThreshold($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class SearchFace extends V20170906Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GetFaceSearchImage extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GetFaceSearchUser extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetFaceSearchGroup extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DeleteFaceSearchGroup extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DeleteFaceSearchUser extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListFaceSearchGroups extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class ListFaceSearchGroupImages extends V20170906Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DeleteFaceSearchImageById extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ListFaceSearchGroupUsers extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class DeleteTagByUrl extends V20170906Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class DeleteTagByName extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListTagNames extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListOfficeConversionTask extends V20170906Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class ListTagPhotos extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOfficeConversionTask extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteOfficeConversionTask extends V20170906Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getIdempotentToken()
 * @method $this withIdempotentToken($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getDisplayDpi()
 * @method $this withDisplayDpi($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreateOfficeConversionTask extends V20170906Rpc
{
}

class DescribeRegions extends V20170906Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class ConvertOfficeFormat extends V20170906Rpc
{
}

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getStyle()
 * @method $this withStyle($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class PhotoProcess extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetPhotoProcessTask extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeletePhotoProcessTask extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListPhotoProcessTasks extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class DeleteProject extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 */
class GetTagSet extends V20170906Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListFaceGroups extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class CreateFaceSet extends V20170906Rpc
{
}

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class IndexTag extends V20170906Rpc
{
}

/**
 * @method string getLazyMode()
 * @method $this withLazyMode($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getCheckEmpty()
 * @method $this withCheckEmpty($value)
 */
class DeleteTagSet extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListTagSets extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class CreateTagSet extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getClearIndexData()
 * @method $this withClearIndexData($value)
 */
class DeleteFaceJob extends V20170906Rpc
{
}

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 */
class CreateTagJob extends V20170906Rpc
{
}

/**
 * @method string getSrcUris()
 * @method $this withSrcUris($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DetectTag extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getClearIndexData()
 * @method $this withClearIndexData($value)
 */
class DeleteTagJob extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetTagJob extends V20170906Rpc
{
}

/**
 * @method string getCondition()
 * @method $this withCondition($value)
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListTagJobs extends V20170906Rpc
{
}

/**
 * @method string getCU()
 * @method $this withCU($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getBillingType()
 * @method $this withBillingType($value)
 * @method string getType()
 * @method $this withType($value)
 */
class PutProject extends V20170906Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetProject extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListProjects extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class DeletePornBatchDetectJob extends V20170906Rpc
{
}

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class CreatePornBatchDetectJob extends V20170906Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class GetPornBatchDetectJob extends V20170906Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getProject()
 * @method $this withProject($value)
 */
class ListPornBatchDetectJobs extends V20170906Rpc
{
}
