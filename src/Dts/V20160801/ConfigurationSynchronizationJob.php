<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSourceEndpointInstanceID()
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getDestinationEndpointInstanceID()
 * @method string getInitializationStructureLoad()
 * @method string getInitializationDataLoad()
 * @method string getSynchronizationObject()
 * @method $this withSynchronizationObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigurationSynchronizationJob extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function withSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        $this->data['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;
        $this->options['query']['SourceEndpoint.InstanceID'] = $sourceEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $destinationEndpointInstanceID
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceID($destinationEndpointInstanceID)
    {
        $this->data['DestinationEndpointInstanceID'] = $destinationEndpointInstanceID;
        $this->options['query']['DestinationEndpoint.InstanceID'] = $destinationEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $initializationStructureLoad
     *
     * @return $this
     */
    public function withInitializationStructureLoad($initializationStructureLoad)
    {
        $this->data['InitializationStructureLoad'] = $initializationStructureLoad;
        $this->options['query']['Initialization.StructureLoad'] = $initializationStructureLoad;

        return $this;
    }

    /**
     * @param string $initializationDataLoad
     *
     * @return $this
     */
    public function withInitializationDataLoad($initializationDataLoad)
    {
        $this->data['InitializationDataLoad'] = $initializationDataLoad;
        $this->options['query']['Initialization.DataLoad'] = $initializationDataLoad;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->data['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->options['query']['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        $this->data['DestinationEndpointInstanceType'] = $destinationEndpointInstanceType;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;

        return $this;
    }
}
