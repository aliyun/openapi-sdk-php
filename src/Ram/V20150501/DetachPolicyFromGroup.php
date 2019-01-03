<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetachPolicyFromGroup
 *
 * @method string getPolicyType()
 * @method string getPolicyName()
 * @method string getGroupName()
 */
class DetachPolicyFromGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'DetachPolicyFromGroup';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPolicyType() instead.
     *
     * @param string $policyType
     *
     * @return $this
     */
    public function setPolicyType($policyType)
    {
        return $this->withPolicyType($policyType);
    }

    /**
     * @param string $policyType
     *
     * @return $this
     */
    public function withPolicyType($policyType)
    {
        $this->data['PolicyType'] = $policyType;
        $this->options['query']['PolicyType'] = $policyType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPolicyName() instead.
     *
     * @param string $policyName
     *
     * @return $this
     */
    public function setPolicyName($policyName)
    {
        return $this->withPolicyName($policyName);
    }

    /**
     * @param string $policyName
     *
     * @return $this
     */
    public function withPolicyName($policyName)
    {
        $this->data['PolicyName'] = $policyName;
        $this->options['query']['PolicyName'] = $policyName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
