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
