<?php

namespace AlibabaCloud\Domain;

use AlibabaCloud\VersionResolverTrait;

/**
 * Find the specified version of the Domain based on the method name as the version name.
 *
 * @package   AlibabaCloud\Domain
 *
 * @method DomainV20180129ApiResolver v20180129()
 * @method DomainV20180208ApiResolver v20180208()
 */
class Domain
{
    use VersionResolverTrait;
}
