<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDrdsDBIpWhiteList
 *
 * @method string getDbName()
 * @method string getDrdsInstanceId()
 * @method string getGroupName()
 */
class DescribeDrdsDBIpWhiteList extends RpcRequest
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
    public $action = 'DescribeDrdsDBIpWhiteList';

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

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
