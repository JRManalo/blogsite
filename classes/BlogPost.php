<?php
/**
 * The BlogPost class represents the blogs posted on the blog site
 * The BlogPost class represents a post with title, content,
 * date submitted, and user id.
 * @author Jeremy Manalo
 * @copyright 2017
 */
class BlogPost
{
  /**
	* Blog's title
	*
	* @var string
	* @since 5.4
	*/
   protected $title;
  /**
	* Blog date
	*
	* @var string
	* @since 5.4
	*/
   protected $date_submitted;
   /**
	* Blog content
	*
	* @var string
	* @since 5.4
	*/
   protected $content;
   
	/**
	 * Constructor for Blogger class
	 *
	 * @param $title	- blog title
	 * @param $date_submitted		- blog date submitted
	 * @param $content	- blog content
	 */
	function __construct($title="unknown", $date_submitted="unknown",
								 $content="empty")
	{
		$this->title = $title;
		$this->date = $date_submitted;
		$this->content = $content;
	}
	
	/**
	 * Getter for blog title
	 *
	 * @return $title value
	 */
	function getTitle()
	{
		return $this->title;
	}
	
	/**
	 * Setter for blog title
	 *
	 * @param blog title
	 */
	function setTitle($title)
	{
		$this->title = $title;
	}
   
	/**
	 * Getter for blog date
	 *
	 * @return $date value
	 */
	function getDateSubmitted()
	{
		return $this->date;
	}
		
	/**
	 * Setter for blog date
	 *
	 * @param blog date
	 */
	function setDateSubmitted($date_submitted)
	{
		$this->date = $date_submitted;
	}
	
	/**
	 * Getter for blog content
	 *
	 * @return $content value
	 */
	function getContent()
	{
		return $this->content;
	}
	
	/**
	 * Setter for blog content
	 *
	 * @param blog content
	 */
	function setContent($content)
	{
		$this->content = $content;
	}
	
}// end of Member class