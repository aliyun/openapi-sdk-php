<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sts based on the method name as the Api name.
 *
 *
 * @method AssumeRole assumeRole(array $options = [])
 * @method GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method GetCallerIdentity getCallerIdentity(array $options = [])
 */
class StsApiResolver
{
    use ApiResolverTrait;
}
