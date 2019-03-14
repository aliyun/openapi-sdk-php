<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api CheckInspectAudio
 *
 * @method string getResourceValue()
 * @method string getCcsInstanceId()
 * @method string getResourceType()
 */
class CheckInspectAudio extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

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
