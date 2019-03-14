<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTieringJob
 *
 * @method string getVolume()
 * @method string getName()
 */
class DeleteTieringJob extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $serviceCode = 'nas';

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function withVolume($volume)
    {
        $this->data['Volume'] = $volume;
        $this->options['query']['Volume'] = $volume;

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
}
