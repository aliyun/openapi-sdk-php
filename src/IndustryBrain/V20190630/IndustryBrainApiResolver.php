<?php

namespace AlibabaCloud\IndustryBrain\V20190630;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AsyncResponsePost asyncResponsePost(array $options = [])
 * @method GetAlgorithmHistoryResult getAlgorithmHistoryResult(array $options = [])
 * @method GetPointReckoningValue getPointReckoningValue(array $options = [])
 * @method GetPointSampleValue getPointSampleValue(array $options = [])
 * @method GetServiceResultAsync getServiceResultAsync(array $options = [])
 * @method InvokeService invokeService(array $options = [])
 * @method InvokeServiceAsync invokeServiceAsync(array $options = [])
 */
class IndustryBrainApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'industry-brain';

    /** @var string */
    public $version = '2019-06-30';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getContext()
 * @method $this withContext($value)
 * @method string getProgress()
 * @method $this withProgress($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AsyncResponsePost extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetAlgorithmHistoryResult extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetPointReckoningValue extends Rpc
{
}

/**
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetPointSampleValue extends Rpc
{
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetServiceResultAsync extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRequestParams()
 * @method $this withRequestParams($value)
 * @method string getShowBizInfo()
 * @method $this withShowBizInfo($value)
 * @method string getForceInvokeConfiguration()
 * @method $this withForceInvokeConfiguration($value)
 * @method string getContext()
 * @method $this withContext($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 * @method string getShowParams()
 * @method $this withShowParams($value)
 */
class InvokeService extends Rpc
{
}

/**
 * @method string getIsShowInput()
 * @method $this withIsShowInput($value)
 * @method string getContext()
 * @method $this withContext($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 */
class InvokeServiceAsync extends Rpc
{
}
