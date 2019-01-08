<?php

namespace AlibabaCloud\Cdn;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Cdn based on the method name as the version name.
 *
 * @package   AlibabaCloud\Cdn
 *
 * @method CdnV20141111ApiResolver v20141111()
 * @method CdnV20180510ApiResolver v20180510()
 */
class Cdn
{
    use VersionResolverTrait;
}
