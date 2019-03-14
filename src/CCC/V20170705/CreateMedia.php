<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CreateMedia
 *
 * @method string getInstanceId()
 * @method string getFileName()
 * @method string getName()
 * @method string getDescription()
 * @method string getOssFilePath()
 * @method string getUploadResult()
 * @method string getType()
 * @method string getContent()
 * @method string getOssFileName()
 */
class CreateMedia extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $fileName
     *
     * @return $this
     */
    public function withFileName($fileName)
    {
        $this->data['FileName'] = $fileName;
        $this->options['query']['FileName'] = $fileName;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ossFilePath
     *
     * @return $this
     */
    public function withOssFilePath($ossFilePath)
    {
        $this->data['OssFilePath'] = $ossFilePath;
        $this->options['query']['OssFilePath'] = $ossFilePath;

        return $this;
    }

    /**
     * @param string $uploadResult
     *
     * @return $this
     */
    public function withUploadResult($uploadResult)
    {
        $this->data['UploadResult'] = $uploadResult;
        $this->options['query']['UploadResult'] = $uploadResult;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        $this->data['Content'] = $content;
        $this->options['query']['Content'] = $content;

        return $this;
    }

    /**
     * @param string $ossFileName
     *
     * @return $this
     */
    public function withOssFileName($ossFileName)
    {
        $this->data['OssFileName'] = $ossFileName;
        $this->options['query']['OssFileName'] = $ossFileName;

        return $this;
    }
}
