<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method array getNode()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class SetQueue extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
