<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegistFace
 *
 * @method string getChooseBiggestFace()
 * @method string getIsQualityLimit()
 * @method string getProject()
 * @method string getSrcUri()
 * @method string getRegisterCheckLevel()
 * @method string getGroupName()
 * @method string getUser()
 */
class RegistFace extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'RegistFace';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withChooseBiggestFace() instead.
     *
     * @param string $chooseBiggestFace
     *
     * @return $this
     */
    public function setChooseBiggestFace($chooseBiggestFace)
    {
        return $this->withChooseBiggestFace($chooseBiggestFace);
    }

    /**
     * @param string $chooseBiggestFace
     *
     * @return $this
     */
    public function withChooseBiggestFace($chooseBiggestFace)
    {
        $this->data['ChooseBiggestFace'] = $chooseBiggestFace;
        $this->options['query']['ChooseBiggestFace'] = $chooseBiggestFace;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIsQualityLimit() instead.
     *
     * @param string $isQualityLimit
     *
     * @return $this
     */
    public function setIsQualityLimit($isQualityLimit)
    {
        return $this->withIsQualityLimit($isQualityLimit);
    }

    /**
     * @param string $isQualityLimit
     *
     * @return $this
     */
    public function withIsQualityLimit($isQualityLimit)
    {
        $this->data['IsQualityLimit'] = $isQualityLimit;
        $this->options['query']['IsQualityLimit'] = $isQualityLimit;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUri() instead.
     *
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        return $this->withSrcUri($srcUri);
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function withSrcUri($srcUri)
    {
        $this->data['SrcUri'] = $srcUri;
        $this->options['query']['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegisterCheckLevel() instead.
     *
     * @param string $registerCheckLevel
     *
     * @return $this
     */
    public function setRegisterCheckLevel($registerCheckLevel)
    {
        return $this->withRegisterCheckLevel($registerCheckLevel);
    }

    /**
     * @param string $registerCheckLevel
     *
     * @return $this
     */
    public function withRegisterCheckLevel($registerCheckLevel)
    {
        $this->data['RegisterCheckLevel'] = $registerCheckLevel;
        $this->options['query']['RegisterCheckLevel'] = $registerCheckLevel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUser() instead.
     *
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        return $this->withUser($user);
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function withUser($user)
    {
        $this->data['User'] = $user;
        $this->options['query']['User'] = $user;

        return $this;
    }
}
