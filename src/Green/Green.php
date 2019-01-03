<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Green based on the method name as the version name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method V20170823\GreenApiResolver v20170823()
 * @method V20180509\GreenApiResolver v20180509()
 */
class Green
{
    use VersionResolverTrait;
}
