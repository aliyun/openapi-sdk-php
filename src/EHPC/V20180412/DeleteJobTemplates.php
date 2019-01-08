<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteJobTemplates
 *
 * @method string getTemplates()
 */
class DeleteJobTemplates extends RpcRequest
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
    public $action = 'DeleteJobTemplates';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $templates
     *
     * @return $this
     */
    public function withTemplates($templates)
    {
        $this->data['Templates'] = $templates;
        $this->options['query']['Templates'] = $templates;

        return $this;
    }
}
