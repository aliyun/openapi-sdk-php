<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getReleaseInstance()
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getForce()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNode extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/ip/[Ip]';

    public $method = 'DELETE';

    public $serviceCode = 'cs';

    /**
     * @param string $releaseInstance
     *
     * @return $this
     */
    public function withReleaseInstance($releaseInstance)
    {
        $this->data['ReleaseInstance'] = $releaseInstance;
        $this->options['query']['releaseInstance'] = $releaseInstance;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function withForce($force)
    {
        $this->data['Force'] = $force;
        $this->options['query']['force'] = $force;

        return $this;
    }
}
