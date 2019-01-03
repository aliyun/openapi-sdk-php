<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sts based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Sts\V20150401
 *
 * @method AssumeRole assumeRole(array $options = [])
 * @method GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method GetCallerIdentity getCallerIdentity(array $options = [])
 * @method StsApiResolver stsApiResolver(array $options = [])
 */
class StsApiResolver
{
    use ApiResolverTrait;
}
