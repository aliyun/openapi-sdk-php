<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyFullTableScan
 *
 * @method string getDbName()
 * @method string getTableNames()
 * @method string getDrdsInstanceId()
 * @method string getFullTableScan()
 */
class ModifyFullTableScan extends RpcRequest
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
    public $action = 'ModifyFullTableScan';

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
     * @param string $tableNames
     *
     * @return $this
     */
    public function withTableNames($tableNames)
    {
        $this->data['TableNames'] = $tableNames;
        $this->options['query']['TableNames'] = $tableNames;

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
     * @param string $fullTableScan
     *
     * @return $this
     */
    public function withFullTableScan($fullTableScan)
    {
        $this->data['FullTableScan'] = $fullTableScan;
        $this->options['query']['FullTableScan'] = $fullTableScan;

        return $this;
    }
}
