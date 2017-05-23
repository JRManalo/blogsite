<?php
/**
 * The Blogger class represents a blogger in our blog site.
 * The Blogger class represents a Blogger with their name, email,
 * password, bio, profile_pic.
 * @author Jeremy Manalo
 * @copyright 2017
 */
class Blogger
{
	/**
	  * User name
	  *
	  * @var string
	  * @since 5.4
	  */
	 protected $name;
	
	
	/**
	  * User email
	  *
	  * @var string
	  * @since 5.4
	  */
	 protected $email;
	  
	/**
	  * User password
	  *
	  * @var string
	  * @since 5.4
	  */
	 protected $password;
	  
	/**
	  * User bio
	  *
	  * @var string
	  * @since 5.4
	  */
	 protected $bio;
	
	/**
	  * User profile pic stored as img name
	  *
	  * @var string
	  * @since 5.4
	  */
	 protected $profile_pic;
	
	/**
	 * Constructor for Blogger class
	 *
	 * @param $name		- user name
	 * @param $email	- user email
	 * @param $password	- user password
	 * @param $bio		- user bio
	 * @param $profile_pic	- user profile pic
	 */
	function __construct($name="unknown", $email="unknown", $password="unknown",
						 $bio="unknown", $profile_pic="unknown")
	{
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->bio = $bio;
		$this->image = $profile_pic;
		$this->total = $total;
	}
	
	/**
	 * Getter for user name
	 *
	 * @return $name value
	 */
	function getName()
	{
		return $this->name;
	}
	
	/**
	 * Setter for user name
	 *
	 * @param user name
	 */
	function setName($name)
	{
		$this->name = $name;
	}
	
	/**
	 * Getter for user age
	 *
	 * @return $email value
	 */
	function getEmail()
	{
		return $this->email;
	}
	
	/**
	 * Setter for user email
	 *
	 * @param user email
	 */
	function setEmail($email)
	{
		$this->email = $email;
	}
	
	/**
	 * Getter for user password
	 *
	 * @return $password value
	 */
	function getPassword()
	{
		return $this->password;
	}
	
	/**
	 * Setter for user password
	 *
	 * @param user password
	 */
	function setPassword($password)
	{
		$this->password = $password;
	}
	
	/**
	 * Getter for user bio
	 *
	 * @return $bio value
	 */
	function getBio()
	{
		return $this->bio;
	}
	
	/**
	 * Setter for user bio
	 *
	 * @param user bio
	 */
	function setBio$bio)
	{
		$this->bio = $bio;
	}
	
	/**
	 * Getter for user profile pic
	 *
	 * @return $profile_pic value
	 */
	function getProfile_pic()
	{
		return $this->profile_pic;
	}
	
	/**
	 * Setter for user profile_pic
	 *
	 * @param user profile_pic
	 */
	function setProfile_pic($profile_pic)
	{
		$this->profile_pic = $profile_pic;
	}
}// end of Member class