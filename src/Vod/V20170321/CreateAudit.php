<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAudit
 *
 * @method string getAuditContent()
 */
class CreateAudit extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'CreateAudit';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
