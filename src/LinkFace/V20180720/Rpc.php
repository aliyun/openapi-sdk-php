<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

class V20180720Rpc extends Rpc
{
    /** @var string */
    public $product = 'LinkFace';

    /** @var string */
    public $version = '2018-07-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteDeviceGroup extends V20180720Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteDeviceAllGroup extends V20180720Rpc
{
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class SearchFace extends V20180720Rpc
{
}

/**
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryLicenses extends V20180720Rpc
{
}

/**
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryAuthentication extends V20180720Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryAddUserInfo extends V20180720Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryAllGroups extends V20180720Rpc
{
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserInfo()
 * @method $this withUserInfo($value)
 */
class UpdateFace extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UnlinkFace extends V20180720Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class SyncFacePictures extends V20180720Rpc
{
}

/**
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserInfo()
 * @method $this withUserInfo($value)
 */
class RegisterFace extends V20180720Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QuerySyncPicSchedule extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryGroupUsers extends V20180720Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryFace extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class LinkFace extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteGroup extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteFace extends V20180720Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class CreateGroup extends V20180720Rpc
{
}
