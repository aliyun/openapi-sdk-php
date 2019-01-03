<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CommitContactFlowVersionModification
 *
 * @method string getCanvas()
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 * @method string getContent()
 */
class CommitContactFlowVersionModification extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'CommitContactFlowVersionModification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withCanvas() instead.
     *
     * @param string $canvas
     *
     * @return $this
     */
    public function setCanvas($canvas)
    {
        return $this->withCanvas($canvas);
    }

    /**
     * @param string $canvas
     *
     * @return $this
     */
    public function withCanvas($canvas)
    {
        $this->data['Canvas'] = $canvas;
        $this->options['query']['Canvas'] = $canvas;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContactFlowVersionId() instead.
     *
     * @param string $contactFlowVersionId
     *
     * @return $this
     */
    public function setContactFlowVersionId($contactFlowVersionId)
    {
        return $this->withContactFlowVersionId($contactFlowVersionId);
    }

    /**
     * @param string $contactFlowVersionId
     *
     * @return $this
     */
    public function withContactFlowVersionId($contactFlowVersionId)
    {
        $this->data['ContactFlowVersionId'] = $contactFlowVersionId;
        $this->options['query']['ContactFlowVersionId'] = $contactFlowVersionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContent() instead.
     *
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        return $this->withContent($content);
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        $this->data['Content'] = $content;
        $this->options['query']['Content'] = $content;

        return $this;
    }
}
