<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigureSubscriptionInstance
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
class ConfigureSubscriptionInstance extends RpcRequest
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
    public $action = 'ConfigureSubscriptionInstance';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointOwnerID() instead.
     *
     * @param string $sourceEndpointOwnerID
     *
     * @return $this
     */
    public function setSourceEndpointOwnerID($sourceEndpointOwnerID)
    {
        return $this->withSourceEndpointOwnerID($sourceEndpointOwnerID);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionDataTypeDML() instead.
     *
     * @param string $subscriptionDataTypeDML
     *
     * @return $this
     */
    public function setSubscriptionDataTypeDML($subscriptionDataTypeDML)
    {
        return $this->withSubscriptionDataTypeDML($subscriptionDataTypeDML);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionObject() instead.
     *
     * @param string $subscriptionObject
     *
     * @return $this
     */
    public function setSubscriptionObject($subscriptionObject)
    {
        return $this->withSubscriptionObject($subscriptionObject);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionInstanceName() instead.
     *
     * @param string $subscriptionInstanceName
     *
     * @return $this
     */
    public function setSubscriptionInstanceName($subscriptionInstanceName)
    {
        return $this->withSubscriptionInstanceName($subscriptionInstanceName);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionInstanceId() instead.
     *
     * @param string $subscriptionInstanceId
     *
     * @return $this
     */
    public function setSubscriptionInstanceId($subscriptionInstanceId)
    {
        return $this->withSubscriptionInstanceId($subscriptionInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointRole() instead.
     *
     * @param string $sourceEndpointRole
     *
     * @return $this
     */
    public function setSourceEndpointRole($sourceEndpointRole)
    {
        return $this->withSourceEndpointRole($sourceEndpointRole);
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
     * @deprecated deprecated since version 2.0, Use withSubscriptionDataTypeDDL() instead.
     *
     * @param string $subscriptionDataTypeDDL
     *
     * @return $this
     */
    public function setSubscriptionDataTypeDDL($subscriptionDataTypeDDL)
    {
        return $this->withSubscriptionDataTypeDDL($subscriptionDataTypeDDL);
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
