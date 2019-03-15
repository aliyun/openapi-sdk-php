<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateUidWhiteListGroup extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
