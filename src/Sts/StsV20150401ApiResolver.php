<?php

namespace AlibabaCloud\Sts;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sts based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Sts
 *
 * @method V20150401\AssumeRole assumeRole(array $options = [])
 * @method V20150401\GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method V20150401\GetCallerIdentity getCallerIdentity(array $options = [])
 */
class StsV20150401ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Sts\\V20150401';
}
