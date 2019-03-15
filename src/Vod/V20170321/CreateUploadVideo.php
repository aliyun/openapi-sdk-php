<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTranscodeMode()
 * @method $this withTranscodeMode($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getTemplateGroupId()
 * @method $this withTemplateGroupId($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getCustomMediaInfo()
 * @method $this withCustomMediaInfo($value)
 */
class CreateUploadVideo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
