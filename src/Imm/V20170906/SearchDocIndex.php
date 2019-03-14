<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api SearchDocIndex
 *
 * @method string getModifiedTimeEnd()
 * @method string getCustomKey1()
 * @method string getSet()
 * @method string getSizeLimitEnd()
 * @method string getCustomKey5()
 * @method string getOffset()
 * @method string getCustomKey4()
 * @method string getCustomKey3()
 * @method string getCustomKey2()
 * @method string getProject()
 * @method string getModifiedTimeStart()
 * @method string getPageNumLimitStart()
 * @method string getCustomKey6()
 * @method string getContent()
 * @method string getPageNumLimitEnd()
 * @method string getContentType()
 * @method string getSizeLimitStart()
 * @method string getName()
 * @method string getLimit()
 */
class SearchDocIndex extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

    /**
     * @param string $modifiedTimeEnd
     *
     * @return $this
     */
    public function withModifiedTimeEnd($modifiedTimeEnd)
    {
        $this->data['ModifiedTimeEnd'] = $modifiedTimeEnd;
        $this->options['query']['ModifiedTimeEnd'] = $modifiedTimeEnd;

        return $this;
    }

    /**
     * @param string $customKey1
     *
     * @return $this
     */
    public function withCustomKey1($customKey1)
    {
        $this->data['CustomKey1'] = $customKey1;
        $this->options['query']['CustomKey1'] = $customKey1;

        return $this;
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function withSet($set)
    {
        $this->data['Set'] = $set;
        $this->options['query']['Set'] = $set;

        return $this;
    }

    /**
     * @param string $sizeLimitEnd
     *
     * @return $this
     */
    public function withSizeLimitEnd($sizeLimitEnd)
    {
        $this->data['SizeLimitEnd'] = $sizeLimitEnd;
        $this->options['query']['SizeLimitEnd'] = $sizeLimitEnd;

        return $this;
    }

    /**
     * @param string $customKey5
     *
     * @return $this
     */
    public function withCustomKey5($customKey5)
    {
        $this->data['CustomKey5'] = $customKey5;
        $this->options['query']['CustomKey5'] = $customKey5;

        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function withOffset($offset)
    {
        $this->data['Offset'] = $offset;
        $this->options['query']['Offset'] = $offset;

        return $this;
    }

    /**
     * @param string $customKey4
     *
     * @return $this
     */
    public function withCustomKey4($customKey4)
    {
        $this->data['CustomKey4'] = $customKey4;
        $this->options['query']['CustomKey4'] = $customKey4;

        return $this;
    }

    /**
     * @param string $customKey3
     *
     * @return $this
     */
    public function withCustomKey3($customKey3)
    {
        $this->data['CustomKey3'] = $customKey3;
        $this->options['query']['CustomKey3'] = $customKey3;

        return $this;
    }

    /**
     * @param string $customKey2
     *
     * @return $this
     */
    public function withCustomKey2($customKey2)
    {
        $this->data['CustomKey2'] = $customKey2;
        $this->options['query']['CustomKey2'] = $customKey2;

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
     * @param string $modifiedTimeStart
     *
     * @return $this
     */
    public function withModifiedTimeStart($modifiedTimeStart)
    {
        $this->data['ModifiedTimeStart'] = $modifiedTimeStart;
        $this->options['query']['ModifiedTimeStart'] = $modifiedTimeStart;

        return $this;
    }

    /**
     * @param string $pageNumLimitStart
     *
     * @return $this
     */
    public function withPageNumLimitStart($pageNumLimitStart)
    {
        $this->data['PageNumLimitStart'] = $pageNumLimitStart;
        $this->options['query']['PageNumLimitStart'] = $pageNumLimitStart;

        return $this;
    }

    /**
     * @param string $customKey6
     *
     * @return $this
     */
    public function withCustomKey6($customKey6)
    {
        $this->data['CustomKey6'] = $customKey6;
        $this->options['query']['CustomKey6'] = $customKey6;

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
     * @param string $pageNumLimitEnd
     *
     * @return $this
     */
    public function withPageNumLimitEnd($pageNumLimitEnd)
    {
        $this->data['PageNumLimitEnd'] = $pageNumLimitEnd;
        $this->options['query']['PageNumLimitEnd'] = $pageNumLimitEnd;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function withContentType($contentType)
    {
        $this->data['ContentType'] = $contentType;
        $this->options['query']['ContentType'] = $contentType;

        return $this;
    }

    /**
     * @param string $sizeLimitStart
     *
     * @return $this
     */
    public function withSizeLimitStart($sizeLimitStart)
    {
        $this->data['SizeLimitStart'] = $sizeLimitStart;
        $this->options['query']['SizeLimitStart'] = $sizeLimitStart;

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
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

        return $this;
    }
}
