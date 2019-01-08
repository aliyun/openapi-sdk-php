<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddUsers
 *
 * @method string getClusterId()
 * @method array getUser()
 */
class AddUsers extends RpcRequest
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
    public $action = 'AddUsers';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

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
     * @param array $user
     *
     * @return $this
     */
    public function withUser(array $user)
    {
        $this->data['User'] = $user;
        foreach ($user as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Password'] = $user[$i]['Password'];
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $user[$i]['Name'];
            $this->options['query']['User.' . ($i + 1) . '.Group'] = $user[$i]['Group'];
        }

        return $this;
    }
}
