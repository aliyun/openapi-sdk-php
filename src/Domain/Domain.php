<?php

namespace AlibabaCloud\Domain;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Domain based on the method name as the version name.
 *
 * @package   AlibabaCloud\Domain
 *
 * @method    V20180129\Domain v20180129()
 * @method    V20180208\Domain v20180208()
 */
class Domain
{
    use VersionResolverTrait;
}
