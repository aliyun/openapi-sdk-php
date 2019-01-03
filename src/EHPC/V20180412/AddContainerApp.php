<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddContainerApp
 *
 * @method string getContainerType()
 * @method string getName()
 * @method string getDescription()
 * @method string getRepository()
 * @method string getImageTag()
 */
class AddContainerApp extends RpcRequest
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
    public $action = 'AddContainerApp';

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
