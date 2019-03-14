<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api AddContainerApp
 *
 * @method string getContainerType()
 * @method string getName()
 * @method string getDescription()
 * @method string getRepository()
 * @method string getImageTag()
 */
class AddContainerApp extends Rpc
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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

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
