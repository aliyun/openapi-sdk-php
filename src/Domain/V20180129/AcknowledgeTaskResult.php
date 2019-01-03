<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AcknowledgeTaskResult
 *
 * @method array getTaskDetailNo()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class AcknowledgeTaskResult extends RpcRequest
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
    public $action = 'AcknowledgeTaskResult';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getTaskDetailNo() instead.
     *
     * @return array
     */
    public function getTaskDetailNos()
    {
        return $this->getTaskDetailNo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskDetailNo() instead.
     *
     * @param array $taskDetailNos
     *
     * @return $this
     */
    public function setTaskDetailNos(array $taskDetailNos)
    {
        return $this->withTaskDetailNo($taskDetailNos);
    }

    /**
     * @param array $taskDetailNo
     *
     * @return $this
     */
    public function withTaskDetailNo(array $taskDetailNo)
    {
        $this->data['TaskDetailNo'] = $taskDetailNo;
        foreach ($taskDetailNo as $i => $iValue) {
            $this->options['query']['TaskDetailNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
