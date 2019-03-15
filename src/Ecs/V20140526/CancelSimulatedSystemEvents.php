<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelSimulatedSystemEvents extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
