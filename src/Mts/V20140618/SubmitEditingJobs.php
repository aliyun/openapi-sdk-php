<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getOutputBucket()
 * @method $this withOutputBucket($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEditingJobOutputs()
 * @method $this withEditingJobOutputs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOutputLocation()
 * @method $this withOutputLocation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEditingInputs()
 * @method $this withEditingInputs($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitEditingJobs extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
