<?php

namespace AlibabaCloud\Green\V20180509;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of FileAsyncScanResults
 *
 * @method string getClientInfo()
 */
class FileAsyncScanResults extends RoaRequest
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
    public $action = 'FileAsyncScanResults';

    /**
     * @var string
     */
    public $pathPattern = '/green/file/results';

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
