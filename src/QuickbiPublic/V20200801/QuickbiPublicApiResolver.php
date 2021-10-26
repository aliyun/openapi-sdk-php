<?php

namespace AlibabaCloud\QuickbiPublic\V20200801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUser addUser(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method QueryUserInfoByAccount queryUserInfoByAccount(array $options = [])
 * @method QueryUserInfoByUserId queryUserInfoByUserId(array $options = [])
 * @method QueryUserList queryUserList(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class AddUser extends Rpc
{
}

/**
 * @method string getTransferUserId()
 * @method $this withTransferUserId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryUserInfoByAccount extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserInfoByUserId extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryUserList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateUser extends Rpc
{
}
