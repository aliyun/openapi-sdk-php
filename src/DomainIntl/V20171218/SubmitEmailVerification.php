<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitEmailVerification
 *
 * @method string getSendIfExist()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getEmail()
 */
class SubmitEmailVerification extends RpcRequest
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
    public $action = 'SubmitEmailVerification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @param string $sendIfExist
     *
     * @return $this
     */
    public function withSendIfExist($sendIfExist)
    {
        $this->data['SendIfExist'] = $sendIfExist;
        $this->options['query']['SendIfExist'] = $sendIfExist;

        return $this;
    }

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

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }
}
