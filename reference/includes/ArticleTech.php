<?php
class ChatMessage 
{
    private $id;
    private $title;
    private $content;
    private $date;
    private $author;  
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getDate() {
        return $this->date;
    }

    function getAuthor() {
        return $this->author;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setAuthor($author) {
        $this->author = $author;
    }
    
     
    public function findAll() {
        $sql = "select * from CHATMESSAGE order by DATE_CHATMESSAGE ASC";
        $result = $this->getDb()->fetchAll($sql);

        // Converts query result to an array of domain objects
        //$messages = array();
        //foreach ($result as $row) {
        //    $messageId = $row['id_chatmessage'];
        //    $messages[$messageId] = $this->buildDomainObject($row);
        //}
        //return $messages;
    }


    

    
}
