<?php

namespace AlibabaCloud\WelfareInner\V20180524;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DoPhysicalDeleteResource doPhysicalDeleteResource(array $options = [])
 * @method DoLogicalDeleteResource doLogicalDeleteResource(array $options = [])
 * @method GetWelfareGeekInfo getWelfareGeekInfo(array $options = [])
 * @method DoCheckResource doCheckResource(array $options = [])
 */
class WelfareInnerApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'welfare-inner';

    /** @var string */
    public $version = '2018-05-24';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoPhysicalDeleteResource extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoLogicalDeleteResource extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPk()
 * @method $this withPk($value)
 */
class GetWelfareGeekInfo extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoCheckResource extends Rpc
{
}
