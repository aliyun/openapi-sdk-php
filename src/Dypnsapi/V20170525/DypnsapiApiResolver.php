<?php

namespace AlibabaCloud\Dypnsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateVerifyScheme createVerifyScheme(array $options = [])
 * @method DeleteVerifyScheme deleteVerifyScheme(array $options = [])
 * @method DescribeVerifyScheme describeVerifyScheme(array $options = [])
 * @method GetMobile getMobile(array $options = [])
 * @method TwiceTelVerify twiceTelVerify(array $options = [])
 * @method VerifyMobile verifyMobile(array $options = [])
 */
class DypnsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dypnsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dypns';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPackSign()
 * @method $this withPackSign($value)
 * @method string getPackName()
 * @method $this withPackName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 */
class CreateVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DeleteVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchemeCode()
 * @method $this withSchemeCode($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 */
class DescribeVerifyScheme extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAccessToken()
 * @method $this withAccessToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class GetMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSince()
 * @method $this withSince($value)
 */
class TwiceTelVerify extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAccessCode()
 * @method $this withAccessCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class VerifyMobile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}
