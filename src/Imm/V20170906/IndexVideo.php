<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getGrabType()
 * @method $this withGrabType($value)
 * @method string getRemarksB()
 * @method $this withRemarksB($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRemarksA()
 * @method $this withRemarksA($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getVideoUri()
 * @method $this withVideoUri($value)
 * @method string getSaveType()
 * @method $this withSaveType($value)
 * @method string getRemarksD()
 * @method $this withRemarksD($value)
 * @method string getRemarksC()
 * @method $this withRemarksC($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class IndexVideo extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
