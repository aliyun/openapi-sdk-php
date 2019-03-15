<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagCode()
 * @method $this withTagCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getEndDateStr()
 * @method $this withEndDateStr($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDateStr()
 * @method $this withStartDateStr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class QuerySmsCurrentStatistics extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

    public $method = 'POST';
}
