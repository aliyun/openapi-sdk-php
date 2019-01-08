<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckInspectAudio
 *
 * @method string getResourceValue()
 * @method string getCcsInstanceId()
 * @method string getResourceType()
 */
class CheckInspectAudio extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'CheckInspectAudio';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @param string $resourceValue
     *
     * @return $this
     */
    public function withResourceValue($resourceValue)
    {
        $this->data['ResourceValue'] = $resourceValue;
        $this->options['query']['ResourceValue'] = $resourceValue;

        return $this;
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }
}
