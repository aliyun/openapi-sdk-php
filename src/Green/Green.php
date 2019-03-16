<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20170823\GreenApiResolver v20170823()
 * @method V20180509\GreenApiResolver v20180509()
 */
class Green
{
    use VersionResolverTrait;
}
