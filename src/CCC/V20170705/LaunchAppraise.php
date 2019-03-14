<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api LaunchAppraise
 *
 * @method string getAcid()
 * @method string getInstanceId()
 */
class LaunchAppraise extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
