<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getResultNum()
 * @method $this withResultNum($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getSearchThresholdLevel()
 * @method $this withSearchThresholdLevel($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getIsThreshold()
 * @method $this withIsThreshold($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class SearchFace extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
