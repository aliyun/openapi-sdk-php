<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * Api DeleteUser
 *
 * @method string getUid()
 * @method string getTid()
 */
class DeleteUser extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';

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

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function withTid($tid)
    {
        $this->data['Tid'] = $tid;
        $this->options['query']['Tid'] = $tid;

        return $this;
    }
}
