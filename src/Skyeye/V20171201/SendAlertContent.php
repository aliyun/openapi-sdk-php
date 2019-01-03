<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendAlertContent
 *
 * @method string getAlertTarget()
 * @method string getAlertInfoName()
 * @method string getAlertText()
 * @method string getTitle()
 * @method string getTags()
 */
class SendAlertContent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Skyeye';

    /**
     * @var string
     */
    public $version = '2017-12-01';

    /**
     * @var string
     */
    public $action = 'SendAlertContent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAlertTarget() instead.
     *
     * @param string $alertTarget
     *
     * @return $this
     */
    public function setAlertTarget($alertTarget)
    {
        return $this->withAlertTarget($alertTarget);
    }

    /**
     * @param string $alertTarget
     *
     * @return $this
     */
    public function withAlertTarget($alertTarget)
    {
        $this->data['AlertTarget'] = $alertTarget;
        $this->options['query']['AlertTarget'] = $alertTarget;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAlertInfoName() instead.
     *
     * @param string $alertInfoName
     *
     * @return $this
     */
    public function setAlertInfoName($alertInfoName)
    {
        return $this->withAlertInfoName($alertInfoName);
    }

    /**
     * @param string $alertInfoName
     *
     * @return $this
     */
    public function withAlertInfoName($alertInfoName)
    {
        $this->data['AlertInfoName'] = $alertInfoName;
        $this->options['query']['AlertInfoName'] = $alertInfoName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAlertText() instead.
     *
     * @param string $alertText
     *
     * @return $this
     */
    public function setAlertText($alertText)
    {
        return $this->withAlertText($alertText);
    }

    /**
     * @param string $alertText
     *
     * @return $this
     */
    public function withAlertText($alertText)
    {
        $this->data['AlertText'] = $alertText;
        $this->options['query']['AlertText'] = $alertText;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }
}
