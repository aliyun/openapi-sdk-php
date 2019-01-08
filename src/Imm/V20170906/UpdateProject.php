<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateProject
 *
 * @method string getNewServiceRole()
 * @method string getProject()
 * @method string getNewCU()
 */
class UpdateProject extends RpcRequest
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
    public $action = 'UpdateProject';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
