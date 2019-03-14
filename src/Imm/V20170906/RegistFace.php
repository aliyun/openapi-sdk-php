<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api RegistFace
 *
 * @method string getChooseBiggestFace()
 * @method string getIsQualityLimit()
 * @method string getProject()
 * @method string getSrcUri()
 * @method string getRegisterCheckLevel()
 * @method string getGroupName()
 * @method string getUser()
 */
class RegistFace extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
