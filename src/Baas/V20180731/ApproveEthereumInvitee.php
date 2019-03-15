<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getId()
 * @method $this withId($value)
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param array $invitee
     *
     * @return $this
     */
    public function withInvitee(array $invitee)
    {
        $this->data['Invitee'] = $invitee;
        foreach ($invitee as $i => $iValue) {
            $this->options['query']['Invitee.' . ($i + 1) . '.Id'] = $invitee[$i]['Id'];
        }

        return $this;
    }
}
