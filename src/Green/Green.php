<?php

namespace AlibabaCloud\Green;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Green based on the method name as the version name.
 *
 * @package   AlibabaCloud\Green
 *
 * @method GreenV20170823ApiResolver v20170823()
 * @method GreenV20180509ApiResolver v20180509()
 */
class Green
{
    use VersionResolverTrait;
}
