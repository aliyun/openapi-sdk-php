<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDrdsDB
 *
 * @method string getEncode()
 * @method string getPassword()
 * @method string getDbName()
 * @method string getRdsInstances()
 * @method string getDrdsInstanceId()
 */
class CreateDrdsDB extends RpcRequest
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
    public $action = 'CreateDrdsDB';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEncode() instead.
     *
     * @param string $encode
     *
     * @return $this
     */
    public function setEncode($encode)
    {
        return $this->withEncode($encode);
    }

    /**
     * @param string $encode
     *
     * @return $this
     */
    public function withEncode($encode)
    {
        $this->data['Encode'] = $encode;
        $this->options['query']['Encode'] = $encode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

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
     * @deprecated deprecated since version 2.0, Use withRdsInstances() instead.
     *
     * @param string $rdsInstances
     *
     * @return $this
     */
    public function setRdsInstances($rdsInstances)
    {
        return $this->withRdsInstances($rdsInstances);
    }

    /**
     * @param string $rdsInstances
     *
     * @return $this
     */
    public function withRdsInstances($rdsInstances)
    {
        $this->data['RdsInstances'] = $rdsInstances;
        $this->options['query']['RdsInstances'] = $rdsInstances;

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
