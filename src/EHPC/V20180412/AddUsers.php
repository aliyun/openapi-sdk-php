<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api AddUsers
 *
 * @method string getClusterId()
 * @method array getUser()
 */
class AddUsers extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
