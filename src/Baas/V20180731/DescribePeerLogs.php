<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribePeerLogs
 *
 * @method string getOrganizationId()
 * @method string getPeerName()
 * @method string getLines()
 */
class DescribePeerLogs extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

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
