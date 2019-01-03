<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryRedialIndicator
 *
 * @method string getInstanceId()
 * @method string getContactId()
 * @method string getMockResponse()
 */
class QueryRedialIndicator extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'QueryRedialIndicator';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use withContactId() instead.
     *
     * @param string $contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        return $this->withContactId($contactId);
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
     * @deprecated deprecated since version 2.0, Use withMockResponse() instead.
     *
     * @param string $mockResponse
     *
     * @return $this
     */
    public function setMockResponse($mockResponse)
    {
        return $this->withMockResponse($mockResponse);
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
