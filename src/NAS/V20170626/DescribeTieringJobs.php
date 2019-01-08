<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTieringJobs
 *
 * @method string getVolume()
 */
class DescribeTieringJobs extends RpcRequest
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
    public $action = 'DescribeTieringJobs';

    /**
     * @var string
     */
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
