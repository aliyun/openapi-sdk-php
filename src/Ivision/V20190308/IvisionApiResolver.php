<?php

namespace AlibabaCloud\Ivision\V20190308;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateFaceGroup createFaceGroup(array $options = [])
 * @method CreateStreamPredict createStreamPredict(array $options = [])
 * @method DeleteFaceGroup deleteFaceGroup(array $options = [])
 * @method DeleteStreamPredict deleteStreamPredict(array $options = [])
 * @method DescribeFaceGroups describeFaceGroups(array $options = [])
 * @method DescribeStreamPredictResult describeStreamPredictResult(array $options = [])
 * @method DescribeStreamPredicts describeStreamPredicts(array $options = [])
 * @method ImagePredict imagePredict(array $options = [])
 * @method RegisterFace registerFace(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method StartStreamPredict startStreamPredict(array $options = [])
 * @method StopStreamPredict stopStreamPredict(array $options = [])
 * @method UnregisterFace unregisterFace(array $options = [])
 */
class IvisionApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ivision';

    /** @var string */
    public $version = '2019-03-08';

    /** @var string */
    public $serviceCode = 'ivision';
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateFaceGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getNotify()
 * @method $this withNotify($value)
 * @method string getOutput()
 * @method $this withOutput($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getFaceGroupId()
 * @method $this withFaceGroupId($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getPredictTemplateId()
 * @method $this withPredictTemplateId($value)
 * @method string getDetectIntervals()
 * @method $this withDetectIntervals($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProbabilityThresholds()
 * @method $this withProbabilityThresholds($value)
 * @method string getModelIds()
 * @method $this withModelIds($value)
 * @method string getModelUserData()
 * @method $this withModelUserData($value)
 */
class CreateStreamPredict extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFaceGroup extends Rpc
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
class DeleteStreamPredict extends Rpc
{

    /** @var string */
    public $method = 'POST';
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFaceGroups extends Rpc
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
class DescribeStreamPredictResult extends Rpc
{

    /** @var string */
    public $method = 'POST';
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
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStreamPredicts extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDataUrl()
 * @method $this withDataUrl($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImagePredict extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RegisterFace extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getProbabilityThreshold()
 * @method $this withProbabilityThreshold($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SearchFace extends Rpc
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
class StartStreamPredict extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPredictId()
 * @method $this withPredictId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopStreamPredict extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFaceToken()
 * @method $this withFaceToken($value)
 */
class UnregisterFace extends Rpc
{
}
