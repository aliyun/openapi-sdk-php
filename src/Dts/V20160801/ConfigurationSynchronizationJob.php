<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigurationSynchronizationJob
 *
 * @method string getSynchronizationJobId()
 * @method string getSourceEndpointInstanceID()
 * @method string getSynchronizationJobName()
 * @method string getDestinationEndpointInstanceID()
 * @method string getInitializationStructureLoad()
 * @method string getInitializationDataLoad()
 * @method string getSynchronizationObject()
 * @method string getOwnerId()
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigurationSynchronizationJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'ConfigurationSynchronizationJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobId() instead.
     *
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function setSynchronizationJobId($synchronizationJobId)
    {
        return $this->withSynchronizationJobId($synchronizationJobId);
    }

    /**
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function withSynchronizationJobId($synchronizationJobId)
    {
        $this->data['SynchronizationJobId'] = $synchronizationJobId;
        $this->options['query']['SynchronizationJobId'] = $synchronizationJobId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceID() instead.
     *
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function setSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        return $this->withSourceEndpointInstanceID($sourceEndpointInstanceID);
    }

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
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobName() instead.
     *
     * @param string $synchronizationJobName
     *
     * @return $this
     */
    public function setSynchronizationJobName($synchronizationJobName)
    {
        return $this->withSynchronizationJobName($synchronizationJobName);
    }

    /**
     * @param string $synchronizationJobName
     *
     * @return $this
     */
    public function withSynchronizationJobName($synchronizationJobName)
    {
        $this->data['SynchronizationJobName'] = $synchronizationJobName;
        $this->options['query']['SynchronizationJobName'] = $synchronizationJobName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceID() instead.
     *
     * @param string $destinationEndpointInstanceID
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceID($destinationEndpointInstanceID)
    {
        return $this->withDestinationEndpointInstanceID($destinationEndpointInstanceID);
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
     * @deprecated deprecated since version 2.0, Use withInitializationStructureLoad() instead.
     *
     * @param string $initializationStructureLoad
     *
     * @return $this
     */
    public function setInitializationStructureLoad($initializationStructureLoad)
    {
        return $this->withInitializationStructureLoad($initializationStructureLoad);
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
     * @deprecated deprecated since version 2.0, Use withInitializationDataLoad() instead.
     *
     * @param string $initializationDataLoad
     *
     * @return $this
     */
    public function setInitializationDataLoad($initializationDataLoad)
    {
        return $this->withInitializationDataLoad($initializationDataLoad);
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
     * @deprecated deprecated since version 2.0, Use withSynchronizationObject() instead.
     *
     * @param string $synchronizationObject
     *
     * @return $this
     */
    public function setSynchronizationObject($synchronizationObject)
    {
        return $this->withSynchronizationObject($synchronizationObject);
    }

    /**
     * @param string $synchronizationObject
     *
     * @return $this
     */
    public function withSynchronizationObject($synchronizationObject)
    {
        $this->data['SynchronizationObject'] = $synchronizationObject;
        $this->options['query']['SynchronizationObject'] = $synchronizationObject;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceType() instead.
     *
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        return $this->withSourceEndpointInstanceType($sourceEndpointInstanceType);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceType() instead.
     *
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        return $this->withDestinationEndpointInstanceType($destinationEndpointInstanceType);
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
