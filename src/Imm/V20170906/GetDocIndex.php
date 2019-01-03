<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetDocIndex
 *
 * @method string getSet()
 * @method string getProject()
 * @method string getUniqueId()
 */
class GetDocIndex extends RpcRequest
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
    public $action = 'GetDocIndex';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withSet() instead.
     *
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        return $this->withSet($set);
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function withSet($set)
    {
        $this->data['Set'] = $set;
        $this->options['query']['Set'] = $set;

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
     * @deprecated deprecated since version 2.0, Use withUniqueId() instead.
     *
     * @param string $uniqueId
     *
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        return $this->withUniqueId($uniqueId);
    }

    /**
     * @param string $uniqueId
     *
     * @return $this
     */
    public function withUniqueId($uniqueId)
    {
        $this->data['UniqueId'] = $uniqueId;
        $this->options['query']['UniqueId'] = $uniqueId;

        return $this;
    }
}
