<?php

namespace AlibabaCloud\Cdn;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20141111\CdnApiResolver v20141111()
 * @method V20180510\CdnApiResolver v20180510()
 */
class Cdn
{
    use VersionResolverTrait;
}
