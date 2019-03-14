<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Rpc;

/**
 * Api CheckCloudUser
 *
 * @method string getUid()
 */
class CheckCloudUser extends Rpc
{
    public $product = 'YqBridge';

    public $version = '2017-08-10';

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
