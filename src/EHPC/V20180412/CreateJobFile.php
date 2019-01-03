<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateJobFile
 *
 * @method string getTargetFile()
 * @method string getRunasUserPassword()
 * @method string getRunasUser()
 * @method string getClusterId()
 * @method string getContent()
 */
class CreateJobFile extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'CreateJobFile';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withTargetFile() instead.
     *
     * @param string $targetFile
     *
     * @return $this
     */
    public function setTargetFile($targetFile)
    {
        return $this->withTargetFile($targetFile);
    }

    /**
     * @param string $targetFile
     *
     * @return $this
     */
    public function withTargetFile($targetFile)
    {
        $this->data['TargetFile'] = $targetFile;
        $this->options['query']['TargetFile'] = $targetFile;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRunasUserPassword() instead.
     *
     * @param string $runasUserPassword
     *
     * @return $this
     */
    public function setRunasUserPassword($runasUserPassword)
    {
        return $this->withRunasUserPassword($runasUserPassword);
    }

    /**
     * @param string $runasUserPassword
     *
     * @return $this
     */
    public function withRunasUserPassword($runasUserPassword)
    {
        $this->data['RunasUserPassword'] = $runasUserPassword;
        $this->options['query']['RunasUserPassword'] = $runasUserPassword;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRunasUser() instead.
     *
     * @param string $runasUser
     *
     * @return $this
     */
    public function setRunasUser($runasUser)
    {
        return $this->withRunasUser($runasUser);
    }

    /**
     * @param string $runasUser
     *
     * @return $this
     */
    public function withRunasUser($runasUser)
    {
        $this->data['RunasUser'] = $runasUser;
        $this->options['query']['RunasUser'] = $runasUser;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

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
}
