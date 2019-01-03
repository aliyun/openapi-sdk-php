<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateEntity
 *
 * @method string getRegex()
 * @method string getEntityType()
 * @method string getMembers()
 * @method string getEntityName()
 * @method string getEntityId()
 */
class UpdateEntity extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'UpdateEntity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withRegex() instead.
     *
     * @param string $regex
     *
     * @return $this
     */
    public function setRegex($regex)
    {
        return $this->withRegex($regex);
    }

    /**
     * @param string $regex
     *
     * @return $this
     */
    public function withRegex($regex)
    {
        $this->data['Regex'] = $regex;
        $this->options['query']['Regex'] = $regex;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEntityType() instead.
     *
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        return $this->withEntityType($entityType);
    }

    /**
     * @param string $entityType
     *
     * @return $this
     */
    public function withEntityType($entityType)
    {
        $this->data['EntityType'] = $entityType;
        $this->options['query']['EntityType'] = $entityType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMembers() instead.
     *
     * @param string $members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        return $this->withMembers($members);
    }

    /**
     * @param string $members
     *
     * @return $this
     */
    public function withMembers($members)
    {
        $this->data['Members'] = $members;
        $this->options['query']['Members'] = $members;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEntityName() instead.
     *
     * @param string $entityName
     *
     * @return $this
     */
    public function setEntityName($entityName)
    {
        return $this->withEntityName($entityName);
    }

    /**
     * @param string $entityName
     *
     * @return $this
     */
    public function withEntityName($entityName)
    {
        $this->data['EntityName'] = $entityName;
        $this->options['query']['EntityName'] = $entityName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEntityId() instead.
     *
     * @param string $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        return $this->withEntityId($entityId);
    }

    /**
     * @param string $entityId
     *
     * @return $this
     */
    public function withEntityId($entityId)
    {
        $this->data['EntityId'] = $entityId;
        $this->options['query']['EntityId'] = $entityId;

        return $this;
    }
}
