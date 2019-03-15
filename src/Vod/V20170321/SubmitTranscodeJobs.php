<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getEncryptConfig()
 * @method $this withEncryptConfig($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class SubmitTranscodeJobs extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
