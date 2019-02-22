<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateEthereumNodeConfiguration
 *
 * @method string getTMPub()
 * @method string getNodePub()
 * @method string getP2pPort()
 * @method string getWSPort()
 * @method string getIP()
 * @method string getRaftPort()
 * @method string getRpcPort()
 * @method string getTMPort()
 * @method string getNodeId()
 */
class UpdateEthereumNodeConfiguration extends RpcRequest
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
    public $action = 'UpdateEthereumNodeConfiguration';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $tMPub
     *
     * @return $this
     */
    public function withTMPub($tMPub)
    {
        $this->data['TMPub'] = $tMPub;
        $this->options['query']['TMPub'] = $tMPub;

        return $this;
    }

    /**
     * @param string $nodePub
     *
     * @return $this
     */
    public function withNodePub($nodePub)
    {
        $this->data['NodePub'] = $nodePub;
        $this->options['query']['NodePub'] = $nodePub;

        return $this;
    }

    /**
     * @param string $p2pPort
     *
     * @return $this
     */
    public function withP2pPort($p2pPort)
    {
        $this->data['P2pPort'] = $p2pPort;
        $this->options['query']['P2pPort'] = $p2pPort;

        return $this;
    }

    /**
     * @param string $wSPort
     *
     * @return $this
     */
    public function withWSPort($wSPort)
    {
        $this->data['WSPort'] = $wSPort;
        $this->options['query']['WSPort'] = $wSPort;

        return $this;
    }

    /**
     * @param string $iP
     *
     * @return $this
     */
    public function withIP($iP)
    {
        $this->data['IP'] = $iP;
        $this->options['query']['IP'] = $iP;

        return $this;
    }

    /**
     * @param string $raftPort
     *
     * @return $this
     */
    public function withRaftPort($raftPort)
    {
        $this->data['RaftPort'] = $raftPort;
        $this->options['query']['RaftPort'] = $raftPort;

        return $this;
    }

    /**
     * @param string $rpcPort
     *
     * @return $this
     */
    public function withRpcPort($rpcPort)
    {
        $this->data['RpcPort'] = $rpcPort;
        $this->options['query']['RpcPort'] = $rpcPort;

        return $this;
    }

    /**
     * @param string $tMPort
     *
     * @return $this
     */
    public function withTMPort($tMPort)
    {
        $this->data['TMPort'] = $tMPort;
        $this->options['query']['TMPort'] = $tMPort;

        return $this;
    }

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->options['query']['NodeId'] = $nodeId;

        return $this;
    }
}
