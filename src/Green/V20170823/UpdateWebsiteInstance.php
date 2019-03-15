<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getSiteProtocol()
 * @method $this withSiteProtocol($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebsiteScanInterval()
 * @method $this withWebsiteScanInterval($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIndexPage()
 * @method $this withIndexPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIndexPageScanInterval()
 * @method $this withIndexPageScanInterval($value)
 */
class UpdateWebsiteInstance extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
