<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api CreateBlockchainApplication
 *
 * @method string getCipherSuit()
 * @method string getSize()
 * @method string getMachineNum()
 * @method string getLiveTime()
 * @method string getBizid()
 * @method string getBlockchainType()
 * @method string getBlockchainRegionId()
 * @method string getTlsAlgo()
 * @method string getMerkleTreeSuit()
 */
class CreateBlockchainApplication extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $cipherSuit
     *
     * @return $this
     */
    public function withCipherSuit($cipherSuit)
    {
        $this->data['CipherSuit'] = $cipherSuit;
        $this->options['query']['CipherSuit'] = $cipherSuit;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function withSize($size)
    {
        $this->data['Size'] = $size;
        $this->options['query']['Size'] = $size;

        return $this;
    }

    /**
     * @param string $machineNum
     *
     * @return $this
     */
    public function withMachineNum($machineNum)
    {
        $this->data['MachineNum'] = $machineNum;
        $this->options['query']['MachineNum'] = $machineNum;

        return $this;
    }

    /**
     * @param string $liveTime
     *
     * @return $this
     */
    public function withLiveTime($liveTime)
    {
        $this->data['LiveTime'] = $liveTime;
        $this->options['query']['LiveTime'] = $liveTime;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }

    /**
     * @param string $blockchainType
     *
     * @return $this
     */
    public function withBlockchainType($blockchainType)
    {
        $this->data['BlockchainType'] = $blockchainType;
        $this->options['query']['BlockchainType'] = $blockchainType;

        return $this;
    }

    /**
     * @param string $blockchainRegionId
     *
     * @return $this
     */
    public function withBlockchainRegionId($blockchainRegionId)
    {
        $this->data['BlockchainRegionId'] = $blockchainRegionId;
        $this->options['query']['BlockchainRegionId'] = $blockchainRegionId;

        return $this;
    }

    /**
     * @param string $tlsAlgo
     *
     * @return $this
     */
    public function withTlsAlgo($tlsAlgo)
    {
        $this->data['TlsAlgo'] = $tlsAlgo;
        $this->options['query']['TlsAlgo'] = $tlsAlgo;

        return $this;
    }

    /**
     * @param string $merkleTreeSuit
     *
     * @return $this
     */
    public function withMerkleTreeSuit($merkleTreeSuit)
    {
        $this->data['MerkleTreeSuit'] = $merkleTreeSuit;
        $this->options['query']['MerkleTreeSuit'] = $merkleTreeSuit;

        return $this;
    }
}
