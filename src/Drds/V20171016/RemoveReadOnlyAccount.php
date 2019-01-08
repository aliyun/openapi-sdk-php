<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveReadOnlyAccount
 *
 * @method string getDbName()
 * @method string getAccountName()
 * @method string getDrdsInstanceId()
 */
class RemoveReadOnlyAccount extends RpcRequest
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
    public $action = 'RemoveReadOnlyAccount';

    /**
     * @var string
     */
    public $method = 'POST';

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
