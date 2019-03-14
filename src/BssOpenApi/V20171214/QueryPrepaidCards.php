<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api QueryPrepaidCards
 *
 * @method string getExpiryTimeEnd()
 * @method string getExpiryTimeStart()
 * @method string getEffectiveOrNot()
 */
class QueryPrepaidCards extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

    /**
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function withExpiryTimeEnd($expiryTimeEnd)
    {
        $this->data['ExpiryTimeEnd'] = $expiryTimeEnd;
        $this->options['query']['ExpiryTimeEnd'] = $expiryTimeEnd;

        return $this;
    }

    /**
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function withExpiryTimeStart($expiryTimeStart)
    {
        $this->data['ExpiryTimeStart'] = $expiryTimeStart;
        $this->options['query']['ExpiryTimeStart'] = $expiryTimeStart;

        return $this;
    }

    /**
     * @param string $effectiveOrNot
     *
     * @return $this
     */
    public function withEffectiveOrNot($effectiveOrNot)
    {
        $this->data['EffectiveOrNot'] = $effectiveOrNot;
        $this->options['query']['EffectiveOrNot'] = $effectiveOrNot;

        return $this;
    }
}
