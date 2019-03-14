<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api PutEvent
 *
 * @method string getEventInfo()
 */
class PutEvent extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
