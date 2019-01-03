<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteUsers
 *
 * @method string getClusterId()
 * @method array getUser()
 */
class DeleteUsers extends RpcRequest
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
    public $action = 'DeleteUsers';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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

    /**
     * @deprecated deprecated since version 2.0, Use getUser() instead.
     *
     * @return array
     */
    public function getUsers()
    {
        return $this->getUser();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUser() instead.
     *
     * @param array $users
     *
     * @return $this
     */
    public function setUsers(array $users)
    {
        return $this->withUser($users);
    }

    /**
     * @param array $user
     *
     * @return $this
     */
    public function withUser(array $user)
    {
        $this->data['User'] = $user;
        foreach ($user as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $user[$i]['Name'];
        }

        return $this;
    }
}
