<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * Api CreateCpmcPunishFeedBack
 *
 * @method string getFeedBack()
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getDstPort()
 * @method string getProtocolName()
 * @method string getSrcPort()
 * @method string getPunishType()
 * @method string getGmtCreate()
 * @method string getDstIP()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateCpmcPunishFeedBack extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';

    /**
     * @param string $feedBack
     *
     * @return $this
     */
    public function withFeedBack($feedBack)
    {
        $this->data['FeedBack'] = $feedBack;
        $this->options['query']['FeedBack'] = $feedBack;

        return $this;
    }

    /**
     * @param string $srcIP
     *
     * @return $this
     */
    public function withSrcIP($srcIP)
    {
        $this->data['SrcIP'] = $srcIP;
        $this->options['query']['SrcIP'] = $srcIP;

        return $this;
    }

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
     * @param string $dstPort
     *
     * @return $this
     */
    public function withDstPort($dstPort)
    {
        $this->data['DstPort'] = $dstPort;
        $this->options['query']['DstPort'] = $dstPort;

        return $this;
    }

    /**
     * @param string $protocolName
     *
     * @return $this
     */
    public function withProtocolName($protocolName)
    {
        $this->data['ProtocolName'] = $protocolName;
        $this->options['query']['ProtocolName'] = $protocolName;

        return $this;
    }

    /**
     * @param string $srcPort
     *
     * @return $this
     */
    public function withSrcPort($srcPort)
    {
        $this->data['SrcPort'] = $srcPort;
        $this->options['query']['SrcPort'] = $srcPort;

        return $this;
    }

    /**
     * @param string $punishType
     *
     * @return $this
     */
    public function withPunishType($punishType)
    {
        $this->data['PunishType'] = $punishType;
        $this->options['query']['PunishType'] = $punishType;

        return $this;
    }

    /**
     * @param string $gmtCreate
     *
     * @return $this
     */
    public function withGmtCreate($gmtCreate)
    {
        $this->data['GmtCreate'] = $gmtCreate;
        $this->options['query']['GmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * @param string $dstIP
     *
     * @return $this
     */
    public function withDstIP($dstIP)
    {
        $this->data['DstIP'] = $dstIP;
        $this->options['query']['DstIP'] = $dstIP;

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
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['SourceCode'] = $sourceCode;

        return $this;
    }
}
