<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of KWE
 *
 * @method string getDomain()
 */
class KWE extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Nlp';

    /**
     * @var string
     */
    public $version = '2018-04-08';

    /**
     * @var string
     */
    public $action = 'KWE';

    /**
     * @var string
     */
    public $pathPattern = '/nlp/api/kwe/[Domain]';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nlp';

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->pathParameters['Domain'] = $domain;

        return $this;
    }
}
