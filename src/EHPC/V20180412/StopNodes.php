<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StopNodes
 *
 * @method string getRole()
 * @method array getInstance()
 * @method string getClusterId()
 */
class StopNodes extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'StopNodes';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withRole() instead.
     *
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        return $this->withRole($role);
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function withRole($role)
    {
        $this->data['Role'] = $role;
        $this->options['query']['Role'] = $role;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInstance() instead.
     *
     * @return array
     */
    public function getInstances()
    {
        return $this->getInstance();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstance() instead.
     *
     * @param array $instances
     *
     * @return $this
     */
    public function setInstances(array $instances)
    {
        return $this->withInstance($instances);
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function withInstance(array $instance)
    {
        $this->data['Instance'] = $instance;
        foreach ($instance as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $instance[$i]['Id'];
        }

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
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}
