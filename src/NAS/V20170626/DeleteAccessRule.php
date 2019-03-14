<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api DeleteAccessRule
 *
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 */
class DeleteAccessRule extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function withAccessGroupName($accessGroupName)
    {
        $this->data['AccessGroupName'] = $accessGroupName;
        $this->options['query']['AccessGroupName'] = $accessGroupName;

        return $this;
    }

    /**
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function withAccessRuleId($accessRuleId)
    {
        $this->data['AccessRuleId'] = $accessRuleId;
        $this->options['query']['AccessRuleId'] = $accessRuleId;

        return $this;
    }
}
