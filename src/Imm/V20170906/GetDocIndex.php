<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api GetDocIndex
 *
 * @method string getSet()
 * @method string getProject()
 * @method string getUniqueId()
 */
class GetDocIndex extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

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
