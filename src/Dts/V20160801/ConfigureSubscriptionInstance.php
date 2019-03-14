<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api ConfigureSubscriptionInstance
 *
 * @method string getSourceEndpointInstanceID()
 * @method string getSourceEndpointOwnerID()
 * @method string getSubscriptionDataTypeDML()
 * @method string getSubscriptionObject()
 * @method string getSubscriptionInstanceName()
 * @method string getSubscriptionInstanceId()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method string getSourceEndpointInstanceType()
 * @method string getSubscriptionDataTypeDDL()
 */
class ConfigureSubscriptionInstance extends Rpc
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
     * @param string $sourceEndpointOwnerID
     *
     * @return $this
     */
    public function withSourceEndpointOwnerID($sourceEndpointOwnerID)
    {
        $this->data['SourceEndpointOwnerID'] = $sourceEndpointOwnerID;
        $this->options['query']['SourceEndpoint.OwnerID'] = $sourceEndpointOwnerID;

        return $this;
    }

    /**
     * @param string $subscriptionDataTypeDML
     *
     * @return $this
     */
    public function withSubscriptionDataTypeDML($subscriptionDataTypeDML)
    {
        $this->data['SubscriptionDataTypeDML'] = $subscriptionDataTypeDML;
        $this->options['query']['SubscriptionDataType.DML'] = $subscriptionDataTypeDML;

        return $this;
    }

    /**
     * @param string $subscriptionObject
     *
     * @return $this
     */
    public function withSubscriptionObject($subscriptionObject)
    {
        $this->data['SubscriptionObject'] = $subscriptionObject;
        $this->options['query']['SubscriptionObject'] = $subscriptionObject;

        return $this;
    }

    /**
     * @param string $subscriptionInstanceName
     *
     * @return $this
     */
    public function withSubscriptionInstanceName($subscriptionInstanceName)
    {
        $this->data['SubscriptionInstanceName'] = $subscriptionInstanceName;
        $this->options['query']['SubscriptionInstanceName'] = $subscriptionInstanceName;

        return $this;
    }

    /**
     * @param string $subscriptionInstanceId
     *
     * @return $this
     */
    public function withSubscriptionInstanceId($subscriptionInstanceId)
    {
        $this->data['SubscriptionInstanceId'] = $subscriptionInstanceId;
        $this->options['query']['SubscriptionInstanceId'] = $subscriptionInstanceId;

        return $this;
    }

    /**
     * @param string $sourceEndpointRole
     *
     * @return $this
     */
    public function withSourceEndpointRole($sourceEndpointRole)
    {
        $this->data['SourceEndpointRole'] = $sourceEndpointRole;
        $this->options['query']['SourceEndpoint.Role'] = $sourceEndpointRole;

        return $this;
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
     * @param string $subscriptionDataTypeDDL
     *
     * @return $this
     */
    public function withSubscriptionDataTypeDDL($subscriptionDataTypeDDL)
    {
        $this->data['SubscriptionDataTypeDDL'] = $subscriptionDataTypeDDL;
        $this->options['query']['SubscriptionDataType.DDL'] = $subscriptionDataTypeDDL;

        return $this;
    }
}
