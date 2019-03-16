<?php

namespace AlibabaCloud\OssAdmin\V20150302;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method RestartOssInstance restartOssInstance(array $options = [])
 * @method ReleaseOssInstance releaseOssInstance(array $options = [])
 * @method CreateOssInstance createOssInstance(array $options = [])
 * @method StopOssInstance stopOssInstance(array $options = [])
 */
class OssAdminApiResolver
{
    use ApiResolverTrait;
}
