<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getCipherSuit()
 * @method $this withCipherSuit($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMachineNum()
 * @method $this withMachineNum($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBlockchainType()
 * @method $this withBlockchainType($value)
 * @method string getBlockchainRegionId()
 * @method $this withBlockchainRegionId($value)
 * @method string getTlsAlgo()
 * @method $this withTlsAlgo($value)
 * @method string getMerkleTreeSuit()
 * @method $this withMerkleTreeSuit($value)
 */
class CreateBlockchainApplication extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
