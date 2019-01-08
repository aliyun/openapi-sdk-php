<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeDataSetReport
 *
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class DescribeDataSetReport extends RoaRequest
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
    public $action = 'DescribeDataSetReport';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';

    /**
     * @var string
     */
    public $serviceCode = 'airec';

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function withVersionId($versionId)
    {
        $this->data['VersionId'] = $versionId;
        $this->pathParameters['VersionId'] = $versionId;

        return $this;
    }

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
