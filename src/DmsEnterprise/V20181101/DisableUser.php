<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DisableUser
 *
 * @method string getUid()
 * @method string getTid()
 */
class DisableUser extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dms-enterprise';

    /**
     * @var string
     */
    public $version = '2018-11-01';

    /**
     * @var string
     */
    public $action = 'DisableUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
