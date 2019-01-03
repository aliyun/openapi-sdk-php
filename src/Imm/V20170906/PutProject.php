<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutProject
 *
 * @method string getCU()
 * @method string getServiceRole()
 * @method string getProject()
 * @method string getBillingType()
 * @method string getType()
 */
class PutProject extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'PutProject';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withCU() instead.
     *
     * @param string $cU
     *
     * @return $this
     */
    public function setCU($cU)
    {
        return $this->withCU($cU);
    }

    /**
     * @param string $cU
     *
     * @return $this
     */
    public function withCU($cU)
    {
        $this->data['CU'] = $cU;
        $this->options['query']['CU'] = $cU;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServiceRole() instead.
     *
     * @param string $serviceRole
     *
     * @return $this
     */
    public function setServiceRole($serviceRole)
    {
        return $this->withServiceRole($serviceRole);
    }

    /**
     * @param string $serviceRole
     *
     * @return $this
     */
    public function withServiceRole($serviceRole)
    {
        $this->data['ServiceRole'] = $serviceRole;
        $this->options['query']['ServiceRole'] = $serviceRole;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBillingType() instead.
     *
     * @param string $billingType
     *
     * @return $this
     */
    public function setBillingType($billingType)
    {
        return $this->withBillingType($billingType);
    }

    /**
     * @param string $billingType
     *
     * @return $this
     */
    public function withBillingType($billingType)
    {
        $this->data['BillingType'] = $billingType;
        $this->options['query']['BillingType'] = $billingType;

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
