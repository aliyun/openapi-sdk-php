<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeShardDbConnectionInfo
 *
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 * @method string getSubDbName()
 */
class DescribeShardDbConnectionInfo extends RpcRequest
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
    public $action = 'DescribeShardDbConnectionInfo';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @deprecated deprecated since version 2.0, Use withSubDbName() instead.
     *
     * @param string $subDbName
     *
     * @return $this
     */
    public function setSubDbName($subDbName)
    {
        return $this->withSubDbName($subDbName);
    }

    /**
     * @param string $subDbName
     *
     * @return $this
     */
    public function withSubDbName($subDbName)
    {
        $this->data['SubDbName'] = $subDbName;
        $this->options['query']['SubDbName'] = $subDbName;

        return $this;
    }
}
