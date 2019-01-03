<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AttachPolicyToRole
 *
 * @method string getPolicyType()
 * @method string getRoleName()
 * @method string getPolicyName()
 */
class AttachPolicyToRole extends RpcRequest
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
    public $action = 'AttachPolicyToRole';

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
     * @deprecated deprecated since version 2.0, Use withRoleName() instead.
     *
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        return $this->withRoleName($roleName);
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function withRoleName($roleName)
    {
        $this->data['RoleName'] = $roleName;
        $this->options['query']['RoleName'] = $roleName;

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
}
