<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api UpdateProject
 *
 * @method string getNewServiceRole()
 * @method string getProject()
 * @method string getNewCU()
 */
class UpdateProject extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

    /**
     * @param string $newServiceRole
     *
     * @return $this
     */
    public function withNewServiceRole($newServiceRole)
    {
        $this->data['NewServiceRole'] = $newServiceRole;
        $this->options['query']['NewServiceRole'] = $newServiceRole;

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
     * @param string $newCU
     *
     * @return $this
     */
    public function withNewCU($newCU)
    {
        $this->data['NewCU'] = $newCU;
        $this->options['query']['NewCU'] = $newCU;

        return $this;
    }
}
