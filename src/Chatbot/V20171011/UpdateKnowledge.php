<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api UpdateKnowledge
 *
 * @method string getKnowledge()
 */
class UpdateKnowledge extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
