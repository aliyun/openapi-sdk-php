<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api PutGroupDynamicRule
 *
 * @method string getGroupId()
 * @method string getGroupRuleArrayJson()
 */
class PutGroupDynamicRule extends Rpc
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
