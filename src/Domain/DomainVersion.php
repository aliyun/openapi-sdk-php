<?php

namespace AlibabaCloud\Domain;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Domain based on the method name as the version name.
 *
 * @package   AlibabaCloud\Domain
 *
 * @method static V20180129\DomainApiResolver v20180129()
 * @method static V20180208\DomainApiResolver v20180208()
 */
class DomainVersion
{
    use VersionResolverTrait;
}
