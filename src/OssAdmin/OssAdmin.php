<?php

namespace AlibabaCloud\OssAdmin;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20130712\OssAdminApiResolver v20130712()
 * @method V20140326\OssAdminApiResolver v20140326()
 * @method V20150302\OssAdminApiResolver v20150302()
 * @method V20150520\OssAdminApiResolver v20150520()
 */
class OssAdmin
{
    use VersionResolverTrait;
}
