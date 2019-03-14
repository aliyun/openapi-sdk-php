<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CommitContactFlowVersionModification
 *
 * @method string getCanvas()
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 * @method string getContent()
 */
class CommitContactFlowVersionModification extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
