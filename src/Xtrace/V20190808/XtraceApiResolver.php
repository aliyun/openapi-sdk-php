<?php

namespace AlibabaCloud\Xtrace\V20190808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetTagKey getTagKey(array $options = [])
 * @method GetTagVal getTagVal(array $options = [])
 * @method GetToken getToken(array $options = [])
 * @method GetTrace getTrace(array $options = [])
 * @method GetTraceAnalysis getTraceAnalysis(array $options = [])
 * @method ListIpOrHosts listIpOrHosts(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ListSpanNames listSpanNames(array $options = [])
 * @method QueryMetric queryMetric(array $options = [])
 * @method SearchTraces searchTraces(array $options = [])
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
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getSpanName()
 * @method $this withSpanName($value)
 */
class GetTagVal extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getIsForce()
 * @method $this withIsForce($value)
 */
class GetToken extends Rpc
{
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
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getApi()
 * @method $this withApi($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class GetTraceAnalysis extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getFilters()
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class QueryMetric extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
	public function withMeasures(array $measures)
	{
	    $this->data['Measures'] = $measures;
		foreach ($measures as $i => $iValue) {
			$this->options['query']['Measures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $i => $iValue) {
			$this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method array getTag()
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}
