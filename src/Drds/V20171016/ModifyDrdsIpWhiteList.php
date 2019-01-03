<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDrdsIpWhiteList
 *
 * @method string getMode()
 * @method string getDbName()
 * @method string getGroupAttribute()
 * @method string getIpWhiteList()
 * @method string getDrdsInstanceId()
 * @method string getGroupName()
 */
class ModifyDrdsIpWhiteList extends RpcRequest
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
    public $action = 'ModifyDrdsIpWhiteList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMode() instead.
     *
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        return $this->withMode($mode);
    }

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
     * @deprecated deprecated since version 2.0, Use withGroupAttribute() instead.
     *
     * @param string $groupAttribute
     *
     * @return $this
     */
    public function setGroupAttribute($groupAttribute)
    {
        return $this->withGroupAttribute($groupAttribute);
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
     * @deprecated deprecated since version 2.0, Use withIpWhiteList() instead.
     *
     * @param string $ipWhiteList
     *
     * @return $this
     */
    public function setIpWhiteList($ipWhiteList)
    {
        return $this->withIpWhiteList($ipWhiteList);
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

    /**
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
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
