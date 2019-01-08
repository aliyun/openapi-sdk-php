<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyRdsReadWeight
 *
 * @method string getInstanceNames()
 * @method string getDbName()
 * @method string getWeights()
 * @method string getDrdsInstanceId()
 */
class ModifyRdsReadWeight extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'ModifyRdsReadWeight';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceNames
     *
     * @return $this
     */
    public function withInstanceNames($instanceNames)
    {
        $this->data['InstanceNames'] = $instanceNames;
        $this->options['query']['InstanceNames'] = $instanceNames;

        return $this;
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function withDbName($dbName)
    {
        $this->data['DbName'] = $dbName;
        $this->options['query']['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param string $weights
     *
     * @return $this
     */
    public function withWeights($weights)
    {
        $this->data['Weights'] = $weights;
        $this->options['query']['Weights'] = $weights;

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function withDrdsInstanceId($drdsInstanceId)
    {
        $this->data['DrdsInstanceId'] = $drdsInstanceId;
        $this->options['query']['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }
}
