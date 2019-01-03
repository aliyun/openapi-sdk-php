<?php

namespace AlibabaCloud\Cdn;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Cdn based on the method name as the version name.
 *
 * @package   AlibabaCloud\Cdn
 *
 * @method static V20141111\CdnApiResolver v20141111()
 * @method static V20180510\CdnApiResolver v20180510()
 */
class CdnVersion
{
    use VersionResolverTrait;
}
