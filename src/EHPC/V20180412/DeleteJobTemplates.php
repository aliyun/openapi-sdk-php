<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api DeleteJobTemplates
 *
 * @method string getTemplates()
 */
class DeleteJobTemplates extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
