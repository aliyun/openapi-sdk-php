<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * Api ModifyDrdsDBPasswd
 *
 * @method string getNewPasswd()
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 */
class ModifyDrdsDBPasswd extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

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
