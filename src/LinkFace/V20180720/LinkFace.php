<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the LinkFace based on the method name as the Api name.
 *
 * @package   AlibabaCloud\LinkFace\V20180720
 *
 * @method static CreateGroup createGroup(array $options = [])
 * @method static DeleteFace deleteFace(array $options = [])
 * @method static DeleteGroup deleteGroup(array $options = [])
 * @method static LinkFaceApiResolver linkFaceApiResolver(array $options = [])
 * @method static QueryAddUserInfo queryAddUserInfo(array $options = [])
 * @method static QueryAllGroups queryAllGroups(array $options = [])
 * @method static QueryAuthentication queryAuthentication(array $options = [])
 * @method static QueryFace queryFace(array $options = [])
 * @method static QueryGroupUsers queryGroupUsers(array $options = [])
 * @method static QueryLicenses queryLicenses(array $options = [])
 * @method static QuerySyncPicSchedule querySyncPicSchedule(array $options = [])
 * @method static RegisterFace registerFace(array $options = [])
 * @method static SearchFace searchFace(array $options = [])
 * @method static SyncFacePictures syncFacePictures(array $options = [])
 * @method static UnlinkFace unlinkFace(array $options = [])
 * @method static UpdateFace updateFace(array $options = [])
 */
class LinkFace
{
    use ApiResolverTrait;
}
