<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AssumeRole
 *
 * @method string getRoleArn()
 * @method string getRoleSessionName()
 * @method string getDurationSeconds()
 * @method string getPolicy()
 */
class AssumeRole extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sts';

    /**
     * @var string
     */
    public $version = '2015-04-01';

    /**
     * @var string
     */
    public $action = 'AssumeRole';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $roleArn
     *
     * @return $this
     */
    public function withRoleArn($roleArn)
    {
        $this->data['RoleArn'] = $roleArn;
        $this->options['query']['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @param string $roleSessionName
     *
     * @return $this
     */
    public function withRoleSessionName($roleSessionName)
    {
        $this->data['RoleSessionName'] = $roleSessionName;
        $this->options['query']['RoleSessionName'] = $roleSessionName;

        return $this;
    }

    /**
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function withDurationSeconds($durationSeconds)
    {
        $this->data['DurationSeconds'] = $durationSeconds;
        $this->options['query']['DurationSeconds'] = $durationSeconds;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function withPolicy($policy)
    {
        $this->data['Policy'] = $policy;
        $this->options['query']['Policy'] = $policy;

        return $this;
    }
}
