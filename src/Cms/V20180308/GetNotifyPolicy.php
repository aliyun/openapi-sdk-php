<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetNotifyPolicy
 *
 * @method string getPolicyType()
 * @method string getAlertName()
 * @method string getGroupId()
 * @method string getId()
 * @method string getDimensions()
 */
class GetNotifyPolicy extends RpcRequest
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
    public $action = 'GetNotifyPolicy';

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
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDimensions() instead.
     *
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        return $this->withDimensions($dimensions);
    }

    /**
     * @param string $dimensions
     *
     * @return $this
     */
    public function withDimensions($dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        $this->options['query']['Dimensions'] = $dimensions;

        return $this;
    }
}
