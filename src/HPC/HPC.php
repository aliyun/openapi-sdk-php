<?php

namespace AlibabaCloud\HPC;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20160603\HPCApiResolver v20160603()
 * @method V20161213\HPCApiResolver v20161213()
 */
class HPC
{
    use VersionResolverTrait;
}
