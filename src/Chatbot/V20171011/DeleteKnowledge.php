<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteKnowledge
 *
 * @method string getKnowledgeId()
 */
class DeleteKnowledge extends RpcRequest
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
    public $action = 'DeleteKnowledge';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $knowledgeId
     *
     * @return $this
     */
    public function withKnowledgeId($knowledgeId)
    {
        $this->data['KnowledgeId'] = $knowledgeId;
        $this->options['query']['KnowledgeId'] = $knowledgeId;

        return $this;
    }
}
