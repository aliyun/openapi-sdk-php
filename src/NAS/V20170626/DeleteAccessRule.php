<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteAccessRule
 *
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 */
class DeleteAccessRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'DeleteAccessRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withAccessGroupName() instead.
     *
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        return $this->withAccessGroupName($accessGroupName);
    }

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
     * @deprecated deprecated since version 2.0, Use withAccessRuleId() instead.
     *
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function setAccessRuleId($accessRuleId)
    {
        return $this->withAccessRuleId($accessRuleId);
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
