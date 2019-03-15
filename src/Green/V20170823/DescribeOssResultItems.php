<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMaxScore()
 * @method $this withMaxScore($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStock()
 * @method $this withStock($value)
 * @method string getObject()
 * @method $this withObject($value)
 */
class DescribeOssResultItems extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
