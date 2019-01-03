<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ActivatePerspective
 *
 * @method string getPerspectiveId()
 */
class ActivatePerspective extends RpcRequest
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
    public $action = 'ActivatePerspective';

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
}
