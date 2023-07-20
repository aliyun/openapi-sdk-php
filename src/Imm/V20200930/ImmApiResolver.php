<?php

namespace AlibabaCloud\Imm\V20200930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddImageMosaic addImageMosaic(array $options = [])
 * @method AddStoryFiles addStoryFiles(array $options = [])
 * @method AttachOSSBucket attachOSSBucket(array $options = [])
 * @method BatchDeleteFileMeta batchDeleteFileMeta(array $options = [])
 * @method BatchGetFigureCluster batchGetFigureCluster(array $options = [])
 * @method BatchGetFileMeta batchGetFileMeta(array $options = [])
 * @method BatchIndexFileMeta batchIndexFileMeta(array $options = [])
 * @method BatchUpdateFileMeta batchUpdateFileMeta(array $options = [])
 * @method CompareImageFaces compareImageFaces(array $options = [])
 * @method CreateArchiveFileInspectionTask createArchiveFileInspectionTask(array $options = [])
 * @method CreateBatch createBatch(array $options = [])
 * @method CreateBinding createBinding(array $options = [])
 * @method CreateCompressPointCloudTask createCompressPointCloudTask(array $options = [])
 * @method CreateCustomizedStory createCustomizedStory(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateFacesSearchingTask createFacesSearchingTask(array $options = [])
 * @method CreateFigureClusteringTask createFigureClusteringTask(array $options = [])
 * @method CreateFigureClustersMergingTask createFigureClustersMergingTask(array $options = [])
 * @method CreateFileCompressionTask createFileCompressionTask(array $options = [])
 * @method CreateFileUncompressionTask createFileUncompressionTask(array $options = [])
 * @method CreateImageModerationTask createImageModerationTask(array $options = [])
 * @method CreateImageSplicingTask createImageSplicingTask(array $options = [])
 * @method CreateImageToPDFTask createImageToPDFTask(array $options = [])
 * @method CreateLocationDateClusteringTask createLocationDateClusteringTask(array $options = [])
 * @method CreateMediaConvertTask createMediaConvertTask(array $options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateSimilarImageClusteringTask createSimilarImageClusteringTask(array $options = [])
 * @method CreateStory createStory(array $options = [])
 * @method CreateTrigger createTrigger(array $options = [])
 * @method CreateVideoLabelClassificationTask createVideoLabelClassificationTask(array $options = [])
 * @method CreateVideoModerationTask createVideoModerationTask(array $options = [])
 * @method DeleteBatch deleteBatch(array $options = [])
 * @method DeleteBinding deleteBinding(array $options = [])
 * @method DeleteDataset deleteDataset(array $options = [])
 * @method DeleteFileMeta deleteFileMeta(array $options = [])
 * @method DeleteLocationDateCluster deleteLocationDateCluster(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteStory deleteStory(array $options = [])
 * @method DeleteTrigger deleteTrigger(array $options = [])
 * @method DetachOSSBucket detachOSSBucket(array $options = [])
 * @method DetectImageBodies detectImageBodies(array $options = [])
 * @method DetectImageCars detectImageCars(array $options = [])
 * @method DetectImageCodes detectImageCodes(array $options = [])
 * @method DetectImageCropping detectImageCropping(array $options = [])
 * @method DetectImageFaces detectImageFaces(array $options = [])
 * @method DetectImageLabels detectImageLabels(array $options = [])
 * @method DetectImageScore detectImageScore(array $options = [])
 * @method DetectMediaMeta detectMediaMeta(array $options = [])
 * @method DetectTextAnomaly detectTextAnomaly(array $options = [])
 * @method ExtractDocumentText extractDocumentText(array $options = [])
 * @method FuzzyQuery fuzzyQuery(array $options = [])
 * @method GenerateWebofficeToken generateWebofficeToken(array $options = [])
 * @method GetBatch getBatch(array $options = [])
 * @method GetBinding getBinding(array $options = [])
 * @method GetDataset getDataset(array $options = [])
 * @method GetFigureCluster getFigureCluster(array $options = [])
 * @method GetFileMeta getFileMeta(array $options = [])
 * @method GetImageModerationResult getImageModerationResult(array $options = [])
 * @method GetOSSBucketAttachment getOSSBucketAttachment(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetStory getStory(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method GetTrigger getTrigger(array $options = [])
 * @method GetVideoLabelClassificationResult getVideoLabelClassificationResult(array $options = [])
 * @method GetVideoModerationResult getVideoModerationResult(array $options = [])
 * @method IndexFileMeta indexFileMeta(array $options = [])
 * @method ListBatches listBatches(array $options = [])
 * @method ListBindings listBindings(array $options = [])
 * @method ListDatasets listDatasets(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListTasks listTasks(array $options = [])
 * @method ListTriggers listTriggers(array $options = [])
 * @method QueryFigureClusters queryFigureClusters(array $options = [])
 * @method QueryLocationDateClusters queryLocationDateClusters(array $options = [])
 * @method QuerySimilarImageClusters querySimilarImageClusters(array $options = [])
 * @method QueryStories queryStories(array $options = [])
 * @method RefreshWebofficeToken refreshWebofficeToken(array $options = [])
 * @method RemoveStoryFiles removeStoryFiles(array $options = [])
 * @method ResumeBatch resumeBatch(array $options = [])
 * @method ResumeTrigger resumeTrigger(array $options = [])
 * @method SearchImageFigureCluster searchImageFigureCluster(array $options = [])
 * @method SemanticQuery semanticQuery(array $options = [])
 * @method SimpleQuery simpleQuery(array $options = [])
 * @method SuspendBatch suspendBatch(array $options = [])
 * @method SuspendTrigger suspendTrigger(array $options = [])
 * @method UpdateBatch updateBatch(array $options = [])
 * @method UpdateDataset updateDataset(array $options = [])
 * @method UpdateFigureCluster updateFigureCluster(array $options = [])
 * @method UpdateFileMeta updateFileMeta(array $options = [])
 * @method UpdateLocationDateCluster updateLocationDateCluster(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateStory updateStory(array $options = [])
 * @method UpdateTrigger updateTrigger(array $options = [])
 */
class ImmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imm';

    /** @var string */
    public $version = '2020-09-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imm';
}

/**
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getQuality()
 * @method $this withQuality($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class AddImageMosaic extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method string getProjectName()
 * @method string getFiles()
 * @method string getObjectId()
 */
class AddStoryFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFiles($value)
    {
        $this->data['Files'] = $value;
        $this->options['form_params']['Files'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['form_params']['ObjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 */
class AttachOSSBucket extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURIs()
 * @method $this withURIs($value)
 */
class BatchDeleteFileMeta extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getObjectIds()
 * @method $this withObjectIds($value)
 */
class BatchGetFigureCluster extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURIs()
 * @method $this withURIs($value)
 */
class BatchGetFileMeta extends Rpc
{
}

/**
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getFiles()
 * @method $this withFiles($value)
 */
class BatchIndexFileMeta extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getFiles()
 * @method $this withFiles($value)
 */
class BatchUpdateFileMeta extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class CompareImageFaces extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class CreateArchiveFileInspectionTask extends Rpc
{
}

/**
 * @method string getNotification()
 * @method string getProjectName()
 * @method string getTags()
 * @method string getInput()
 * @method string getServiceRole()
 * @method string getActions()
 */
class CreateBatch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotification($value)
    {
        $this->data['Notification'] = $value;
        $this->options['form_params']['Notification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInput($value)
    {
        $this->data['Input'] = $value;
        $this->options['form_params']['Input'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceRole($value)
    {
        $this->data['ServiceRole'] = $value;
        $this->options['form_params']['ServiceRole'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActions($value)
    {
        $this->data['Actions'] = $value;
        $this->options['form_params']['Actions'] = $value;

        return $this;
    }
}

/**
 * @method string getBucketOwnerId()
 * @method $this withBucketOwnerId($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class CreateBinding extends Rpc
{
}

/**
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getCompressMethod()
 * @method $this withCompressMethod($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getPointCloudFields()
 * @method $this withPointCloudFields($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getPointCloudFileFormat()
 * @method $this withPointCloudFileFormat($value)
 * @method string getOctreeOption()
 * @method $this withOctreeOption($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getKdtreeOption()
 * @method $this withKdtreeOption($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class CreateCompressPointCloudTask extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method string getCover()
 * @method string getDatasetName()
 * @method string getProjectName()
 * @method string getStoryType()
 * @method string getStorySubType()
 * @method string getFiles()
 * @method string getStoryName()
 */
class CreateCustomizedStory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomLabels($value)
    {
        $this->data['CustomLabels'] = $value;
        $this->options['form_params']['CustomLabels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCover($value)
    {
        $this->data['Cover'] = $value;
        $this->options['form_params']['Cover'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryType($value)
    {
        $this->data['StoryType'] = $value;
        $this->options['form_params']['StoryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorySubType($value)
    {
        $this->data['StorySubType'] = $value;
        $this->options['form_params']['StorySubType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFiles($value)
    {
        $this->data['Files'] = $value;
        $this->options['form_params']['Files'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryName($value)
    {
        $this->data['StoryName'] = $value;
        $this->options['form_params']['StoryName'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 */
class CreateDataset extends Rpc
{
}

/**
 * @method string getTopK()
 * @method $this withTopK($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class CreateFacesSearchingTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateFigureClusteringTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getFroms()
 * @method $this withFroms($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class CreateFigureClustersMergingTask extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSourceManifestURI()
 * @method $this withSourceManifestURI($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getAllowCrossRegion()
 * @method $this withAllowCrossRegion($value)
 * @method string getCompressedFormat()
 * @method $this withCompressedFormat($value)
 */
class CreateFileCompressionTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSelectedFiles()
 * @method $this withSelectedFiles($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class CreateFileUncompressionTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getMaxFrames()
 * @method $this withMaxFrames($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getReviewer()
 * @method $this withReviewer($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class CreateImageModerationTask extends Rpc
{
}

/**
 * @method string getAlign()
 * @method $this withAlign($value)
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getScaleType()
 * @method $this withScaleType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getMargin()
 * @method $this withMargin($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getQuality()
 * @method $this withQuality($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPadding()
 * @method $this withPadding($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class CreateImageSplicingTask extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateImageToPDFTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLocationOptions()
 * @method $this withLocationOptions($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getDateOptions()
 * @method $this withDateOptions($value)
 */
class CreateLocationDateClusteringTask extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getAlignmentIndex()
 * @method $this withAlignmentIndex($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateMediaConvertTask extends Rpc
{
}

/**
 * @method string getSheetCount()
 * @method $this withSheetCount($value)
 * @method string getShowComments()
 * @method $this withShowComments($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPages()
 * @method $this withPages($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getFitToHeight()
 * @method $this withFitToHeight($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getFitToWidth()
 * @method $this withFitToWidth($value)
 * @method string getQuality()
 * @method $this withQuality($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getSheetIndex()
 * @method $this withSheetIndex($value)
 * @method string getHoldLineFeed()
 * @method $this withHoldLineFeed($value)
 * @method string getLongText()
 * @method $this withLongText($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getTrimPolicy()
 * @method $this withTrimPolicy($value)
 * @method string getMaxSheetColumn()
 * @method $this withMaxSheetColumn($value)
 * @method string getFirstPage()
 * @method $this withFirstPage($value)
 * @method string getPaperHorizontal()
 * @method $this withPaperHorizontal($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getScalePercentage()
 * @method $this withScalePercentage($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getTargetURIPrefix()
 * @method $this withTargetURIPrefix($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getPaperSize()
 * @method $this withPaperSize($value)
 * @method string getImageDPI()
 * @method $this withImageDPI($value)
 * @method string getLongPicture()
 * @method $this withLongPicture($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class CreateOfficeConversionTask extends Rpc
{
}

/**
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getProjectMaxDatasetCount()
 * @method $this withProjectMaxDatasetCount($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 */
class CreateProject extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateSimilarImageClusteringTask extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method string getProjectName()
 * @method string getNotifyTopicName()
 * @method string getStoryType()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorySubType()
 * @method string getMinFileCount()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getMaxFileCount()
 * @method string getDatasetName()
 * @method string getStoryStartTime()
 * @method string getAddress()
 * @method string getCustomId()
 * @method string getStoryEndTime()
 * @method string getObjectId()
 * @method string getStoryName()
 */
class CreateStory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomLabels($value)
    {
        $this->data['CustomLabels'] = $value;
        $this->options['form_params']['CustomLabels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyEndpoint($value)
    {
        $this->data['NotifyEndpoint'] = $value;
        $this->options['form_params']['NotifyEndpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyTopicName($value)
    {
        $this->data['NotifyTopicName'] = $value;
        $this->options['form_params']['NotifyTopicName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryType($value)
    {
        $this->data['StoryType'] = $value;
        $this->options['form_params']['StoryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorySubType($value)
    {
        $this->data['StorySubType'] = $value;
        $this->options['form_params']['StorySubType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinFileCount($value)
    {
        $this->data['MinFileCount'] = $value;
        $this->options['form_params']['MinFileCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFileCount($value)
    {
        $this->data['MaxFileCount'] = $value;
        $this->options['form_params']['MaxFileCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryStartTime($value)
    {
        $this->data['StoryStartTime'] = $value;
        $this->options['form_params']['StoryStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomId($value)
    {
        $this->data['CustomId'] = $value;
        $this->options['form_params']['CustomId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryEndTime($value)
    {
        $this->data['StoryEndTime'] = $value;
        $this->options['form_params']['StoryEndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['form_params']['ObjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryName($value)
    {
        $this->data['StoryName'] = $value;
        $this->options['form_params']['StoryName'] = $value;

        return $this;
    }
}

/**
 * @method string getNotification()
 * @method string getProjectName()
 * @method string getTags()
 * @method string getInput()
 * @method string getServiceRole()
 * @method string getActions()
 */
class CreateTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotification($value)
    {
        $this->data['Notification'] = $value;
        $this->options['form_params']['Notification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInput($value)
    {
        $this->data['Input'] = $value;
        $this->options['form_params']['Input'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceRole($value)
    {
        $this->data['ServiceRole'] = $value;
        $this->options['form_params']['ServiceRole'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActions($value)
    {
        $this->data['Actions'] = $value;
        $this->options['form_params']['Actions'] = $value;

        return $this;
    }
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class CreateVideoLabelClassificationTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getMaxFrames()
 * @method $this withMaxFrames($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getReviewer()
 * @method $this withReviewer($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class CreateVideoModerationTask extends Rpc
{
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class DeleteBatch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURI()
 * @method $this withURI($value)
 * @method string getCleanup()
 * @method $this withCleanup($value)
 */
class DeleteBinding extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DeleteDataset extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class DeleteFileMeta extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getObjectId()
 */
class DeleteLocationDateCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['form_params']['ObjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class DeleteStory extends Rpc
{
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class DeleteTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 */
class DetachOSSBucket extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getSensitivity()
 * @method $this withSensitivity($value)
 */
class DetectImageBodies extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageCars extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageCodes extends Rpc
{
}

/**
 * @method string getAspectRatios()
 * @method $this withAspectRatios($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageCropping extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageFaces extends Rpc
{
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageLabels extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectImageScore extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class DetectMediaMeta extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DetectTextAnomaly extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class ExtractDocumentText extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class FuzzyQuery extends Rpc
{
}

/**
 * @method string getReferer()
 * @method $this withReferer($value)
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getFilename()
 * @method $this withFilename($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getExternalUploaded()
 * @method $this withExternalUploaded($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPreviewPages()
 * @method $this withPreviewPages($value)
 * @method string getHidecmb()
 * @method $this withHidecmb($value)
 * @method string getCachePreview()
 * @method $this withCachePreview($value)
 * @method string getPermission()
 * @method $this withPermission($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GenerateWebofficeToken extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class GetBatch extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class GetBinding extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWithStatistics()
 * @method $this withWithStatistics($value)
 */
class GetDataset extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class GetFigureCluster extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class GetFileMeta extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class GetImageModerationResult extends Rpc
{
}

/**
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 */
class GetOSSBucketAttachment extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWithStatistics()
 * @method $this withWithStatistics($value)
 */
class GetProject extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class GetStory extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getRequestDefinition()
 * @method $this withRequestDefinition($value)
 */
class GetTask extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class GetTrigger extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class GetVideoLabelClassificationResult extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 */
class GetVideoModerationResult extends Rpc
{
}

/**
 * @method string getNotification()
 * @method $this withNotification($value)
 * @method string getFile()
 * @method $this withFile($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 */
class IndexFileMeta extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagSelector()
 * @method $this withTagSelector($value)
 */
class ListBatches extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListBindings extends Rpc
{
}

/**
 * @method string getPrefix()
 * @method $this withPrefix($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDatasets extends Rpc
{
}

/**
 * @method string getPrefix()
 * @method $this withPrefix($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListProjects extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListRegions extends Rpc
{
}

/**
 * @method string getStartTimeRange()
 * @method $this withStartTimeRange($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getTaskTypes()
 * @method $this withTaskTypes($value)
 * @method string getEndTimeRange()
 * @method $this withEndTimeRange($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getRequestDefinition()
 * @method $this withRequestDefinition($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagSelector()
 * @method $this withTagSelector($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTasks extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagSelector()
 * @method $this withTagSelector($value)
 */
class ListTriggers extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getWithTotalCount()
 * @method $this withWithTotalCount($value)
 * @method string getUpdateTimeRange()
 * @method $this withUpdateTimeRange($value)
 */
class QueryFigureClusters extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLocationDateClusterLevels()
 * @method $this withLocationDateClusterLevels($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getLocationDateClusterEndTimeRange()
 * @method $this withLocationDateClusterEndTimeRange($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getLocationDateClusterStartTimeRange()
 * @method $this withLocationDateClusterStartTimeRange($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getUpdateTimeRange()
 * @method $this withUpdateTimeRange($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class QueryLocationDateClusters extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class QuerySimilarImageClusters extends Rpc
{
}

/**
 * @method string getFigureClusterIds()
 * @method $this withFigureClusterIds($value)
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getWithEmptyStories()
 * @method $this withWithEmptyStories($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getStoryType()
 * @method $this withStoryType($value)
 * @method string getStoryStartTimeRange()
 * @method $this withStoryStartTimeRange($value)
 * @method string getStorySubType()
 * @method $this withStorySubType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getStoryEndTimeRange()
 * @method $this withStoryEndTimeRange($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 * @method string getStoryName()
 * @method $this withStoryName($value)
 */
class QueryStories extends Rpc
{
}

/**
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getRefreshToken()
 * @method $this withRefreshToken($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class RefreshWebofficeToken extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method string getProjectName()
 * @method string getFiles()
 * @method string getObjectId()
 */
class RemoveStoryFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFiles($value)
    {
        $this->data['Files'] = $value;
        $this->options['form_params']['Files'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['form_params']['ObjectId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class ResumeBatch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class ResumeTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 */
class SearchImageFigureCluster extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SemanticQuery extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getWithFields()
 * @method $this withWithFields($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAggregations()
 * @method $this withAggregations($value)
 */
class SimpleQuery extends Rpc
{
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class SuspendBatch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method string getProjectName()
 */
class SuspendTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }
}

/**
 * @method string getNotification()
 * @method string getId()
 * @method string getProjectName()
 * @method string getTags()
 * @method string getInput()
 * @method string getActions()
 */
class UpdateBatch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotification($value)
    {
        $this->data['Notification'] = $value;
        $this->options['form_params']['Notification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInput($value)
    {
        $this->data['Input'] = $value;
        $this->options['form_params']['Input'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActions($value)
    {
        $this->data['Actions'] = $value;
        $this->options['form_params']['Actions'] = $value;

        return $this;
    }
}

/**
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 */
class UpdateDataset extends Rpc
{
}

/**
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getFigureCluster()
 * @method $this withFigureCluster($value)
 */
class UpdateFigureCluster extends Rpc
{
}

/**
 * @method string getFile()
 * @method $this withFile($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class UpdateFileMeta extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCustomId()
 * @method $this withCustomId($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class UpdateLocationDateCluster extends Rpc
{
}

/**
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getProjectMaxDatasetCount()
 * @method $this withProjectMaxDatasetCount($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 */
class UpdateProject extends Rpc
{
}

/**
 * @method string getCustomLabels()
 * @method string getCover()
 * @method string getDatasetName()
 * @method string getProjectName()
 * @method string getCustomId()
 * @method string getObjectId()
 * @method string getStoryName()
 */
class UpdateStory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomLabels($value)
    {
        $this->data['CustomLabels'] = $value;
        $this->options['form_params']['CustomLabels'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCover($value)
    {
        $this->data['Cover'] = $value;
        $this->options['form_params']['Cover'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDatasetName($value)
    {
        $this->data['DatasetName'] = $value;
        $this->options['form_params']['DatasetName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomId($value)
    {
        $this->data['CustomId'] = $value;
        $this->options['form_params']['CustomId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectId($value)
    {
        $this->data['ObjectId'] = $value;
        $this->options['form_params']['ObjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoryName($value)
    {
        $this->data['StoryName'] = $value;
        $this->options['form_params']['StoryName'] = $value;

        return $this;
    }
}

/**
 * @method string getNotification()
 * @method string getId()
 * @method string getProjectName()
 * @method string getTags()
 * @method string getInput()
 * @method string getActions()
 */
class UpdateTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotification($value)
    {
        $this->data['Notification'] = $value;
        $this->options['form_params']['Notification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInput($value)
    {
        $this->data['Input'] = $value;
        $this->options['form_params']['Input'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActions($value)
    {
        $this->data['Actions'] = $value;
        $this->options['form_params']['Actions'] = $value;

        return $this;
    }
}
