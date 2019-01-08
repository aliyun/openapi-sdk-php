<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainRecordInfo
 *
 * @method string getRecordId()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class DescribeDomainRecordInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'DescribeDomainRecordInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @param string $recordId
     *
     * @return $this
     */
    public function withRecordId($recordId)
    {
        $this->data['RecordId'] = $recordId;
        $this->options['query']['RecordId'] = $recordId;

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
}
