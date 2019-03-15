<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOverrideParams()
 * @method $this withOverrideParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getInputUnbind()
 * @method $this withInputUnbind($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCoverURL()
 * @method $this withCoverURL($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getFileURL()
 * @method $this withFileURL($value)
 * @method string getMediaWorkflowId()
 * @method $this withMediaWorkflowId($value)
 * @method string getMediaWorkflowUserData()
 * @method $this withMediaWorkflowUserData($value)
 */
class AddMedia extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
