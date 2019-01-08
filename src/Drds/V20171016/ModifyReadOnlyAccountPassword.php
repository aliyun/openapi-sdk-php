<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyReadOnlyAccountPassword
 *
 * @method string getNewPasswd()
 * @method string getDbName()
 * @method string getAccountName()
 * @method string getOriginPassword()
 * @method string getDrdsInstanceId()
 */
class ModifyReadOnlyAccountPassword extends RpcRequest
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
    public $action = 'ModifyReadOnlyAccountPassword';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $newPasswd
     *
     * @return $this
     */
    public function withNewPasswd($newPasswd)
    {
        $this->data['NewPasswd'] = $newPasswd;
        $this->options['query']['NewPasswd'] = $newPasswd;

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
     * @param string $accountName
     *
     * @return $this
     */
    public function withAccountName($accountName)
    {
        $this->data['AccountName'] = $accountName;
        $this->options['query']['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $originPassword
     *
     * @return $this
     */
    public function withOriginPassword($originPassword)
    {
        $this->data['OriginPassword'] = $originPassword;
        $this->options['query']['OriginPassword'] = $originPassword;

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
