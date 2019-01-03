<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetectImageCelebrity
 *
 * @method string getImageUri()
 * @method string getLibrary()
 * @method string getProject()
 */
class DetectImageCelebrity extends RpcRequest
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
    public $action = 'DetectImageCelebrity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withImageUri() instead.
     *
     * @param string $imageUri
     *
     * @return $this
     */
    public function setImageUri($imageUri)
    {
        return $this->withImageUri($imageUri);
    }

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
     * @deprecated deprecated since version 2.0, Use withLibrary() instead.
     *
     * @param string $library
     *
     * @return $this
     */
    public function setLibrary($library)
    {
        return $this->withLibrary($library);
    }

    /**
     * @param string $library
     *
     * @return $this
     */
    public function withLibrary($library)
    {
        $this->data['Library'] = $library;
        $this->options['query']['Library'] = $library;

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
}
