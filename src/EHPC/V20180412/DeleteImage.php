<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api DeleteImage
 *
 * @method string getContainerType()
 * @method string getClusterId()
 * @method string getRepository()
 * @method string getImageTag()
 */
class DeleteImage extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
