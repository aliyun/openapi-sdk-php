<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Rpc;

/**
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class GetCdnSkyeyeStatusData extends Rpc
{
    public $product = 'Skyeye';

    public $version = '2017-12-01';
}
