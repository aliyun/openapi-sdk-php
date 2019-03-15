<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMovieId()
 * @method $this withMovieId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class QueryMovieComments extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
