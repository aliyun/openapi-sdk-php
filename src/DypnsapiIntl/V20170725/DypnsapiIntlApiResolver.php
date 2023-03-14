<?php

namespace AlibabaCloud\DypnsapiIntl\V20170725;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckVerification checkVerification(array $options = [])
 * @method SearchVerification searchVerification(array $options = [])
 * @method StartVerification startVerification(array $options = [])
 */
class DypnsapiIntlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dypnsapi-intl';

    /** @var string */
    public $version = '2017-07-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getServiceSid()
 * @method $this withServiceSid($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getVerificationId()
 * @method $this withVerificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class CheckVerification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getServiceSid()
 * @method $this withServiceSid($value)
 * @method string getSendDate()
 * @method $this withSendDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getVerificationId()
 * @method $this withVerificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class SearchVerification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getServiceSid()
 * @method $this withServiceSid($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class StartVerification extends Rpc
{
}
