<?php

namespace AlibabaCloud\Ram\V20140214;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method PutUserPolicy putUserPolicy(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method ListUserPolicies listUserPolicies(array $options = [])
 * @method DeleteUserPolicy deleteUserPolicy(array $options = [])
 * @method RemoveUser removeUser(array $options = [])
 * @method GetUserPolicy getUserPolicy(array $options = [])
 */
class RamApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ram';

    /** @var string */
    public $version = '2014-02-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class PutUserPolicy extends Rpc
{
}

class ListUsers extends Rpc
{
}

/**
 * @method string getComments()
 * @method $this withComments($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class AddUser extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListUserPolicies extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteUserPolicy extends Rpc
{
}

/**
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class RemoveUser extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetUserPolicy extends Rpc
{
}
