<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTieringPolicy
 *
 * @method string getName()
 */
class DeleteTieringPolicy extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $serviceCode = 'nas';

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
}
