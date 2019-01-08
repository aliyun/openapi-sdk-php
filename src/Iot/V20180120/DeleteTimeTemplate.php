<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTimeTemplate
 *
 * @method string getTemplateId()
 */
class DeleteTimeTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'DeleteTimeTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }
}
