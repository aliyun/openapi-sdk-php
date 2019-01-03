<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInvitationList
 *
 * @method string getConsortiumId()
 */
class DescribeInvitationList extends RpcRequest
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
    public $action = 'DescribeInvitationList';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withConsortiumId() instead.
     *
     * @param string $consortiumId
     *
     * @return $this
     */
    public function setConsortiumId($consortiumId)
    {
        return $this->withConsortiumId($consortiumId);
    }

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
