<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetJobUser
 *
 * @method string getRunasUserPassword()
 * @method string getRunasUser()
 * @method string getClusterId()
 */
class SetJobUser extends RpcRequest
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
    public $action = 'SetJobUser';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $runasUserPassword
     *
     * @return $this
     */
    public function withRunasUserPassword($runasUserPassword)
    {
        $this->data['RunasUserPassword'] = $runasUserPassword;
        $this->options['query']['RunasUserPassword'] = $runasUserPassword;

        return $this;
    }

    /**
     * @param string $runasUser
     *
     * @return $this
     */
    public function withRunasUser($runasUser)
    {
        $this->data['RunasUser'] = $runasUser;
        $this->options['query']['RunasUser'] = $runasUser;

        return $this;
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
}
