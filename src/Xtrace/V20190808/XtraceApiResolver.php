<?php

namespace AlibabaCloud\Xtrace\V20190808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetTrace getTrace(array $options = [])
 * @method SearchTraces searchTraces(array $options = [])
 * @method GetTagVal getTagVal(array $options = [])
 * @method GetTagKey getTagKey(array $options = [])
 * @method ListIpOrHosts listIpOrHosts(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ListSpanNames listSpanNames(array $options = [])
 * @method GetToken getToken(array $options = [])
 */
class XtraceApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'xtrace';

    /** @var string */
    public $version = '2019-08-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'xtrace';
}

/**
 * @method string getTraceID()
 * @method $this withTraceID($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class GetTrace extends Rpc
{
}

/**
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getTag()
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchTraces extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getSpanName()
 * @method $this withSpanName($value)
 */
class GetTagVal extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSpanName()
 * @method $this withSpanName($value)
 */
class GetTagKey extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListIpOrHosts extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class ListServices extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListSpanNames extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 */
class GetToken extends Rpc
{
}
