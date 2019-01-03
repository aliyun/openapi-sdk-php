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
     * @deprecated deprecated since version 2.0, Use withAtime() instead.
     *
     * @param string $atime
     *
     * @return $this
     */
    public function setAtime($atime)
    {
        return $this->withAtime($atime);
    }

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
     * @deprecated deprecated since version 2.0, Use withSize() instead.
     *
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        return $this->withSize($size);
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
     * @deprecated deprecated since version 2.0, Use withRecallTime() instead.
     *
     * @param string $recallTime
     *
     * @return $this
     */
    public function setRecallTime($recallTime)
    {
        return $this->withRecallTime($recallTime);
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
     * @deprecated deprecated since version 2.0, Use withCtime() instead.
     *
     * @param string $ctime
     *
     * @return $this
     */
    public function setCtime($ctime)
    {
        return $this->withCtime($ctime);
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
     * @deprecated deprecated since version 2.0, Use withMtime() instead.
     *
     * @param string $mtime
     *
     * @return $this
     */
    public function setMtime($mtime)
    {
        return $this->withMtime($mtime);
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
     * @deprecated deprecated since version 2.0, Use withCheckLimit() instead.
     *
     * @param string $checkLimit
     *
     * @return $this
     */
    public function setCheckLimit($checkLimit)
    {
        return $this->withCheckLimit($checkLimit);
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
