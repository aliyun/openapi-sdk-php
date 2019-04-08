<?php

namespace AlibabaCloud\Dypnsapi\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateVerifyScheme createVerifyScheme(array $options = [])
 * @method VerifyMobile verifyMobile(array $options = [])
 * @method TwiceTelVerify twiceTelVerify(array $options = [])
 */
class DypnsapiApiResolver
{
    use ApiResolverTrait;
}

class V20170525Rpc extends Rpc
{
    /** @var string */
    public $product = 'Dypnsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPackName()
 * @method $this withPackName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSchemeName()
 * @method $this withSchemeName($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPackSign()
 * @method $this withPackSign($value)
 */
class CreateVerifyScheme extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccessCode()
 * @method $this withAccessCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyMobile extends V20170525Rpc
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
class TwiceTelVerify extends V20170525Rpc
{
}
