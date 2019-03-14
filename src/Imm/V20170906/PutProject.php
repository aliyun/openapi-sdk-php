<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api PutProject
 *
 * @method string getCU()
 * @method string getServiceRole()
 * @method string getProject()
 * @method string getBillingType()
 * @method string getType()
 */
class PutProject extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
