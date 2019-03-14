<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Rpc;

/**
 * Api CheckHavanaIdConvert
 *
 * @method string getUid()
 */
class CheckHavanaIdConvert extends Rpc
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
