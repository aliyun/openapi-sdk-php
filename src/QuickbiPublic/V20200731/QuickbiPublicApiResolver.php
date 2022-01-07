<?php

namespace AlibabaCloud\QuickbiPublic\V20200731;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserGroupMember addUserGroupMember(array $options = [])
 * @method AddUserGroupMembers addUserGroupMembers(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DeleteUserGroupMember deleteUserGroupMember(array $options = [])
 * @method DeleteUserGroupMembers deleteUserGroupMembers(array $options = [])
 * @method GetUserGroupInfo getUserGroupInfo(array $options = [])
 * @method ListByUserGroupId listByUserGroupId(array $options = [])
 * @method ListUserGroupsByUserId listUserGroupsByUserId(array $options = [])
 * @method QueryUserGroupListByParentId queryUserGroupListByParentId(array $options = [])
 * @method QueryUserGroupMember queryUserGroupMember(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method WithdrawAllUserGroups withdrawAllUserGroups(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-07-31';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserIdList()
 * @method $this withUserIdList($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class AddUserGroupMembers extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 */
class CreateUserGroup extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserGroup extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUserGroupMembers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetUserGroupInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 */
class ListByUserGroupId extends Rpc
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
class ListUserGroupsByUserId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 */
class QueryUserGroupListByParentId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class QueryUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 */
class UpdateUserGroup extends Rpc
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
class WithdrawAllUserGroups extends Rpc
{
}
