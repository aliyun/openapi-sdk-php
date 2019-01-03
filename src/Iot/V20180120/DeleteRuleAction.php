<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteRuleAction
 *
 * @method string getActionId()
 */
class DeleteRuleAction extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'DeleteRuleAction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withActionId() instead.
     *
     * @param string $actionId
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        return $this->withActionId($actionId);
    }

    /**
     * @param string $actionId
     *
     * @return $this
     */
    public function withActionId($actionId)
    {
        $this->data['ActionId'] = $actionId;
        $this->options['query']['ActionId'] = $actionId;

        return $this;
    }
}
