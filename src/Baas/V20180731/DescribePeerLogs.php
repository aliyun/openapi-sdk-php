<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePeerLogs
 *
 * @method string getOrganizationId()
 * @method string getPeerName()
 * @method string getLines()
 */
class DescribePeerLogs extends RpcRequest
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
    public $action = 'DescribePeerLogs';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withOrganizationId() instead.
     *
     * @param string $organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        return $this->withOrganizationId($organizationId);
    }

    /**
     * @param string $organizationId
     *
     * @return $this
     */
    public function withOrganizationId($organizationId)
    {
        $this->data['OrganizationId'] = $organizationId;
        $this->options['query']['OrganizationId'] = $organizationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPeerName() instead.
     *
     * @param string $peerName
     *
     * @return $this
     */
    public function setPeerName($peerName)
    {
        return $this->withPeerName($peerName);
    }

    /**
     * @param string $peerName
     *
     * @return $this
     */
    public function withPeerName($peerName)
    {
        $this->data['PeerName'] = $peerName;
        $this->options['query']['PeerName'] = $peerName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLines() instead.
     *
     * @param string $lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        return $this->withLines($lines);
    }

    /**
     * @param string $lines
     *
     * @return $this
     */
    public function withLines($lines)
    {
        $this->data['Lines'] = $lines;
        $this->options['query']['Lines'] = $lines;

        return $this;
    }
}
