<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getMaxTalkDuration()
 * @method $this withMaxTalkDuration($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSatisfaction()
 * @method $this withSatisfaction($value)
 * @method string getMinTalkDuratoin()
 * @method $this withMinTalkDuratoin($value)
 * @method string getCategoryIds()
 * @method $this withCategoryIds($value)
 * @method string getVisitorProvince()
 * @method $this withVisitorProvince($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorPhone()
 * @method $this withVisitorPhone($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryHotlineRecord extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';
}
