<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateEntity
 *
 * @method string getRegex()
 * @method string getEntityType()
 * @method string getMembers()
 * @method string getEntityName()
 * @method string getDialogId()
 */
class CreateEntity extends RpcRequest
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
    public $action = 'CreateEntity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

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
     * @param string $dialogId
     *
     * @return $this
     */
    public function withDialogId($dialogId)
    {
        $this->data['DialogId'] = $dialogId;
        $this->options['query']['DialogId'] = $dialogId;

        return $this;
    }
}
