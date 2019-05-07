<?php

namespace AlibabaCloud\IndustryBrain\V20180712;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method AsyncResponsePost asyncResponsePost(array $options = [])
 * @method TestHsfPostData testHsfPostData(array $options = [])
 * @method GetDataProperties getDataProperties(array $options = [])
 * @method TestInvokeService testInvokeService(array $options = [])
 * @method TestPostData testPostData(array $options = [])
 * @method GetIndustryInfoLineageList getIndustryInfoLineageList(array $options = [])
 * @method GetIndustryInfoChildrenList getIndustryInfoChildrenList(array $options = [])
 * @method GetIndustryInfo getIndustryInfo(array $options = [])
 * @method GetIndustryInfoList getIndustryInfoList(array $options = [])
 * @method GetAlgorithmList getAlgorithmList(array $options = [])
 * @method GetServiceInputMapping getServiceInputMapping(array $options = [])
 * @method InvokeService invokeService(array $options = [])
 * @method PostRealTimeDeviceData postRealTimeDeviceData(array $options = [])
 * @method OperateEquipment operateEquipment(array $options = [])
 * @method GetOSSImageAccess getOSSImageAccess(array $options = [])
 * @method GetAsyncServiceResult getAsyncServiceResult(array $options = [])
 * @method GetServiceResultAsync getServiceResultAsync(array $options = [])
 * @method InvokeServiceAsync invokeServiceAsync(array $options = [])
 * @method GetAlgoDataMapping getAlgoDataMapping(array $options = [])
 * @method GetOnlineServiceResult getOnlineServiceResult(array $options = [])
 */
class IndustryBrainApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'industry-brain';

    /** @var string */
    public $version = '2018-07-12';
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

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class TestHsfPostData extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetDataProperties extends Rpc
{
}

/**
 * @method string getRequestParams()
 * @method $this withRequestParams($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 * @method string getShowParams()
 * @method $this withShowParams($value)
 */
class TestInvokeService extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getData()
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class TestPostData extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfoLineageList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfoChildrenList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class GetIndustryInfoList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetAlgorithmList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getShowLatestData()
 * @method $this withShowLatestData($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getAlgorithmId()
 * @method $this withAlgorithmId($value)
 */
class GetServiceInputMapping extends Rpc
{
}

/**
 * @method string getRequestParams()
 * @method $this withRequestParams($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 * @method string getShowParams()
 * @method $this withShowParams($value)
 */
class InvokeService extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getData()
 * @method string getServiceId()
 */
class PostRealTimeDeviceData extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getOperation()
 * @method string getProjectId()
 * @method string getRequestData()
 */
class OperateEquipment extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestData($value)
    {
        $this->data['RequestData'] = $value;
        $this->options['form_params']['RequestData'] = $value;

        return $this;
    }
}

/**
 * @method string getUserCode()
 * @method $this withUserCode($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetOSSImageAccess extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetAsyncServiceResult extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetServiceResultAsync extends Rpc
{
}

/**
 * @method string getIsShowInput()
 * @method $this withIsShowInput($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 */
class InvokeServiceAsync extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetAlgoDataMapping extends Rpc
{
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetOnlineServiceResult extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}
