<?php

namespace AlibabaCloud\LinkFace;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the LinkFace based on the method name as the Api name.
 *
 * @package   AlibabaCloud\LinkFace
 *
 * @method V20180720\CreateGroup createGroup(array $options = [])
 * @method V20180720\DeleteFace deleteFace(array $options = [])
 * @method V20180720\DeleteGroup deleteGroup(array $options = [])
 * @method V20180720\QueryAddUserInfo queryAddUserInfo(array $options = [])
 * @method V20180720\QueryAllGroups queryAllGroups(array $options = [])
 * @method V20180720\QueryAuthentication queryAuthentication(array $options = [])
 * @method V20180720\QueryFace queryFace(array $options = [])
 * @method V20180720\QueryGroupUsers queryGroupUsers(array $options = [])
 * @method V20180720\QueryLicenses queryLicenses(array $options = [])
 * @method V20180720\QuerySyncPicSchedule querySyncPicSchedule(array $options = [])
 * @method V20180720\RegisterFace registerFace(array $options = [])
 * @method V20180720\SearchFace searchFace(array $options = [])
 * @method V20180720\SyncFacePictures syncFacePictures(array $options = [])
 * @method V20180720\UnlinkFace unlinkFace(array $options = [])
 * @method V20180720\UpdateFace updateFace(array $options = [])
 */
class LinkFaceV20180720ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\LinkFace\\V20180720';
}
