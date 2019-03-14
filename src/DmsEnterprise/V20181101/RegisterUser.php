<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * Api RegisterUser
 *
 * @method string getRoleNames()
 * @method string getUid()
 * @method string getUserNick()
 * @method string getTid()
 */
class RegisterUser extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';

    /**
     * @param string $roleNames
     *
     * @return $this
     */
    public function withRoleNames($roleNames)
    {
        $this->data['RoleNames'] = $roleNames;
        $this->options['query']['RoleNames'] = $roleNames;

        return $this;
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
     * @param string $userNick
     *
     * @return $this
     */
    public function withUserNick($userNick)
    {
        $this->data['UserNick'] = $userNick;
        $this->options['query']['UserNick'] = $userNick;

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
