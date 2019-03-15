<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getFeedBack()
 * @method $this withFeedBack($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getProtocolName()
 * @method $this withProtocolName($value)
 * @method string getSrcPort()
 * @method $this withSrcPort($value)
 * @method string getPunishType()
 * @method $this withPunishType($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateCpmcPunishFeedBack extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
