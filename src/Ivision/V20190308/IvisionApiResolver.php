<?php

namespace AlibabaCloud\Ivision\V20190308;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateStreamPredict createStreamPredict(array $options = [])
 * @method DeleteStreamPredict deleteStreamPredict(array $options = [])
 * @method StopStreamPredict stopStreamPredict(array $options = [])
 * @method DescribeStreamPredictResult describeStreamPredictResult(array $options = [])
 * @method DescribeStreamPredicts describeStreamPredicts(array $options = [])
 * @method StartStreamPredict startStreamPredict(array $options = [])
 * @method DeleteTrainDatasTag deleteTrainDatasTag(array $options = [])
 * @method ModifyTrainDataRegionTagAttribute modifyTrainDataRegionTagAttribute(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method ModifyTagAttribute modifyTagAttribute(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method DeleteIteration deleteIteration(array $options = [])
 * @method DescribeIterations describeIterations(array $options = [])
 * @method TrainProject trainProject(array $options = [])
 * @method DescribeTrainResult describeTrainResult(array $options = [])
 * @method DeleteTrainDatas deleteTrainDatas(array $options = [])
 * @method CreateTrainDataTag createTrainDataTag(array $options = [])
 * @method DescribeTrainDatasByIds describeTrainDatasByIds(array $options = [])
 * @method CreateTrainDatasTag createTrainDatasTag(array $options = [])
 * @method CreateTrainDatasFromPrediction createTrainDatasFromPrediction(array $options = [])
 * @method CreateTrainDatasFromUrls createTrainDatasFromUrls(array $options = [])
 * @method CreateTrainDataRegionTag createTrainDataRegionTag(array $options = [])
 * @method DeleteTrainDataTag deleteTrainDataTag(array $options = [])
 * @method ModifyTrainDataTagAttribute modifyTrainDataTagAttribute(array $options = [])
 * @method DescribeTrainDatas describeTrainDatas(array $options = [])
 * @method PredictImage predictImage(array $options = [])
 * @method CreateUploadToken createUploadToken(array $options = [])
 * @method DescribeProjects describeProjects(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method ModifyProjectAttribute modifyProjectAttribute(array $options = [])
 * @method DeletePredictDatas deletePredictDatas(array $options = [])
 * @method DescribePredictDatas describePredictDatas(array $options = [])
 */
class IvisionApiResolver
{
    use ApiResolverTrait;
}

class V20190308Rpc extends Rpc
{
    /** @var string */
    public $product = 'ivision';

    /** @var string */
    public $version = '2019-03-08';

    /** @var string */
    public $serviceCode = 'ivision';
}

/**
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getNotify()
 * @method $this withNotify($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProbabilityThresholds()
 * @method $this withProbabilityThresholds($value)
 * @method string getModelIds()
 * @method $this withModelIds($value)
 */
class CreateStreamPredict extends V20190308Rpc
{
}

/**
 * @method string getPredictId()
 * @method $this withPredictId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteStreamPredict extends V20190308Rpc
{
}

/**
 * @method string getPredictId()
 * @method $this withPredictId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopStreamPredict extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPredictId()
 * @method $this withPredictId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProbabilityThreshold()
 * @method $this withProbabilityThreshold($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStreamPredictResult extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPredictIds()
 * @method $this withPredictIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStreamPredicts extends V20190308Rpc
{
}

/**
 * @method string getPredictId()
 * @method $this withPredictId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartStreamPredict extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTrainDatasTag extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagItems()
 * @method $this withTagItems($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 */
class ModifyTrainDataRegionTagAttribute extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DescribeTags extends V20190308Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyTagAttribute extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTag extends V20190308Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateTag extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DeleteIteration extends V20190308Rpc
{
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIterationIds()
 * @method $this withIterationIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeIterations extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TrainProject extends V20190308Rpc
{
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DescribeTrainResult extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTrainDatas extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagItems()
 * @method $this withTagItems($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 */
class CreateTrainDataTag extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DescribeTrainDatasByIds extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTrainDatasTag extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class CreateTrainDatasFromPrediction extends V20190308Rpc
{
}

/**
 * @method string getUrls()
 * @method $this withUrls($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTrainDatasFromUrls extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagItems()
 * @method $this withTagItems($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 */
class CreateTrainDataRegionTag extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTrainDataTag extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagItems()
 * @method $this withTagItems($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 */
class ModifyTrainDataTagAttribute extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getTagStatus()
 * @method $this withTagStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DescribeTrainDatas extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 * @method string getDataUrls()
 * @method $this withDataUrls($value)
 */
class PredictImage extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class CreateUploadToken extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProjectIds()
 * @method $this withProjectIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeProjects extends V20190308Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteProject extends V20190308Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProType()
 * @method $this withProType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateProject extends V20190308Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyProjectAttribute extends V20190308Rpc
{
}

/**
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DeletePredictDatas extends V20190308Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProbabilityThreshold()
 * @method $this withProbabilityThreshold($value)
 * @method string getOverlapThreshold()
 * @method $this withOverlapThreshold($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIterationId()
 * @method $this withIterationId($value)
 */
class DescribePredictDatas extends V20190308Rpc
{
}
