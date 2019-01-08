<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTieringPolicy
 *
 * @method string getAtime()
 * @method string getFileName()
 * @method string getSize()
 * @method string getRecallTime()
 * @method string getName()
 * @method string getDescription()
 * @method string getCtime()
 * @method string getMtime()
 * @method string getCheckLimit()
 */
class CreateTieringPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'CreateTieringPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @param string $atime
     *
     * @return $this
     */
    public function withAtime($atime)
    {
        $this->data['Atime'] = $atime;
        $this->options['query']['Atime'] = $atime;

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
     * @param string $size
     *
     * @return $this
     */
    public function withSize($size)
    {
        $this->data['Size'] = $size;
        $this->options['query']['Size'] = $size;

        return $this;
    }

    /**
     * @param string $recallTime
     *
     * @return $this
     */
    public function withRecallTime($recallTime)
    {
        $this->data['RecallTime'] = $recallTime;
        $this->options['query']['RecallTime'] = $recallTime;

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
     * @param string $ctime
     *
     * @return $this
     */
    public function withCtime($ctime)
    {
        $this->data['Ctime'] = $ctime;
        $this->options['query']['Ctime'] = $ctime;

        return $this;
    }

    /**
     * @param string $mtime
     *
     * @return $this
     */
    public function withMtime($mtime)
    {
        $this->data['Mtime'] = $mtime;
        $this->options['query']['Mtime'] = $mtime;

        return $this;
    }

    /**
     * @param string $checkLimit
     *
     * @return $this
     */
    public function withCheckLimit($checkLimit)
    {
        $this->data['CheckLimit'] = $checkLimit;
        $this->options['query']['CheckLimit'] = $checkLimit;

        return $this;
    }
}
