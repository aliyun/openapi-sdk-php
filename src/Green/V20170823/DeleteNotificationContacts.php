<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteNotificationContacts
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getContactTypes()
 */
class DeleteNotificationContacts extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'DeleteNotificationContacts';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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
     * @param string $contactTypes
     *
     * @return $this
     */
    public function withContactTypes($contactTypes)
    {
        $this->data['ContactTypes'] = $contactTypes;
        $this->options['query']['ContactTypes'] = $contactTypes;

        return $this;
    }
}
