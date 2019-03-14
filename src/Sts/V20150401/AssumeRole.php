<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Rpc;

/**
 * Api AssumeRole
 *
 * @method string getRoleArn()
 * @method string getRoleSessionName()
 * @method string getDurationSeconds()
 * @method string getPolicy()
 */
class AssumeRole extends Rpc
{
    public $product = 'Sts';

    public $version = '2015-04-01';

    public $scheme = 'https';

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
