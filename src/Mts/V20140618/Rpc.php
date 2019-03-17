<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

class V20140618Rpc extends Rpc
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
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpShotConfig()
 * @method $this withFpShotConfig($value)
 * @method string getQueryMedia()
 * @method $this withQueryMedia($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMasterMedia()
 * @method $this withMasterMedia($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitFpCompareJob extends V20140618Rpc
{
}

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getSpam()
 * @method string getLive()
 * @method $this withLive($value)
 */
class UpdateMCTemplate extends V20140618Rpc
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
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMCTemplateList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
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
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QueryMCJobList extends V20140618Rpc
{
}

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getSpam()
 * @method string getLive()
 * @method $this withLive($value)
 */
class AddMCTemplate extends V20140618Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteMCTemplate extends V20140618Rpc
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
class QueryCensorTemplateList extends V20140618Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getTexts()
 * @method $this withTexts($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCensorConfig()
 * @method $this withCensorConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitMCJob extends V20140618Rpc
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
class DeleteCensorTemplate extends V20140618Rpc
{
}

/**
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getSpam()
 * @method string getLive()
 * @method $this withLive($value)
 */
class UpdateCensorTemplate extends V20140618Rpc
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
 * @method string getPolitics()
 * @method $this withPolitics($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContraband()
 * @method $this withContraband($value)
 * @method string getAd()
 * @method $this withAd($value)
 * @method string getAbuse()
 * @method $this withAbuse($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getQrcode()
 * @method $this withQrcode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPorn()
 * @method $this withPorn($value)
 * @method string getTerrorism()
 * @method $this withTerrorism($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLogo()
 * @method $this withLogo($value)
 * @method string getSpam()
 * @method string getLive()
 * @method $this withLive($value)
 */
class AddCensorTemplate extends V20140618Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaFpDeleteJobList extends V20140618Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getPrimaryKey()
 * @method $this withPrimaryKey($value)
 */
class SubmitMediaFpDeleteJob extends V20140618Rpc
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
class DeleteMcuJob extends V20140618Rpc
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
class CreateMcuTemplate extends V20140618Rpc
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateMcuTemplate extends V20140618Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitMcuJob extends V20140618Rpc
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
class QueryMcuTemplate extends V20140618Rpc
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
class QueryMcuJob extends V20140618Rpc
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
class DeleteMcuTemplate extends V20140618Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMtsUserResourcePackage extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryImageSearchJobList extends V20140618Rpc
{
}

/**
 * @method string getInputImage()
 * @method $this withInputImage($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFpDBId()
 * @method $this withFpDBId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInputVideo()
 * @method $this withInputVideo($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitImageSearchJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QueryMediaCensorJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class ListMediaCensorJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class ListFpShotJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryFpImportResult extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitVideoPoseJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryVideoPoseJobList extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaCensorJobDetail extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCoverImages()
 * @method $this withCoverImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getVideoCensorConfig()
 * @method $this withVideoCensorConfig($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getBarrages()
 * @method $this withBarrages($value)
 */
class SubmitMediaCensorJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryComplexJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTranscodeOutput()
 * @method $this withTranscodeOutput($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInputs()
 * @method $this withInputs($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getComplexConfigs()
 * @method $this withComplexConfigs($value)
 */
class SubmitComplexJob extends V20140618Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getInputConfig()
 * @method $this withInputConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitSubtitleJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySubtitleJobList extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
class SubmitImageQuality extends V20140618Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class LogicalDeleteResource extends V20140618Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class PhysicalDeleteResource extends V20140618Rpc
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
class CheckResource extends V20140618Rpc
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
class ListAllMediaStorage extends V20140618Rpc
{
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnindInputBucket extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
class SubmitImageQualityJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryVideoGifJobList extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class SubmitVideoGifJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 */
class UpdateMediaWorkflowTriggerMode extends V20140618Rpc
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
class GetPackage extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class SubmitFpShotJob extends V20140618Rpc
{
}

/**
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportFpShotJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
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
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QueryFpShotJobList extends V20140618Rpc
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
 * @method string getHeader()
 * @method $this withHeader($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLicenseUrl()
 * @method $this withLicenseUrl($value)
 */
class GetLicense extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSessionTime()
 * @method $this withSessionTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndUserId()
 * @method $this withEndUserId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class CreateSession extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPersonLib()
 * @method $this withPersonLib($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPersonName()
 * @method $this withPersonName($value)
 */
class RegisterMediaDetailPerson extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getVideoSplitConfig()
 * @method $this withVideoSplitConfig($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
class SubmitVideoSplitJob extends V20140618Rpc
{
}

/**
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportVideoSplitJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryVideoSplitJobList extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaDetailConfig()
 * @method $this withMediaDetailConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitMediaDetailJob extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResults()
 * @method $this withResults($value)
 */
class ReportMediaDetailJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScenario()
 * @method $this withScenario($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RegisterMediaDetailScenario extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaDetailJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListDesc()
 * @method $this withListDesc($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDictionaryId()
 * @method $this withDictionaryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 */
class UpdateKwsDictionary extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateKwsPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getKwsConfig()
 * @method $this withKwsConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitKwsJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryKwsJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryKwsPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDictionaryId()
 * @method $this withDictionaryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryKwsDictionary extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKwsPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDictionaryId()
 * @method $this withDictionaryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteKwsDictionary extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListDesc()
 * @method $this withListDesc($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExtendConfig()
 * @method $this withExtendConfig($value)
 */
class CreateKwsDictionary extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddKwsPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class SubmitFacerecogJob extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAnnotationConfig()
 * @method $this withAnnotationConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitAnnotationJob extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFacerecog()
 * @method $this withFacerecog($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportFacerecogJobResult extends V20140618Rpc
{
}

/**
 * @method string getAnnotation()
 * @method $this withAnnotation($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDetails()
 * @method $this withDetails($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportAnnotationJobResult extends V20140618Rpc
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
class QueryFacerecogJobList extends V20140618Rpc
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
class QueryAnnotationJobList extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class SubmitTagJob extends V20140618Rpc
{
}

/**
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportTagJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTagJobIds()
 * @method $this withTagJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTagJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateTerrorismPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
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
 * @method string getTerrorismConfig()
 * @method $this withTerrorismConfig($value)
 */
class SubmitTerrorismJob extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportTerrorismJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTerrorismJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTerrorismPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListTerrorismPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddTerrorismPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateCensorPipeline extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportCensorJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
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
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QueryCensorJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCensorPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCensorPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddCensorPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateVideoSummaryPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVideoSummaryConfig()
 * @method $this withVideoSummaryConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitVideoSummaryJob extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryVideoSummaryPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryVideoSummaryJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListVideoSummaryPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddVideoSummaryPipeline extends V20140618Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateCoverPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCoverConfig()
 * @method $this withCoverConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitCoverJob extends V20140618Rpc
{
}

/**
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportCoverJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCoverJobIds()
 * @method $this withCoverJobIds($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QueryCoverJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCoverPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCoverPipeline extends V20140618Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddCoverPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdateAsrPipeline extends V20140618Rpc
{
}

/**
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEditingJobOutputs()
 * @method $this withEditingJobOutputs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEditingInputs()
 * @method $this withEditingInputs($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitEditingJobs extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitAsrJob extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportAsrJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryEditingJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryAsrJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryAsrPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAsrPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddAsrPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdatePornPipeline extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPornConfig()
 * @method $this withPornConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitPornJob extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReportPornJobResult extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryPornJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryPornPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPornPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class AddPornPipeline extends V20140618Rpc
{
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnbindInputBucket extends V20140618Rpc
{
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnbindOutputBucket extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListMedia extends V20140618Rpc
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
class QueryAuthConfig extends V20140618Rpc
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
class RefreshCdnDomainConfigsCache extends V20140618Rpc
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
class SetAuthConfig extends V20140618Rpc
{
}

/**
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFormats()
 * @method $this withFormats($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
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
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getAuthTimeout()
 * @method $this withAuthTimeout($value)
 * @method string getAuthInfo()
 * @method $this withAuthInfo($value)
 */
class PlayInfo extends V20140618Rpc
{
}

/**
 * @method string getRand()
 * @method $this withRand($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCiphertextBlob()
 * @method $this withCiphertextBlob($value)
 */
class DecryptKey extends V20140618Rpc
{
}

/**
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class UpdateMedia extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCategory extends V20140618Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaCover extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPublish()
 * @method $this withPublish($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class UpdateMediaPublishState extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class UpdateCategoryName extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getFileURLs()
 * @method $this withFileURLs($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaListByURL extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListAllMediaBucket extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class DeleteMediaTag extends V20140618Rpc
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
class ListAllCategory extends V20140618Rpc
{
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BindOutputBucket extends V20140618Rpc
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
class CategoryTree extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCategory extends V20140618Rpc
{
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BindInputBucket extends V20140618Rpc
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
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getCateName()
 * @method $this withCateName($value)
 */
class AddCategory extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getInputUnbind()
 * @method $this withInputUnbind($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getFileURL()
 * @method $this withFileURL($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getMediaWorkflowUserData()
 * @method $this withMediaWorkflowUserData($value)
 */
class AddMedia extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaId()
 * @method $this withMediaId($value)
 */
class AddMediaTag extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class ListJob extends V20140618Rpc
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
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateMediaWorkflow extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class SearchMedia extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStateList()
 * @method $this withStateList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchMediaWorkflow extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeSummaryList()
 * @method $this withIncludeSummaryList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIncludeSnapshotList()
 * @method $this withIncludeSnapshotList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludePlayList()
 * @method $this withIncludePlayList($value)
 * @method string getIncludeMediaInfo()
 * @method $this withIncludeMediaInfo($value)
 */
class QueryMediaList extends V20140618Rpc
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
class QueryMediaWorkflowExecutionList extends V20140618Rpc
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
class QueryMediaWorkflowList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInputFileURL()
 * @method $this withInputFileURL($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMediaWorkflowName()
 * @method $this withMediaWorkflowName($value)
 */
class ListMediaWorkflowExecutions extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeactivateMediaWorkflow extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaIds()
 * @method $this withMediaIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMedia extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMediaWorkflow extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ActivateMediaWorkflow extends V20140618Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTriggerMode()
 * @method $this withTriggerMode($value)
 */
class AddMediaWorkflow extends V20140618Rpc
{
}

/**
 * @method string getOutputs()
 * @method $this withOutputs($value)
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitJobs extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getAsync()
 * @method $this withAsync($value)
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
class SubmitMediaInfoJob extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnapshotConfig()
 * @method $this withSnapshotConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitSnapshotJob extends V20140618Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class UpdatePipeline extends V20140618Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 */
class UpdateTemplate extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWaterMarkTemplateId()
 * @method $this withWaterMarkTemplateId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class UpdateWaterMarkTemplate extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchTemplate extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchWaterMarkTemplate extends V20140618Rpc
{
}

/**
 * @method string getInput()
 * @method $this withInput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAnalysisConfig()
 * @method $this withAnalysisConfig($value)
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
 */
class SubmitAnalysisJob extends V20140618Rpc
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
class QueryWaterMarkTemplateList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchPipeline extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMediaInfoJobIds()
 * @method $this withMediaInfoJobIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMediaInfoJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPipelineIds()
 * @method $this withPipelineIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryPipelineList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getSnapshotJobIds()
 * @method $this withSnapshotJobIds($value)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this withStartOfJobCreatedTimeRange($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaximumPageSize()
 * @method $this withMaximumPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this withEndOfJobCreatedTimeRange($value)
 */
class QuerySnapshotJobList extends V20140618Rpc
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
class QueryTemplateList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryJobList extends V20140618Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class AddWaterMarkTemplate extends V20140618Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelJob extends V20140618Rpc
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
class DeletePipeline extends V20140618Rpc
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
class DeleteTemplate extends V20140618Rpc
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
class DeleteWaterMarkTemplate extends V20140618Rpc
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
class PlayerAuth extends V20140618Rpc
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
class QueryAnalysisJobList extends V20140618Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getNotifyConfig()
 * @method $this withNotifyConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpeedLevel()
 * @method $this withSpeedLevel($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 */
class AddPipeline extends V20140618Rpc
{
}

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddTemplate extends V20140618Rpc
{
}
