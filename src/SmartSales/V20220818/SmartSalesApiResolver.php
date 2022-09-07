<?php

namespace AlibabaCloud\SmartSales\V20220818;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateCall updateCall(array $options = [])
 * @method UploadVoiceData uploadVoiceData(array $options = [])
 */
class SmartSalesApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'SmartSales';

    /** @var string */
    public $version = '2022-08-18';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getClueStatusRemark()
 * @method $this withClueStatusRemark($value)
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getBusinessResult()
 * @method $this withBusinessResult($value)
 * @method string getCustomCallId()
 * @method $this withCustomCallId($value)
 */
class UpdateCall extends Rpc
{
}

/**
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getVoiceDataList()
 * @method $this withVoiceDataList($value)
 */
class UploadVoiceData extends Rpc
{
}
