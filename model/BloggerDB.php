<?php
    /**
     * Provides CRUD access to Bloggers in our database
     * PHP Version 5
     * @author Jeremy Manalo
     * @version 1.0
     */
    //CONNECT
    class BloggerDB
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
         * Adds a blogger to list of bloggers in the database.
         *
         * @access public
         * @param string $name the name of the blogger
         * @param string $email the email of the blogger
         * @param string $password the password of the blogger
         * @param string $image the image name of the blogger
         * @param string $bio the bio of the blogger
         *
         * @return true if the insert was successful, otherwise false
         */
        function addBlogger( $name, $email, $password, $profile_pic, $bio)
        {
            $insert = 'INSERT INTO users (name, email, password, profile_pic, bio) VALUES (:name,
															:email, :password, :profile_pic, :bio)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':name', $name, PDO::PARAM_STR);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->bindValue(':profile_pic', $profile_pic, PDO::PARAM_STR);
            $statement->bindValue(':bio', $bio, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
         
        /**
         * Returns all blogger in the database.
         *
         * @access public
         *
         * @return an associative array of bloggers indexed by id
         */
        function allBlogger()
        {
            $select = 'SELECT id, name, profile_pic FROM users';
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            //map each blogger id to a row of data for that blogger
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['id']] = $row;
            }
             
            return $resultsArray;
        }
         
        /**
         * Returns a blogger that has the given id.
         *
         * @access public
         * @param int $id the id of the blogger
         *
         * @return an associative array of blogger information, false if
         * the blogger was not found
         */
        function bloggerById($id)
        {
            $select = 'SELECT name, email FROM users WHERE id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
         
        /**
         * Returns true if the email is already used by a blogger in the database.
         *
         * @access public
         * @param string $email the email of the blogger to look for
         *
         * @return true if the email already exists, otherwise false
         */   
        function emailExists($email)
        {            
            $select = 'SELECT id, name, email FROM users WHERE email=:email';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);
             
            return !empty($row);
        }
}//end class