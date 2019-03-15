<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAliCloudCertificateName()
 * @method $this withAliCloudCertificateName($value)
 * @method string getAliCloudCertificateId()
 * @method $this withAliCloudCertificateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getServerCertificateName()
 * @method $this withServerCertificateName($value)
 */
class UploadServerCertificate extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }
}
