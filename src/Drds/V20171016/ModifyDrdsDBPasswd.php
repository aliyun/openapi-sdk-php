<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDrdsDBPasswd
 *
 * @method string getNewPasswd()
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 */
class ModifyDrdsDBPasswd extends RpcRequest
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
    public $action = 'ModifyDrdsDBPasswd';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withNewPasswd() instead.
     *
     * @param string $newPasswd
     *
     * @return $this
     */
    public function setNewPasswd($newPasswd)
    {
        return $this->withNewPasswd($newPasswd);
    }

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
     * @deprecated deprecated since version 2.0, Use withDbName() instead.
     *
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        return $this->withDbName($dbName);
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
     * @deprecated deprecated since version 2.0, Use withDrdsInstanceId() instead.
     *
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        return $this->withDrdsInstanceId($drdsInstanceId);
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
