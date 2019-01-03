<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SearchDocIndex
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
class SearchDocIndex extends RpcRequest
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
    public $action = 'SearchDocIndex';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withModifiedTimeEnd() instead.
     *
     * @param string $modifiedTimeEnd
     *
     * @return $this
     */
    public function setModifiedTimeEnd($modifiedTimeEnd)
    {
        return $this->withModifiedTimeEnd($modifiedTimeEnd);
    }

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
     * @deprecated deprecated since version 2.0, Use withCustomKey1() instead.
     *
     * @param string $customKey1
     *
     * @return $this
     */
    public function setCustomKey1($customKey1)
    {
        return $this->withCustomKey1($customKey1);
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
     * @deprecated deprecated since version 2.0, Use withSet() instead.
     *
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        return $this->withSet($set);
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
     * @deprecated deprecated since version 2.0, Use withSizeLimitEnd() instead.
     *
     * @param string $sizeLimitEnd
     *
     * @return $this
     */
    public function setSizeLimitEnd($sizeLimitEnd)
    {
        return $this->withSizeLimitEnd($sizeLimitEnd);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey5() instead.
     *
     * @param string $customKey5
     *
     * @return $this
     */
    public function setCustomKey5($customKey5)
    {
        return $this->withCustomKey5($customKey5);
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
     * @deprecated deprecated since version 2.0, Use withOffset() instead.
     *
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        return $this->withOffset($offset);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey4() instead.
     *
     * @param string $customKey4
     *
     * @return $this
     */
    public function setCustomKey4($customKey4)
    {
        return $this->withCustomKey4($customKey4);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey3() instead.
     *
     * @param string $customKey3
     *
     * @return $this
     */
    public function setCustomKey3($customKey3)
    {
        return $this->withCustomKey3($customKey3);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey2() instead.
     *
     * @param string $customKey2
     *
     * @return $this
     */
    public function setCustomKey2($customKey2)
    {
        return $this->withCustomKey2($customKey2);
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
     * @deprecated deprecated since version 2.0, Use withModifiedTimeStart() instead.
     *
     * @param string $modifiedTimeStart
     *
     * @return $this
     */
    public function setModifiedTimeStart($modifiedTimeStart)
    {
        return $this->withModifiedTimeStart($modifiedTimeStart);
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
     * @deprecated deprecated since version 2.0, Use withPageNumLimitStart() instead.
     *
     * @param string $pageNumLimitStart
     *
     * @return $this
     */
    public function setPageNumLimitStart($pageNumLimitStart)
    {
        return $this->withPageNumLimitStart($pageNumLimitStart);
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
     * @deprecated deprecated since version 2.0, Use withCustomKey6() instead.
     *
     * @param string $customKey6
     *
     * @return $this
     */
    public function setCustomKey6($customKey6)
    {
        return $this->withCustomKey6($customKey6);
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
     * @deprecated deprecated since version 2.0, Use withPageNumLimitEnd() instead.
     *
     * @param string $pageNumLimitEnd
     *
     * @return $this
     */
    public function setPageNumLimitEnd($pageNumLimitEnd)
    {
        return $this->withPageNumLimitEnd($pageNumLimitEnd);
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
     * @deprecated deprecated since version 2.0, Use withContentType() instead.
     *
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        return $this->withContentType($contentType);
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
     * @deprecated deprecated since version 2.0, Use withSizeLimitStart() instead.
     *
     * @param string $sizeLimitStart
     *
     * @return $this
     */
    public function setSizeLimitStart($sizeLimitStart)
    {
        return $this->withSizeLimitStart($sizeLimitStart);
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
     * @deprecated deprecated since version 2.0, Use withLimit() instead.
     *
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        return $this->withLimit($limit);
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
