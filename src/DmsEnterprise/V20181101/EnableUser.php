<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EnableUser
 *
 * @method string getUid()
 * @method string getTid()
 */
class EnableUser extends RpcRequest
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
    public $action = 'EnableUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dmsenterprise';

    /**
     * @deprecated deprecated since version 2.0, Use withUid() instead.
     *
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        return $this->withUid($uid);
    }

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
     * @deprecated deprecated since version 2.0, Use withTid() instead.
     *
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        return $this->withTid($tid);
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
