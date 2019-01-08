<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ModifyDataSource
 *
 * @method string getInstanceId()
 * @method string getTableName()
 */
class ModifyDataSource extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'ModifyDataSource';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources/[TableName]';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @var string
     */
    public $serviceCode = 'airec';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $tableName
     *
     * @return $this
     */
    public function withTableName($tableName)
    {
        $this->data['TableName'] = $tableName;
        $this->pathParameters['TableName'] = $tableName;

        return $this;
    }
}
