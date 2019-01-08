<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetectTag
 *
 * @method string getSrcUris()
 * @method string getModelId()
 * @method string getProject()
 */
class DetectTag extends RpcRequest
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
    public $action = 'DetectTag';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function withSrcUris($srcUris)
    {
        $this->data['SrcUris'] = $srcUris;
        $this->options['query']['SrcUris'] = $srcUris;

        return $this;
    }

    /**
     * @param string $modelId
     *
     * @return $this
     */
    public function withModelId($modelId)
    {
        $this->data['ModelId'] = $modelId;
        $this->options['query']['ModelId'] = $modelId;

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
