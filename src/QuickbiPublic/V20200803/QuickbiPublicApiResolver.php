<?php

namespace AlibabaCloud\QuickbiPublic\V20200803;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserToWorkspace addUserToWorkspace(array $options = [])
 * @method AddWorkspaceUsers addWorkspaceUsers(array $options = [])
 * @method DeleteUserFromWorkspace deleteUserFromWorkspace(array $options = [])
 * @method QueryOrganizationWorkspaceList queryOrganizationWorkspaceList(array $options = [])
 * @method QueryUserRoleInfoInWorkspace queryUserRoleInfoInWorkspace(array $options = [])
 * @method QueryWorkspaceUserList queryWorkspaceUserList(array $options = [])
 * @method UpdateWorkspaceUserRole updateWorkspaceUserRole(array $options = [])
 * @method UpdateWorkspaceUsersRole updateWorkspaceUsersRole(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-03';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddUserToWorkspace extends Rpc
{
}

/**
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddWorkspaceUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class DeleteUserFromWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryOrganizationWorkspaceList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryUserRoleInfoInWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryWorkspaceUserList extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUserRole extends Rpc
{
}

/**
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUsersRole extends Rpc
{
}
