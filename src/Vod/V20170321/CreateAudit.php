<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api CreateAudit
 *
 * @method string getAuditContent()
 */
class CreateAudit extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

    /**
     * @param string $auditContent
     *
     * @return $this
     */
    public function withAuditContent($auditContent)
    {
        $this->data['AuditContent'] = $auditContent;
        $this->options['query']['AuditContent'] = $auditContent;

        return $this;
    }
}
