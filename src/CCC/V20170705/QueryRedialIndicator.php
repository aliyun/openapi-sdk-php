<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api QueryRedialIndicator
 *
 * @method string getInstanceId()
 * @method string getContactId()
 * @method string getMockResponse()
 */
class QueryRedialIndicator extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $contactId
     *
     * @return $this
     */
    public function withContactId($contactId)
    {
        $this->data['ContactId'] = $contactId;
        $this->options['query']['ContactId'] = $contactId;

        return $this;
    }

    /**
     * @param string $mockResponse
     *
     * @return $this
     */
    public function withMockResponse($mockResponse)
    {
        $this->data['MockResponse'] = $mockResponse;
        $this->options['query']['MockResponse'] = $mockResponse;

        return $this;
    }
}
