<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteVideo
 *
 * @method string getVideoUri()
 * @method string getProject()
 * @method string getSetId()
 * @method string getResources()
 */
class DeleteVideo extends RpcRequest
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
    public $action = 'DeleteVideo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withVideoUri() instead.
     *
     * @param string $videoUri
     *
     * @return $this
     */
    public function setVideoUri($videoUri)
    {
        return $this->withVideoUri($videoUri);
    }

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function withVideoUri($videoUri)
    {
        $this->data['VideoUri'] = $videoUri;
        $this->options['query']['VideoUri'] = $videoUri;

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
     * @deprecated deprecated since version 2.0, Use withSetId() instead.
     *
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        return $this->withSetId($setId);
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResources() instead.
     *
     * @param string $resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        return $this->withResources($resources);
    }

    /**
     * @param string $resources
     *
     * @return $this
     */
    public function withResources($resources)
    {
        $this->data['Resources'] = $resources;
        $this->options['query']['Resources'] = $resources;

        return $this;
    }
}
