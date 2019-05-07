<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method AssumeRoleWithSAML assumeRoleWithSAML(array $options = [])
 * @method GenerateSessionAccessKey generateSessionAccessKey(array $options = [])
 * @method GetCallerIdentity getCallerIdentity(array $options = [])
 * @method AssumeRole assumeRole(array $options = [])
 */
class StsApiResolver
{
    use ApiResolverTrait;
}

class V20150401Rpc extends Rpc
{
    /** @var string */
    public $product = 'Sts';

    /** @var string */
    public $version = '2015-04-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getSAMLProviderArn()
 * @method $this withSAMLProviderArn($value)
 * @method string getSAMLAssertion()
 * @method $this withSAMLAssertion($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AssumeRoleWithSAML extends V20150401Rpc
{
}

/**
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 */
class GenerateSessionAccessKey extends V20150401Rpc
{
}

class GetCallerIdentity extends V20150401Rpc
{
}

/**
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getRoleSessionName()
 * @method $this withRoleSessionName($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AssumeRole extends V20150401Rpc
{
}
