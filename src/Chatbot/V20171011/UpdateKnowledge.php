<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateKnowledge
 *
 * @method string getKnowledge()
 */
class UpdateKnowledge extends RpcRequest
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
    public $action = 'UpdateKnowledge';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @param string $knowledge
     *
     * @return $this
     */
    public function withKnowledge($knowledge)
    {
        $this->data['Knowledge'] = $knowledge;
        $this->options['query']['Knowledge'] = $knowledge;

        return $this;
    }
}
