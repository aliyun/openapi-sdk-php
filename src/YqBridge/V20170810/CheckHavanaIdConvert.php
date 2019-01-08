<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckHavanaIdConvert
 *
 * @method string getUid()
 */
class CheckHavanaIdConvert extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'YqBridge';

    /**
     * @var string
     */
    public $version = '2017-08-10';

    /**
     * @var string
     */
    public $action = 'CheckHavanaIdConvert';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function withUid($uid)
    {
        $this->data['Uid'] = $uid;
        $this->options['query']['Uid'] = $uid;

        return $this;
    }
}
