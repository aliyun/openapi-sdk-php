<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the LinkFace based on the method name as the Api name.
 *
 * @package   AlibabaCloud\LinkFace\V20180720
 *
 * @method CreateGroup createGroup(array $options = [])
 * @method DeleteDeviceAllGroup deleteDeviceAllGroup(array $options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method DeleteFace deleteFace(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method QueryAddUserInfo queryAddUserInfo(array $options = [])
 * @method QueryAllGroups queryAllGroups(array $options = [])
 * @method QueryAuthentication queryAuthentication(array $options = [])
 * @method QueryFace queryFace(array $options = [])
 * @method QueryGroupUsers queryGroupUsers(array $options = [])
 * @method QueryLicenses queryLicenses(array $options = [])
 * @method QuerySyncPicSchedule querySyncPicSchedule(array $options = [])
 * @method RegisterFace registerFace(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method SyncFacePictures syncFacePictures(array $options = [])
 * @method UnlinkFace unlinkFace(array $options = [])
 * @method UpdateFace updateFace(array $options = [])
 */
class LinkFaceApiResolver
{
    use ApiResolverTrait;
}
