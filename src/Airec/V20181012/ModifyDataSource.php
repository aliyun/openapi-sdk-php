<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Roa;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ModifyDataSource extends Roa
{
    public $product = 'Airec';

    public $version = '2018-10-12';

    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources/[TableName]';

    public $method = 'PUT';

    public $serviceCode = 'airec';
}
