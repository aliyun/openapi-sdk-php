<?php

namespace AlibabaCloud\Imm\V20200930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddStoryFiles addStoryFiles(array $options = [])
 * @method AttachOSSBucket attachOSSBucket(array $options = [])
 * @method BatchDeleteFileMeta batchDeleteFileMeta(array $options = [])
 * @method BatchGetFileMeta batchGetFileMeta(array $options = [])
 * @method BatchIndexFileMeta batchIndexFileMeta(array $options = [])
 * @method BatchUpdateFileMeta batchUpdateFileMeta(array $options = [])
 * @method CreateBinding createBinding(array $options = [])
 * @method CreateDataset createDataset(array $options = [])
 * @method CreateDetectVideoLabelsTask createDetectVideoLabelsTask(array $options = [])
 * @method CreateFigureClusteringTask createFigureClusteringTask(array $options = [])
 * @method CreateFigureClustersMergingTask createFigureClustersMergingTask(array $options = [])
 * @method CreateImageModerationTask createImageModerationTask(array $options = [])
 * @method CreateImageSplicingTask createImageSplicingTask(array $options = [])
 * @method CreateMediaConvertTask createMediaConvertTask(array $options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateStory createStory(array $options = [])
 * @method CreateVideoModerationTask createVideoModerationTask(array $options = [])
 * @method DeleteBinding deleteBinding(array $options = [])
 * @method DeleteDataset deleteDataset(array $options = [])
 * @method DeleteFileMeta deleteFileMeta(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteStory deleteStory(array $options = [])
 * @method DetachOSSBucket detachOSSBucket(array $options = [])
 * @method DetectImageBodies detectImageBodies(array $options = [])
 * @method DetectImageCodes detectImageCodes(array $options = [])
 * @method DetectImageCropping detectImageCropping(array $options = [])
 * @method DetectImageFaces detectImageFaces(array $options = [])
 * @method DetectImageLabels detectImageLabels(array $options = [])
 * @method DetectImageScore detectImageScore(array $options = [])
 * @method DetectTextAnomaly detectTextAnomaly(array $options = [])
 * @method FuzzyQuery fuzzyQuery(array $options = [])
 * @method GetBinding getBinding(array $options = [])
 * @method GetDataset getDataset(array $options = [])
 * @method GetDetectVideoLabelsResult getDetectVideoLabelsResult(array $options = [])
 * @method GetFigureCluster getFigureCluster(array $options = [])
 * @method GetFileMeta getFileMeta(array $options = [])
 * @method GetMediaMeta getMediaMeta(array $options = [])
 * @method GetOSSBucketAttachment getOSSBucketAttachment(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetStory getStory(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method GetWebofficeURL getWebofficeURL(array $options = [])
 * @method IndexFileMeta indexFileMeta(array $options = [])
 * @method ListBindings listBindings(array $options = [])
 * @method ListDatasets listDatasets(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListTasks listTasks(array $options = [])
 * @method MergeFigureClusters mergeFigureClusters(array $options = [])
 * @method QueryFigureClusters queryFigureClusters(array $options = [])
 * @method QueryStories queryStories(array $options = [])
 * @method RefreshWebofficeToken refreshWebofficeToken(array $options = [])
 * @method RemoveStoryFiles removeStoryFiles(array $options = [])
 * @method ResumeBinding resumeBinding(array $options = [])
 * @method SemanticQuery semanticQuery(array $options = [])
 * @method SimpleQuery simpleQuery(array $options = [])
 * @method StopBinding stopBinding(array $options = [])
 * @method UpdateDataset updateDataset(array $options = [])
 * @method UpdateFigureCluster updateFigureCluster(array $options = [])
 * @method UpdateFileMeta updateFileMeta(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateStory updateStory(array $options = [])
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
 * @method string getProjectName()
 * @method string getDatasetName()
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
 * @method string getURIs()
 * @method $this withURIs($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class BatchDeleteFileMeta extends Rpc
{
}

/**
 * @method string getURIs()
 * @method $this withURIs($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class BatchGetFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getFiles()
 * @method $this withFiles($value)
 */
class BatchIndexFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getFiles()
 * @method $this withFiles($value)
 */
class BatchUpdateFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getBucketOwnerId()
 * @method $this withBucketOwnerId($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class CreateBinding extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class CreateDataset extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateDetectVideoLabelsTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateFigureClusteringTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateFigureClustersMergingTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 * @method string getMaxFrames()
 * @method $this withMaxFrames($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getReviewer()
 * @method $this withReviewer($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateImageModerationTask extends Rpc
{
}

/**
 * @method string getPadding()
 * @method $this withPadding($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getMargin()
 * @method $this withMargin($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getAlign()
 * @method $this withAlign($value)
 * @method string getQuality()
 * @method $this withQuality($value)
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getScaleType()
 * @method $this withScaleType($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class CreateImageSplicingTask extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateMediaConvertTask extends Rpc
{
}

/**
 * @method string getSheetCount()
 * @method $this withSheetCount($value)
 * @method string getLongText()
 * @method $this withLongText($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getShowComments()
 * @method $this withShowComments($value)
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
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getPages()
 * @method $this withPages($value)
 * @method string getTargetURIPrefix()
 * @method $this withTargetURIPrefix($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getTargetURI()
 * @method $this withTargetURI($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getPaperSize()
 * @method $this withPaperSize($value)
 * @method string getImageDPI()
 * @method $this withImageDPI($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getFitToHeight()
 * @method $this withFitToHeight($value)
 * @method string getLongPicture()
 * @method $this withLongPicture($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
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
 */
class CreateOfficeConversionTask extends Rpc
{
}

/**
 * @method string getEngineConcurrency()
 * @method $this withEngineConcurrency($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getProjectMaxDatasetCount()
 * @method $this withProjectMaxDatasetCount($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getProjectQueriesPerSecond()
 * @method $this withProjectQueriesPerSecond($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class CreateProject extends Rpc
{
}

/**
 * @method string getMinFileCount()
 * @method string getProjectName()
 * @method string getCustomLabels()
 * @method string getStoryStartTime()
 * @method string getNotifyTopicName()
 * @method string getStoryType()
 * @method string getCustomId()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getNotifyEndpoint()
 * @method string getMaxFileCount()
 * @method string getStorySubType()
 * @method string getDatasetName()
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
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getScenes()
 * @method $this withScenes($value)
 * @method string getMaxFrames()
 * @method $this withMaxFrames($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getReviewer()
 * @method $this withReviewer($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateVideoModerationTask extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCleanup()
 * @method $this withCleanup($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class DeleteBinding extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class DeleteDataset extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class DeleteFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class DeleteStory extends Rpc
{
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
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getSensitivity()
 * @method $this withSensitivity($value)
 */
class DetectImageBodies extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class DetectImageCodes extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getAspectRatios()
 * @method $this withAspectRatios($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class DetectImageCropping extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class DetectImageFaces extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class DetectImageLabels extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class DetectImageScore extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class DetectTextAnomaly extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class FuzzyQuery extends Rpc
{
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class GetBinding extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWithStatistics()
 * @method $this withWithStatistics($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class GetDataset extends Rpc
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
class GetDetectVideoLabelsResult extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class GetFigureCluster extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class GetFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class GetMediaMeta extends Rpc
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
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
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
 */
class GetTask extends Rpc
{
}

/**
 * @method string getReferer()
 * @method $this withReferer($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getCachePreview()
 * @method $this withCachePreview($value)
 * @method string getExternalUploaded()
 * @method $this withExternalUploaded($value)
 * @method string getPermission()
 * @method $this withPermission($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPreviewPages()
 * @method $this withPreviewPages($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getFilename()
 * @method $this withFilename($value)
 * @method string getHidecmb()
 * @method $this withHidecmb($value)
 * @method string getSourceURI()
 * @method $this withSourceURI($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class GetWebofficeURL extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getFile()
 * @method $this withFile($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class IndexFileMeta extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListBindings extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrefix()
 * @method $this withPrefix($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDatasets extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrefix()
 * @method $this withPrefix($value)
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
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTaskTypes()
 * @method $this withTaskTypes($value)
 * @method string getEndTimeRange()
 * @method $this withEndTimeRange($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagSelector()
 * @method $this withTagSelector($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getStartTimeRange()
 * @method $this withStartTimeRange($value)
 */
class ListTasks extends Rpc
{
}

/**
 * @method string getCustomMessage()
 * @method $this withCustomMessage($value)
 * @method string getClusterIdFrom()
 * @method $this withClusterIdFrom($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getFigureType()
 * @method $this withFigureType($value)
 * @method string getClusterIdTo()
 * @method $this withClusterIdTo($value)
 * @method string getNotifyTopicEndpoint()
 * @method $this withNotifyTopicEndpoint($value)
 */
class MergeFigureClusters extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class QueryFigureClusters extends Rpc
{
}

/**
 * @method string getFigureClusterIds()
 * @method $this withFigureClusterIds($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCustomLabels()
 * @method $this withCustomLabels($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getStoryType()
 * @method $this withStoryType($value)
 * @method string getStoryEndTimeRange()
 * @method $this withStoryEndTimeRange($value)
 * @method string getWithEmptyStories()
 * @method $this withWithEmptyStories($value)
 * @method string getStoryStartTimeRange()
 * @method $this withStoryStartTimeRange($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getStorySubType()
 * @method $this withStorySubType($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 * @method string getStoryName()
 * @method $this withStoryName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class QueryStories extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getRefreshToken()
 * @method $this withRefreshToken($value)
 * @method string getCredentialConfig()
 * @method $this withCredentialConfig($value)
 */
class RefreshWebofficeToken extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method string getDatasetName()
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
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class ResumeBinding extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class SemanticQuery extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getWithFields()
 * @method $this withWithFields($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getAggregations()
 * @method $this withAggregations($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class SimpleQuery extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getURI()
 * @method $this withURI($value)
 */
class StopBinding extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateDataset extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getFigureCluster()
 * @method $this withFigureCluster($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class UpdateFigureCluster extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getFile()
 * @method $this withFile($value)
 * @method string getDatasetName()
 * @method $this withDatasetName($value)
 */
class UpdateFileMeta extends Rpc
{
}

/**
 * @method string getEngineConcurrency()
 * @method $this withEngineConcurrency($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDatasetMaxBindCount()
 * @method $this withDatasetMaxBindCount($value)
 * @method string getProjectMaxDatasetCount()
 * @method $this withProjectMaxDatasetCount($value)
 * @method string getDatasetMaxTotalFileSize()
 * @method $this withDatasetMaxTotalFileSize($value)
 * @method string getServiceRole()
 * @method $this withServiceRole($value)
 * @method string getProjectQueriesPerSecond()
 * @method $this withProjectQueriesPerSecond($value)
 * @method string getDatasetMaxRelationCount()
 * @method $this withDatasetMaxRelationCount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDatasetMaxEntityCount()
 * @method $this withDatasetMaxEntityCount($value)
 * @method string getDatasetMaxFileCount()
 * @method $this withDatasetMaxFileCount($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateProject extends Rpc
{
}

/**
 * @method string getCover()
 * @method string getProjectName()
 * @method string getCustomLabels()
 * @method string getDatasetName()
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
