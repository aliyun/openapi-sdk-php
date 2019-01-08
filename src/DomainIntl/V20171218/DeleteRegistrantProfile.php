<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteRegistrantProfile
 *
 * @method string getUserClientIp()
 * @method string getRegistrantProfileId()
 * @method string getLang()
 */
class DeleteRegistrantProfile extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'DeleteRegistrantProfile';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function withRegistrantProfileId($registrantProfileId)
    {
        $this->data['RegistrantProfileId'] = $registrantProfileId;
        $this->options['query']['RegistrantProfileId'] = $registrantProfileId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}
