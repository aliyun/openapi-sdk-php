<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api CreateMyGroupAlertBatch
 *
 * @method string getGroupId()
 * @method string getGroupAlertJsonArray()
 */
class CreateMyGroupAlertBatch extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
