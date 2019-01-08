<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListTagJobs
 *
 * @method string getCondition()
 * @method string getMaxKeys()
 * @method string getMarker()
 * @method string getProject()
 */
class ListTagJobs extends RpcRequest
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
    public $action = 'ListTagJobs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $condition
     *
     * @return $this
     */
    public function withCondition($condition)
    {
        $this->data['Condition'] = $condition;
        $this->options['query']['Condition'] = $condition;

        return $this;
    }

    /**
     * @param string $maxKeys
     *
     * @return $this
     */
    public function withMaxKeys($maxKeys)
    {
        $this->data['MaxKeys'] = $maxKeys;
        $this->options['query']['MaxKeys'] = $maxKeys;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function withMarker($marker)
    {
        $this->data['Marker'] = $marker;
        $this->options['query']['Marker'] = $marker;

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
}
