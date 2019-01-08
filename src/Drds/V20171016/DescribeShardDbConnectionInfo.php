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
