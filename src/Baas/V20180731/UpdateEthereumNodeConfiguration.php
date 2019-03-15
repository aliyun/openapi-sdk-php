<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getTMPub()
 * @method $this withTMPub($value)
 * @method string getNodePub()
 * @method $this withNodePub($value)
 * @method string getP2pPort()
 * @method $this withP2pPort($value)
 * @method string getWSPort()
 * @method $this withWSPort($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getRaftPort()
 * @method $this withRaftPort($value)
 * @method string getRpcPort()
 * @method $this withRpcPort($value)
 * @method string getTMPort()
 * @method $this withTMPort($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class UpdateEthereumNodeConfiguration extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
