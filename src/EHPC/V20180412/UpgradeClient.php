<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpgradeClient
 *
 * @method string getClientVersion()
 * @method string getClusterId()
 */
class UpgradeClient extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'UpgradeClient';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $clientVersion
     *
     * @return $this
     */
    public function withClientVersion($clientVersion)
    {
        $this->data['ClientVersion'] = $clientVersion;
        $this->options['query']['ClientVersion'] = $clientVersion;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}
