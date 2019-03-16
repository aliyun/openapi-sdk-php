<?php

namespace AlibabaCloud\Domain;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20180129\DomainApiResolver v20180129()
 * @method V20180208\DomainApiResolver v20180208()
 */
class Domain
{
    use VersionResolverTrait;
}
