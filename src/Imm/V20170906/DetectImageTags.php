<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetectImageTags
 *
 * @method string getImageUri()
 * @method string getProject()
 */
class DetectImageTags extends RpcRequest
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
    public $action = 'DetectImageTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $imageUri
     *
     * @return $this
     */
    public function withImageUri($imageUri)
    {
        $this->data['ImageUri'] = $imageUri;
        $this->options['query']['ImageUri'] = $imageUri;

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
