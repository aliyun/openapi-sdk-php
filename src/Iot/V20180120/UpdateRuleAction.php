<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateRuleAction
 *
 * @method string getConfiguration()
 * @method string getActionId()
 * @method string getType()
 */
class UpdateRuleAction extends RpcRequest
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
    public $action = 'UpdateRuleAction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withConfiguration() instead.
     *
     * @param string $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        return $this->withConfiguration($configuration);
    }

    /**
     * @param string $configuration
     *
     * @return $this
     */
    public function withConfiguration($configuration)
    {
        $this->data['Configuration'] = $configuration;
        $this->options['query']['Configuration'] = $configuration;

        return $this;
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}
