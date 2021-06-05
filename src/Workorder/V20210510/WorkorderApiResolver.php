<?php

namespace AlibabaCloud\Workorder\V20210510;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CloseTicket closeTicket(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method GetMessageTag getMessageTag(array $options = [])
 * @method ListCategories listCategories(array $options = [])
 * @method ListProducts listProducts(array $options = [])
 * @method ListTicketNotes listTicketNotes(array $options = [])
 * @method ListTickets listTickets(array $options = [])
 * @method ReplyTicket replyTicket(array $options = [])
 */
class WorkorderApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Workorder';

    /** @var string */
    public $version = '2021-05-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTicketId()
 */
class CloseTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}

/**
 * @method string getSeverity()
 * @method string getDescription()
 * @method string getCategoryId()
 */
class CreateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSeverity($value)
    {
        $this->data['Severity'] = $value;
        $this->options['form_params']['Severity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }
}

class GetMessageTag extends Rpc
{
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ListCategories extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class ListProducts extends Rpc
{
}

/**
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class ListTicketNotes extends Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method array getStatusList()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class ListTickets extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSecContent()
 * @method string getContent()
 * @method string getTicketId()
 */
class ReplyTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecContent($value)
    {
        $this->data['SecContent'] = $value;
        $this->options['form_params']['SecContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }
}
