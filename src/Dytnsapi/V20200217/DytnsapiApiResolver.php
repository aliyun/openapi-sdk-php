<?php

namespace AlibabaCloud\Dytnsapi\V20200217;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeEmptyNumberDetect describeEmptyNumberDetect(array $options = [])
 * @method DescribePhoneNumberAttribute describePhoneNumberAttribute(array $options = [])
 * @method DescribePhoneNumberResale describePhoneNumberResale(array $options = [])
 * @method DescribePhoneNumberStatus describePhoneNumberStatus(array $options = [])
 */
class DytnsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dytnsapi';

    /** @var string */
    public $version = '2020-02-17';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEncryptType()
 * @method $this withEncryptType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 */
class DescribeEmptyNumberDetect extends Rpc
{
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
 */
class DescribePhoneNumberAttribute extends Rpc
{
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
class DescribePhoneNumberResale extends Rpc
{
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
 */
class DescribePhoneNumberStatus extends Rpc
{
}
