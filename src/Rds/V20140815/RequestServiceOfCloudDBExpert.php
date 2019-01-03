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
     * @deprecated deprecated since version 2.0, Use withServiceRequestParam() instead.
     *
     * @param string $serviceRequestParam
     *
     * @return $this
     */
    public function setServiceRequestParam($serviceRequestParam)
    {
        return $this->withServiceRequestParam($serviceRequestParam);
    }

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
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withServiceRequestType() instead.
     *
     * @param string $serviceRequestType
     *
     * @return $this
     */
    public function setServiceRequestType($serviceRequestType)
    {
        return $this->withServiceRequestType($serviceRequestType);
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
