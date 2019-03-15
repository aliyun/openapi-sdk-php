<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOSSPrefix()
 * @method $this withOSSPrefix($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getEnableCompress()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 */
class ExportImage extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $enableCompress
     *
     * @return $this
     */
    public function withEnableCompress($enableCompress)
    {
        $this->data['EnableCompress'] = $enableCompress;
        $this->options['query']['enableCompress'] = $enableCompress;

        return $this;
    }
}
