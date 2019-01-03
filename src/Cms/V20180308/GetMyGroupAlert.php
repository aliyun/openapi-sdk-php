<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetMyGroupAlert
 *
 * @method string getGroupId()
 * @method string getAlertName()
 */
class GetMyGroupAlert extends RpcRequest
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
    public $action = 'GetMyGroupAlert';

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
     * @deprecated deprecated since version 2.0, Use withAlertName() instead.
     *
     * @param string $alertName
     *
     * @return $this
     */
    public function setAlertName($alertName)
    {
        return $this->withAlertName($alertName);
    }

    /**
     * @param string $alertName
     *
     * @return $this
     */
    public function withAlertName($alertName)
    {
        $this->data['AlertName'] = $alertName;
        $this->options['query']['AlertName'] = $alertName;

        return $this;
    }
}
