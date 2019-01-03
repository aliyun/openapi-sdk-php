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
     * @deprecated deprecated since version 2.0, Use withInstanceNames() instead.
     *
     * @param string $instanceNames
     *
     * @return $this
     */
    public function setInstanceNames($instanceNames)
    {
        return $this->withInstanceNames($instanceNames);
    }

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
     * @deprecated deprecated since version 2.0, Use withDbName() instead.
     *
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        return $this->withDbName($dbName);
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
     * @deprecated deprecated since version 2.0, Use withWeights() instead.
     *
     * @param string $weights
     *
     * @return $this
     */
    public function setWeights($weights)
    {
        return $this->withWeights($weights);
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
     * @deprecated deprecated since version 2.0, Use withDrdsInstanceId() instead.
     *
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        return $this->withDrdsInstanceId($drdsInstanceId);
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
