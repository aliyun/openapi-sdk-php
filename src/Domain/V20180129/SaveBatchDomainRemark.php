<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveBatchDomainRemark
 *
 * @method string getInstanceIds()
 * @method string getUserClientIp()
 * @method string getRemark()
 * @method string getLang()
 */
class SaveBatchDomainRemark extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'SaveBatchDomainRemark';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['InstanceIds'] = $instanceIds;

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
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

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
