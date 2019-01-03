<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEntities
 *
 * @method string getEntityId()
 */
class DescribeEntities extends RpcRequest
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
    public $action = 'DescribeEntities';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

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
