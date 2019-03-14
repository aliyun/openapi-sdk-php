<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api ApproveEthereumInvitee
 *
 * @method string getId()
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

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
