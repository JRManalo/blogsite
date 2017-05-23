<?php
    /**
     * Provides CRUD access to BlogPosts in our database
     * PHP Version 5
     * @author Jeremy Manalo
     * @version 1.0
     */
    //CONNECT
    class BlogPostDB
    {
        private $_pdo;
        
        function __construct()
        {
            //Require DB credential file
            require_once '/home/jmanalo/credentials/credentials.php';
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
         	 
	/**
	 * Returns all blog pots associated with this user id in the database.
	 *
	 * @access public
	 * @param int user id
	 * 
	 * @return an associative array of blogs indexed by bid
	 */
	function allBlog($id)
	{
		$select = 'SELECT title, content, date, count FROM blogs WHERE id=:id';
		$results = $this->_pdo->query($select);
		 
		$resultsArray = array();
		 
		//map each blog bid to a row of data for that user
		while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$resultsArray[$row['id']] = $row;
		}
		 
		return $resultsArray;
	}
	
	/**
	 * Count all blogs associated with this user id
	 *
	 * @access public
	 * @param int user id
	 *
	 * @return the number of blogs found
	 */
	function countBlog($id)
	{
		$select = 'SELECT bid FROM blogs WHERE id=:id';
		$result = $this->_pdo->query($select);
		$counter = $result->columnCount();
		return $counter;
	}
	
	/**
	 * Adds a blog post to the list of blog post in the database.
	 *
	 * @access public
	 * @param string $title the name of the post
	 * @param string $content the content of the post
	 * @param string $date the date posted
	 * @param int $count blog's word count
	 *
	 * @return true if the insert was successful, otherwise false
	 */
	function addBlog($title, $content, $count)
	{
		$insert = 'INSERT INTO blogs (title, content, count)
					VALUES (:title, :content, :count)';
		 
		$statement = $this->_pdo->prepare($insert);
		$statement->bindValue(':title', $title, PDO::PARAM_STR);
		$statement->bindValue(':content', $content, PDO::PARAM_STR);
		$statement->bindValue(':count', $count, PDO::PARAM_INT);
		
		$statement->execute();
		
		//Return ID of inserted row
		return $this->_pdo->lastInsertId();
	}
	 
	/**
	 * Returns a blog post that has the given id.
	 *
	 * @access public
	 * @param int $id the id of the blog post
	 *
	 * @return an associative array of blog's information, false if
	 * the blog post was not found
	 */
	function blogById($bid)
	{
		$select = 'SELECT title, content, date, count FROM blogs WHERE bid=:bid';
		 
		$statement = $this->_pdo->prepare($select);
		$statement->bindValue(':bid', $bid, PDO::PARAM_INT);
		$statement->execute();
		 
		return $statement->fetch(PDO::FETCH_ASSOC);
	}
	 /**
	 * Updates the attributes for a blog in the database.
	 *
	 * @access public
	 * @param int $bid the bid of the blog
	 */  
	function updateMem($bid, $title, $content)
	{
		$update = 'UPDATE blogs SET title=:title, content=:content WHERE bid=:bid';
		 
		$statement = $this->_pdo->prepare($update);
		$statement->bindValue(':title', $title, PDO::PARAM_STR);
		$statement->bindValue(':content', $content, PDO::PARAM_STR);
		$statement->execute();
	}
	/**
	 * Deletes the blog associated with the input bid.
	 *
	 * @access public
	 * @param int $bid the bid of the blog
	 *
	 * @return true if the delete was successful, otherwise false
	 */
	function deleteBlog($bid)
	{        
		$delete = 'DELETE FROM blogs WHERE bid=:bid';
		 
		$statement = $this->_pdo->prepare($delete);
		$statement->bindValue(':bid', $bid, PDO::PARAM_INT);
		 
		return $statement->execute();
	}
}//end class