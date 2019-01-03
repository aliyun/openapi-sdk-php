<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListNodesNoPaging
 *
 * @method string getHostName()
 * @method string getRole()
 * @method string getClusterId()
 * @method string getOnlyDetached()
 */
class ListNodesNoPaging extends RpcRequest
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
    public $action = 'ListNodesNoPaging';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withHostName() instead.
     *
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        return $this->withHostName($hostName);
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withOnlyDetached() instead.
     *
     * @param string $onlyDetached
     *
     * @return $this
     */
    public function setOnlyDetached($onlyDetached)
    {
        return $this->withOnlyDetached($onlyDetached);
    }

    /**
     * @param string $onlyDetached
     *
     * @return $this
     */
    public function withOnlyDetached($onlyDetached)
    {
        $this->data['OnlyDetached'] = $onlyDetached;
        $this->options['query']['OnlyDetached'] = $onlyDetached;

        return $this;
    }
}
