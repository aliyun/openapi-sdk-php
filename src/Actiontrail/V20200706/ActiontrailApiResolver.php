<?php

namespace AlibabaCloud\Actiontrail\V20200706;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDeliveryHistoryJob createDeliveryHistoryJob(array $options = [])
 * @method DeleteDeliveryHistoryJob deleteDeliveryHistoryJob(array $options = [])
 * @method ListDeliveryHistoryJobs listDeliveryHistoryJobs(array $options = [])
 * @method LookupEvents lookupEvents(array $options = [])
 */
class ActiontrailApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Actiontrail';

    /** @var string */
    public $version = '2020-07-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'actiontrail';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrailName()
 * @method $this withTrailName($value)
 */
class CreateDeliveryHistoryJob extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteDeliveryHistoryJob extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDeliveryHistoryJobs extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getLookupAttribute()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class LookupEvents extends Rpc
{

    /**
     * @param array $lookupAttribute
     *
     * @return $this
     */
	public function withLookupAttribute(array $lookupAttribute)
	{
	    $this->data['LookupAttribute'] = $lookupAttribute;
		foreach ($lookupAttribute as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['LookupAttribute.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['LookupAttribute.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}
