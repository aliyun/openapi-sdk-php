<?php

namespace AlibabaCloud\QuickbiPublic\V20200808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AuthorizeMenu authorizeMenu(array $options = [])
 * @method CancelAuthorizationMenu cancelAuthorizationMenu(array $options = [])
 * @method ChangeVisibilityModel changeVisibilityModel(array $options = [])
 * @method ListPortalMenuAuthorization listPortalMenuAuthorization(array $options = [])
 * @method ListPortalMenus listPortalMenus(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAuthPointsValue()
 * @method $this withAuthPointsValue($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class AuthorizeMenu extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class CancelAuthorizationMenu extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getShowOnlyWithAccess()
 * @method $this withShowOnlyWithAccess($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class ChangeVisibilityModel extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListPortalMenuAuthorization extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListPortalMenus extends Rpc
{
}
