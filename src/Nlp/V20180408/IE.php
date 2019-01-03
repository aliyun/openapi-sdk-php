<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of IE
 *
 * @method string getDomain()
 */
class IE extends RoaRequest
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
    public $action = 'IE';

    /**
     * @var string
     */
    public $pathPattern = '/nlp/api/ie/[Domain]';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nlp';

    /**
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
    }

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
