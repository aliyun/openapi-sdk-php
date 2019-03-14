<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api RequestServiceOfCloudDBExpert
 *
 * @method string getServiceRequestParam()
 * @method string getDBInstanceId()
 * @method string getServiceRequestType()
 */
class RequestServiceOfCloudDBExpert extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

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
