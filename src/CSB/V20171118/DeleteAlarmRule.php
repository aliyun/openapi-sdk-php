<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api DeleteAlarmRule
 *
 * @method string getId()
 */
class DeleteAlarmRule extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $method = 'POST';

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }
}
