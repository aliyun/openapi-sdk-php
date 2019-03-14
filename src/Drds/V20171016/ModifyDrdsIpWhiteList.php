<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * Api ModifyDrdsIpWhiteList
 *
 * @method string getMode()
 * @method string getDbName()
 * @method string getGroupAttribute()
 * @method string getIpWhiteList()
 * @method string getDrdsInstanceId()
 * @method string getGroupName()
 */
class ModifyDrdsIpWhiteList extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function withMode($mode)
    {
        $this->data['Mode'] = $mode;
        $this->options['query']['Mode'] = $mode;

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
     * @param string $groupAttribute
     *
     * @return $this
     */
    public function withGroupAttribute($groupAttribute)
    {
        $this->data['GroupAttribute'] = $groupAttribute;
        $this->options['query']['GroupAttribute'] = $groupAttribute;

        return $this;
    }

    /**
     * @param string $ipWhiteList
     *
     * @return $this
     */
    public function withIpWhiteList($ipWhiteList)
    {
        $this->data['IpWhiteList'] = $ipWhiteList;
        $this->options['query']['IpWhiteList'] = $ipWhiteList;

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
