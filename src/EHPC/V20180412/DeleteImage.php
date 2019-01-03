<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteImage
 *
 * @method string getContainerType()
 * @method string getClusterId()
 * @method string getRepository()
 * @method string getImageTag()
 */
class DeleteImage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'DeleteImage';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withContainerType() instead.
     *
     * @param string $containerType
     *
     * @return $this
     */
    public function setContainerType($containerType)
    {
        return $this->withContainerType($containerType);
    }

    /**
     * @param string $containerType
     *
     * @return $this
     */
    public function withContainerType($containerType)
    {
        $this->data['ContainerType'] = $containerType;
        $this->options['query']['ContainerType'] = $containerType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRepository() instead.
     *
     * @param string $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        return $this->withRepository($repository);
    }

    /**
     * @param string $repository
     *
     * @return $this
     */
    public function withRepository($repository)
    {
        $this->data['Repository'] = $repository;
        $this->options['query']['Repository'] = $repository;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageTag() instead.
     *
     * @param string $imageTag
     *
     * @return $this
     */
    public function setImageTag($imageTag)
    {
        return $this->withImageTag($imageTag);
    }

    /**
     * @param string $imageTag
     *
     * @return $this
     */
    public function withImageTag($imageTag)
    {
        $this->data['ImageTag'] = $imageTag;
        $this->options['query']['ImageTag'] = $imageTag;

        return $this;
    }
}
