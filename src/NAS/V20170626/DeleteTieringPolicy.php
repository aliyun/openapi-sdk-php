<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTieringPolicy
 *
 * @method string getName()
 */
class DeleteTieringPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'DeleteTieringPolicy';

    /**
     * @var string
     */
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
