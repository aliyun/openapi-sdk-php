<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QuerySystemEntities
 *
 * @method string getEntityName()
 */
class QuerySystemEntities extends RpcRequest
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
    public $action = 'QuerySystemEntities';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

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
}
