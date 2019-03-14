<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeBlockchainConfigOption
 *
 * @method string getPurpose()
 */
class DescribeBlockchainConfigOption extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param string $purpose
     *
     * @return $this
     */
    public function withPurpose($purpose)
    {
        $this->data['Purpose'] = $purpose;
        $this->options['query']['Purpose'] = $purpose;

        return $this;
    }
}
