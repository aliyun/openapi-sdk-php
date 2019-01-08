<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutEvent
 *
 * @method string getEventInfo()
 */
class PutEvent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'PutEvent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $eventInfo
     *
     * @return $this
     */
    public function withEventInfo($eventInfo)
    {
        $this->data['EventInfo'] = $eventInfo;
        $this->options['query']['EventInfo'] = $eventInfo;

        return $this;
    }
}
