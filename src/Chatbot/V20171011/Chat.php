<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 * @method string getSenderId()
 * @method $this withSenderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSenderNick()
 * @method $this withSenderNick($value)
 * @method array getPerspective()
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class Chat extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';

    /**
     * @param array $perspective
     *
     * @return $this
     */
    public function withPerspective(array $perspective)
    {
        $this->data['Perspective'] = $perspective;
        foreach ($perspective as $i => $iValue) {
            $this->options['query']['Perspective.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
