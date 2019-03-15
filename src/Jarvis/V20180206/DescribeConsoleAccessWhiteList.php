<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryProduct()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeConsoleAccessWhiteList extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';

    /**
     * @param string $queryProduct
     *
     * @return $this
     */
    public function withQueryProduct($queryProduct)
    {
        $this->data['QueryProduct'] = $queryProduct;
        $this->options['query']['queryProduct'] = $queryProduct;

        return $this;
    }
}
