<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MoveKnowledgeCategory
 *
 * @method string getKnowledgeId()
 * @method string getCategoryId()
 */
class MoveKnowledgeCategory extends RpcRequest
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
    public $action = 'MoveKnowledgeCategory';

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

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function withCategoryId($categoryId)
    {
        $this->data['CategoryId'] = $categoryId;
        $this->options['query']['CategoryId'] = $categoryId;

        return $this;
    }
}
