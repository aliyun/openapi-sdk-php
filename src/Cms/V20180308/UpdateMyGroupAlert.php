<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMyGroupAlert
 *
 * @method string getGroupAlertJson()
 */
class UpdateMyGroupAlert extends RpcRequest
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
    public $action = 'UpdateMyGroupAlert';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGroupAlertJson() instead.
     *
     * @param string $groupAlertJson
     *
     * @return $this
     */
    public function setGroupAlertJson($groupAlertJson)
    {
        return $this->withGroupAlertJson($groupAlertJson);
    }

    /**
     * @param string $groupAlertJson
     *
     * @return $this
     */
    public function withGroupAlertJson($groupAlertJson)
    {
        $this->data['GroupAlertJson'] = $groupAlertJson;
        $this->options['query']['GroupAlertJson'] = $groupAlertJson;

        return $this;
    }
}
