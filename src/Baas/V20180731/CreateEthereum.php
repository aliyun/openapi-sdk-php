<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateEthereum
 *
 * @method string getConsensus()
 * @method string getDifficulty()
 * @method array getNode()
 * @method string getName()
 * @method string getGas()
 * @method string getDescription()
 * @method string getNetworkId()
 * @method string getRegion()
 */
class CreateEthereum extends RpcRequest
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
    public $action = 'CreateEthereum';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $consensus
     *
     * @return $this
     */
    public function withConsensus($consensus)
    {
        $this->data['Consensus'] = $consensus;
        $this->options['query']['Consensus'] = $consensus;

        return $this;
    }

    /**
     * @param string $difficulty
     *
     * @return $this
     */
    public function withDifficulty($difficulty)
    {
        $this->data['Difficulty'] = $difficulty;
        $this->options['query']['Difficulty'] = $difficulty;

        return $this;
    }

    /**
     * @param array $node
     *
     * @return $this
     */
    public function withNode(array $node)
    {
        $this->data['Node'] = $node;
        foreach ($node as $i => $iValue) {
            $this->options['query']['Node.' . ($i + 1) . '.Name'] = $node[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $gas
     *
     * @return $this
     */
    public function withGas($gas)
    {
        $this->data['Gas'] = $gas;
        $this->options['query']['Gas'] = $gas;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $networkId
     *
     * @return $this
     */
    public function withNetworkId($networkId)
    {
        $this->data['NetworkId'] = $networkId;
        $this->options['query']['NetworkId'] = $networkId;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}
