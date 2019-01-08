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
