<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteDocIndex
 *
 * @method string getSet()
 * @method string getProject()
 * @method string getUniqueId()
 */
class DeleteDocIndex extends RpcRequest
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
    public $action = 'DeleteDocIndex';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

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
