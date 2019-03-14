<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api CreatePhotoStore
 *
 * @method string getBucketName()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 */
class CreatePhotoStore extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param string $bucketName
     *
     * @return $this
     */
    public function withBucketName($bucketName)
    {
        $this->data['BucketName'] = $bucketName;
        $this->options['query']['BucketName'] = $bucketName;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $defaultQuota
     *
     * @return $this
     */
    public function withDefaultQuota($defaultQuota)
    {
        $this->data['DefaultQuota'] = $defaultQuota;
        $this->options['query']['DefaultQuota'] = $defaultQuota;

        return $this;
    }
}
