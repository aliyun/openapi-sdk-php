<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInvitationCode
 *
 * @method string getConsortiumId()
 */
class DescribeInvitationCode extends RpcRequest
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
    public $action = 'DescribeInvitationCode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $consortiumId
     *
     * @return $this
     */
    public function withConsortiumId($consortiumId)
    {
        $this->data['ConsortiumId'] = $consortiumId;
        $this->options['query']['ConsortiumId'] = $consortiumId;

        return $this;
    }
}
