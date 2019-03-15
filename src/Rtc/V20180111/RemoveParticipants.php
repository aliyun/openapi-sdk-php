<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method array getParticipantIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveParticipants extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';

    /**
     * @param array $participantIds
     *
     * @return $this
     */
    public function withParticipantIds(array $participantIds)
    {
        $this->data['ParticipantIds'] = $participantIds;
        foreach ($participantIds as $i => $iValue) {
            $this->options['query']['ParticipantIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
