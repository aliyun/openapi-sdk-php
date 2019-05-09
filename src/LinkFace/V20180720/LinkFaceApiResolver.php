<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method DeleteDeviceAllGroup deleteDeviceAllGroup(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method QueryLicenses queryLicenses(array $options = [])
 * @method QueryAuthentication queryAuthentication(array $options = [])
 * @method QueryAddUserInfo queryAddUserInfo(array $options = [])
 * @method UnlinkFace unlinkFace(array $options = [])
 * @method QueryAllGroups queryAllGroups(array $options = [])
 * @method SyncFacePictures syncFacePictures(array $options = [])
 * @method QuerySyncPicSchedule querySyncPicSchedule(array $options = [])
 * @method QueryGroupUsers queryGroupUsers(array $options = [])
 * @method QueryFace queryFace(array $options = [])
 * @method UpdateFace updateFace(array $options = [])
 * @method DeleteFace deleteFace(array $options = [])
 * @method RegisterFace registerFace(array $options = [])
 * @method LinkFace linkFace(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 */
class LinkFaceApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'LinkFace';

    /** @var string */
    public $version = '2018-07-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getIotId()
 * @method string getGroupId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class DeleteDeviceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class DeleteDeviceAllGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getImage()
 * @method string getGroupId()
 */
class SearchFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['form_params']['Image'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getLicenseType()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryLicenses extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseType($value)
    {
        $this->data['LicenseType'] = $value;
        $this->options['form_params']['LicenseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getLicenseType()
 * @method string getIotId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class QueryAuthentication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLicenseType($value)
    {
        $this->data['LicenseType'] = $value;
        $this->options['form_params']['LicenseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method string getGroupId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class QueryAddUserInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getUserId()
 */
class UnlinkFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryAllGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method string getGroupId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class SyncFacePictures extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method string getGroupId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class QuerySyncPicSchedule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryGroupUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 */
class QueryFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getImage()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class UpdateFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['form_params']['Image'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getUserId()
 */
class DeleteFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getImage()
 * @method string getGroupId()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class RegisterFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['form_params']['Image'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getUserId()
 */
class LinkFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class DeleteGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class CreateGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}
