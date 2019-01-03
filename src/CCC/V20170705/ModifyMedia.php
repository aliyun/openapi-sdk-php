<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyMedia
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
class ModifyMedia extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'ModifyMedia';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use withFileName() instead.
     *
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        return $this->withFileName($fileName);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withOssFilePath() instead.
     *
     * @param string $ossFilePath
     *
     * @return $this
     */
    public function setOssFilePath($ossFilePath)
    {
        return $this->withOssFilePath($ossFilePath);
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
     * @deprecated deprecated since version 2.0, Use withUploadResult() instead.
     *
     * @param string $uploadResult
     *
     * @return $this
     */
    public function setUploadResult($uploadResult)
    {
        return $this->withUploadResult($uploadResult);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withContent() instead.
     *
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        return $this->withContent($content);
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
     * @deprecated deprecated since version 2.0, Use withOssFileName() instead.
     *
     * @param string $ossFileName
     *
     * @return $this
     */
    public function setOssFileName($ossFileName)
    {
        return $this->withOssFileName($ossFileName);
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
