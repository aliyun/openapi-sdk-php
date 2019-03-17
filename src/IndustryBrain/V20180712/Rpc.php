<?php

namespace AlibabaCloud\IndustryBrain\V20180712;

use AlibabaCloud\Rpc;

class V20180712Rpc extends Rpc
{
    /** @var string */
    public $product = 'industry-brain';

    /** @var string */
    public $version = '2018-07-12';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getProgress()
 * @method $this withProgress($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AsyncResponsePost extends V20180712Rpc
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
class TestHsfPostData extends V20180712Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetDataProperties extends V20180712Rpc
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
class TestInvokeService extends V20180712Rpc
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
class TestPostData extends V20180712Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfoLineageList extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfoChildrenList extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIndustryCode()
 * @method $this withIndustryCode($value)
 */
class GetIndustryInfo extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';
}

class GetIndustryInfoList extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetAlgorithmList extends V20180712Rpc
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
class GetServiceInputMapping extends V20180712Rpc
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
class InvokeService extends V20180712Rpc
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
class PostRealTimeDeviceData extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getRequestData()
 * @method $this withRequestData($value)
 */
class OperateEquipment extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUserCode()
 * @method $this withUserCode($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetOSSImageAccess extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetAsyncServiceResult extends V20180712Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetServiceResultAsync extends V20180712Rpc
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
class InvokeServiceAsync extends V20180712Rpc
{
    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetAlgoDataMapping extends V20180712Rpc
{
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetOnlineServiceResult extends V20180712Rpc
{
    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'POST';
}
