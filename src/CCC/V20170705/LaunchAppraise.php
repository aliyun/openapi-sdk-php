<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of LaunchAppraise
 *
 * @method string getAcid()
 * @method string getInstanceId()
 */
class LaunchAppraise extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'LaunchAppraise';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withAcid() instead.
     *
     * @param string $acid
     *
     * @return $this
     */
    public function setAcid($acid)
    {
        return $this->withAcid($acid);
    }

    /**
     * @param string $acid
     *
     * @return $this
     */
    public function withAcid($acid)
    {
        $this->data['Acid'] = $acid;
        $this->options['query']['Acid'] = $acid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}
