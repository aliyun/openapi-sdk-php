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
     * @deprecated deprecated since version 2.0, Use withBucketName() instead.
     *
     * @param string $bucketName
     *
     * @return $this
     */
    public function setBucketName($bucketName)
    {
        return $this->withBucketName($bucketName);
    }

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
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withDefaultQuota() instead.
     *
     * @param string $defaultQuota
     *
     * @return $this
     */
    public function setDefaultQuota($defaultQuota)
    {
        return $this->withDefaultQuota($defaultQuota);
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
