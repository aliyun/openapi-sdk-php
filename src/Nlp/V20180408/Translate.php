<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of Translate
 *
 * @method string getDomain()
 */
class Translate extends RoaRequest
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
    public $action = 'Translate';

    /**
     * @var string
     */
    public $pathPattern = '/nlp/api/translate/[Domain]';

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
