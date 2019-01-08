<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePhotoStore
 *
 * @method string getBucketName()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 */
class CreatePhotoStore extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'CreatePhotoStore';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
