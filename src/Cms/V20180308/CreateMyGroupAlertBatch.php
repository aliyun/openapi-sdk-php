<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMyGroupAlertBatch
 *
 * @method string getGroupId()
 * @method string getGroupAlertJsonArray()
 */
class CreateMyGroupAlertBatch extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'CreateMyGroupAlertBatch';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupAlertJsonArray() instead.
     *
     * @param string $groupAlertJsonArray
     *
     * @return $this
     */
    public function setGroupAlertJsonArray($groupAlertJsonArray)
    {
        return $this->withGroupAlertJsonArray($groupAlertJsonArray);
    }

    /**
     * @param string $groupAlertJsonArray
     *
     * @return $this
     */
    public function withGroupAlertJsonArray($groupAlertJsonArray)
    {
        $this->data['GroupAlertJsonArray'] = $groupAlertJsonArray;
        $this->options['query']['GroupAlertJsonArray'] = $groupAlertJsonArray;

        return $this;
    }
}
