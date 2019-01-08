<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ListDataSource
 *
 * @method string getInstanceId()
 */
class ListDataSource extends RoaRequest
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
    public $action = 'ListDataSource';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSources';

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
}
