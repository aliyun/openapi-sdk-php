<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeleteClusterNode
 *
 * @method string getReleaseInstance()
 * @method string getIp()
 * @method string getForce()
 * @method string getClusterId()
 */
class DeleteClusterNode extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'DeleteClusterNode';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/ip/[Ip]';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @deprecated deprecated since version 2.0, Use withReleaseInstance() instead.
     *
     * @param string $releaseInstance
     *
     * @return $this
     */
    public function setreleaseInstance($releaseInstance)
    {
        return $this->withReleaseInstance($releaseInstance);
    }

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
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        return $this->withIp($ip);
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->pathParameters['Ip'] = $ip;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withForce() instead.
     *
     * @param string $force
     *
     * @return $this
     */
    public function setforce($force)
    {
        return $this->withForce($force);
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

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
