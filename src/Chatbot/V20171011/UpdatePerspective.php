<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdatePerspective
 *
 * @method string getPerspectiveId()
 * @method string getName()
 */
class UpdatePerspective extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'UpdatePerspective';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withPerspectiveId() instead.
     *
     * @param string $perspectiveId
     *
     * @return $this
     */
    public function setPerspectiveId($perspectiveId)
    {
        return $this->withPerspectiveId($perspectiveId);
    }

    /**
     * @param string $perspectiveId
     *
     * @return $this
     */
    public function withPerspectiveId($perspectiveId)
    {
        $this->data['PerspectiveId'] = $perspectiveId;
        $this->options['query']['PerspectiveId'] = $perspectiveId;

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
}
