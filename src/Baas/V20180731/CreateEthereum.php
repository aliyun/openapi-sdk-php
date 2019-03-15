<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getConsensus()
 * @method $this withConsensus($value)
 * @method string getDifficulty()
 * @method $this withDifficulty($value)
 * @method array getNode()
 * @method string getName()
 * @method $this withName($value)
 * @method string getGas()
 * @method $this withGas($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateEthereum extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

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
}
