<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutGroupDynamicRule
 *
 * @method string getGroupId()
 * @method string getGroupRuleArrayJson()
 */
class PutGroupDynamicRule extends RpcRequest
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
    public $action = 'PutGroupDynamicRule';

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
     * @deprecated deprecated since version 2.0, Use withGroupRuleArrayJson() instead.
     *
     * @param string $groupRuleArrayJson
     *
     * @return $this
     */
    public function setGroupRuleArrayJson($groupRuleArrayJson)
    {
        return $this->withGroupRuleArrayJson($groupRuleArrayJson);
    }

    /**
     * @param string $groupRuleArrayJson
     *
     * @return $this
     */
    public function withGroupRuleArrayJson($groupRuleArrayJson)
    {
        $this->data['GroupRuleArrayJson'] = $groupRuleArrayJson;
        $this->options['query']['GroupRuleArrayJson'] = $groupRuleArrayJson;

        return $this;
    }
}
