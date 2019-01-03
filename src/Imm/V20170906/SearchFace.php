<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SearchFace
 *
 * @method string getResultNum()
 * @method string getProject()
 * @method string getSearchThresholdLevel()
 * @method string getSrcUri()
 * @method string getIsThreshold()
 * @method string getGroupName()
 */
class SearchFace extends RpcRequest
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
    public $action = 'SearchFace';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withResultNum() instead.
     *
     * @param string $resultNum
     *
     * @return $this
     */
    public function setResultNum($resultNum)
    {
        return $this->withResultNum($resultNum);
    }

    /**
     * @param string $resultNum
     *
     * @return $this
     */
    public function withResultNum($resultNum)
    {
        $this->data['ResultNum'] = $resultNum;
        $this->options['query']['ResultNum'] = $resultNum;

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
     * @deprecated deprecated since version 2.0, Use withSearchThresholdLevel() instead.
     *
     * @param string $searchThresholdLevel
     *
     * @return $this
     */
    public function setSearchThresholdLevel($searchThresholdLevel)
    {
        return $this->withSearchThresholdLevel($searchThresholdLevel);
    }

    /**
     * @param string $searchThresholdLevel
     *
     * @return $this
     */
    public function withSearchThresholdLevel($searchThresholdLevel)
    {
        $this->data['SearchThresholdLevel'] = $searchThresholdLevel;
        $this->options['query']['SearchThresholdLevel'] = $searchThresholdLevel;

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
     * @deprecated deprecated since version 2.0, Use withIsThreshold() instead.
     *
     * @param string $isThreshold
     *
     * @return $this
     */
    public function setIsThreshold($isThreshold)
    {
        return $this->withIsThreshold($isThreshold);
    }

    /**
     * @param string $isThreshold
     *
     * @return $this
     */
    public function withIsThreshold($isThreshold)
    {
        $this->data['IsThreshold'] = $isThreshold;
        $this->options['query']['IsThreshold'] = $isThreshold;

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
}
