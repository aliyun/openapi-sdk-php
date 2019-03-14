<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api DescribeTieringJobs
 *
 * @method string getVolume()
 */
class DescribeTieringJobs extends Rpc
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
}
