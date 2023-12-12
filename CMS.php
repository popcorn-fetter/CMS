<!-- CMS.php -->

<?php

require_once 'User.php';
require_once 'Post.php';
require_once 'Comment.php';

// Create users
$user1 = new User(1, 'Alice', 'alice@example.com');
$user2 = new User(2, 'Bob', 'bob@example.com');

// Create posts
$post1 = new Post(101, 'PHP Basics', 'This is an introduction to PHP.', $user1);
$post2 = new Post(102, 'Web Development', 'Building websites with PHP and HTML.', $user2);

// Create comments
$comment1 = new Comment(1001, 'Great post!', $user2);
$comment2 = new Comment(1002, 'Looking forward to more content.', $user1);

// Display information
echo "User Information:\n";
$user1->displayInfo();
echo "\n";
$user2->displayInfo();

echo "\nPost Information:\n";
$post1->displayInfo();
echo "\n";
$post2->displayInfo();

echo "\nComment Information:\n";
$comment1->displayInfo();
echo "\n";
$comment2->displayInfo();
