<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateKeywordLib
 *
 * @method string getSourceIp()
 * @method string getEnable()
 * @method string getName()
 * @method string getBizTypes()
 * @method string getId()
 * @method string getLang()
 * @method string getMatchMode()
 */
class UpdateKeywordLib extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

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
     * @param string $enable
     *
     * @return $this
     */
    public function withEnable($enable)
    {
        $this->data['Enable'] = $enable;
        $this->options['query']['Enable'] = $enable;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $bizTypes
     *
     * @return $this
     */
    public function withBizTypes($bizTypes)
    {
        $this->data['BizTypes'] = $bizTypes;
        $this->options['query']['BizTypes'] = $bizTypes;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

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
     * @param string $matchMode
     *
     * @return $this
     */
    public function withMatchMode($matchMode)
    {
        $this->data['MatchMode'] = $matchMode;
        $this->options['query']['MatchMode'] = $matchMode;

        return $this;
    }
}
