<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ApproveEthereumInvitee
 *
 * @method string getId()
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'ApproveEthereumInvitee';

    /**
     * @var string
     */
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
