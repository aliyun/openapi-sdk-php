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
     * @deprecated deprecated since version 2.0, Use withTableNames() instead.
     *
     * @param string $tableNames
     *
     * @return $this
     */
    public function setTableNames($tableNames)
    {
        return $this->withTableNames($tableNames);
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
     * @deprecated deprecated since version 2.0, Use withFullTableScan() instead.
     *
     * @param string $fullTableScan
     *
     * @return $this
     */
    public function setFullTableScan($fullTableScan)
    {
        return $this->withFullTableScan($fullTableScan);
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
