<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method GetCallerIdentity getCallerIdentity(array $options = [])
 * @method AssumeRole assumeRole(array $options = [])
 */
class StsApiResolver
{
    use ApiResolverTrait;
}
