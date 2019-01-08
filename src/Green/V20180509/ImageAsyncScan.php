<?php

namespace AlibabaCloud\Green\V20180509;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ImageAsyncScan
 *
 * @method string getClientInfo()
 */
class ImageAsyncScan extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2018-05-09';

    /**
     * @var string
     */
    public $action = 'ImageAsyncScan';

    /**
     * @var string
     */
    public $pathPattern = '/green/image/asyncscan';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $clientInfo
     *
     * @return $this
     */
    public function withClientInfo($clientInfo)
    {
        $this->data['ClientInfo'] = $clientInfo;
        $this->options['query']['ClientInfo'] = $clientInfo;

        return $this;
    }
}
