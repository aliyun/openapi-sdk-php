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
     * @deprecated deprecated since version 2.0, Use withResourceValue() instead.
     *
     * @param string $resourceValue
     *
     * @return $this
     */
    public function setResourceValue($resourceValue)
    {
        return $this->withResourceValue($resourceValue);
    }

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
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
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
