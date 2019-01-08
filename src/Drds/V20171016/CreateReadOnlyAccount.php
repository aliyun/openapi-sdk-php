<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateReadOnlyAccount
 *
 * @method string getPassword()
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 */
class CreateReadOnlyAccount extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'CreateReadOnlyAccount';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['password'] = $password;

        return $this;
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function withDbName($dbName)
    {
        $this->data['DbName'] = $dbName;
        $this->options['query']['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function withDrdsInstanceId($drdsInstanceId)
    {
        $this->data['DrdsInstanceId'] = $drdsInstanceId;
        $this->options['query']['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }
}
