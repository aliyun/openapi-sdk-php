<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Green based on the method name as the version name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method static V20170823\GreenApiResolver v20170823()
 * @method static V20180509\GreenApiResolver v20180509()
 */
class GreenVersion
{
    use VersionResolverTrait;
}
