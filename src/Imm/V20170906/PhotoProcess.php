<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getNotifyTopicName()
 * @method $this withNotifyTopicName($value)
 * @method string getNotifyEndpoint()
 * @method $this withNotifyEndpoint($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalID()
 * @method $this withExternalID($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getStyle()
 * @method $this withStyle($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class PhotoProcess extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
