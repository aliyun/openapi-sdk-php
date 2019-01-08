<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RequestServiceOfCloudDBExpert
 *
 * @method string getServiceRequestParam()
 * @method string getDBInstanceId()
 * @method string getServiceRequestType()
 */
class RequestServiceOfCloudDBExpert extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'RequestServiceOfCloudDBExpert';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @param string $serviceRequestParam
     *
     * @return $this
     */
    public function withServiceRequestParam($serviceRequestParam)
    {
        $this->data['ServiceRequestParam'] = $serviceRequestParam;
        $this->options['query']['ServiceRequestParam'] = $serviceRequestParam;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $serviceRequestType
     *
     * @return $this
     */
    public function withServiceRequestType($serviceRequestType)
    {
        $this->data['ServiceRequestType'] = $serviceRequestType;
        $this->options['query']['ServiceRequestType'] = $serviceRequestType;

        return $this;
    }
}
