<!-- Comment.php -->

<?php

class Comment {
    private $commentId;
    private $content;
    private $author;

    public function __construct($commentId, $content, $author) {
        $this->commentId = $commentId;
        $this->content = $content;
        $this->author = $author;
    }

    public function displayInfo() {
        echo "Comment ID: $this->commentId\n";
        echo "Content: $this->content\n";
        echo "Author: $this->author\n";
    }
}
