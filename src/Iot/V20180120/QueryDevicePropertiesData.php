<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDevicePropertiesData
 *
 * @method string getAsc()
 * @method array getIdentifier()
 * @method string getIotId()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getDeviceName()
 * @method string getStartTime()
 * @method string getProductKey()
 */
class QueryDevicePropertiesData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryDevicePropertiesData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $asc
     *
     * @return $this
     */
    public function withAsc($asc)
    {
        $this->data['Asc'] = $asc;
        $this->options['query']['Asc'] = $asc;

        return $this;
    }

    /**
     * @param array $identifier
     *
     * @return $this
     */
    public function withIdentifier(array $identifier)
    {
        $this->data['Identifier'] = $identifier;
        foreach ($identifier as $i => $iValue) {
            $this->options['query']['Identifier.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }
}
