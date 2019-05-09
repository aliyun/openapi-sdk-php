<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryTicket queryTicket(array $options = [])
 * @method ProceedTicket proceedTicket(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method QueryHotlineRecord queryHotlineRecord(array $options = [])
 * @method GetHotlineRecord getHotlineRecord(array $options = [])
 */
class CcsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ccs';

    /** @var string */
    public $version = '2017-10-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ccs';
}

/**
 * @method string getStage()
 * @method $this withStage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreatorId()
 * @method $this withCreatorId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class QueryTicket extends Rpc
{
}

/**
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class ProceedTicket extends Rpc
{
}

/**
 * @method string getCreatorId()
 * @method $this withCreatorId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getCustomFields()
 * @method $this withCustomFields($value)
 */
class CreateTicket extends Rpc
{
}

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
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class GetHotlineRecord extends Rpc
{
}
