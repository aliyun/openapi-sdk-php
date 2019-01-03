<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sts based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Sts\V20150401
 *
 * @method static AssumeRole assumeRole(array $options = [])
 * @method static GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method static GetCallerIdentity getCallerIdentity(array $options = [])
 * @method static StsApiResolver stsApiResolver(array $options = [])
 */
class Sts
{
    use ApiResolverTrait;
}
