<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

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
class QueryFpShotJobList extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
