<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Green based on the method name as the version name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method    V20170823\Green v20170823()
 * @method    V20180509\Green v20180509()
 */
class Green
{
    use VersionResolverTrait;
}
