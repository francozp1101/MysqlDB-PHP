<?php


// Create the table 1 for  "pages"
$sqlCommand = "CREATE TABLE pages (
               id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
               page_title VARCHAR(255),
               page_body TEXT,
	       page_views INT NOT NULL default '0',
               FULLTEXT (page_title,page_body)
               ) ENGINE=MyISAM";

echo "<h3>Success creating Pages table</h3>";
// Create the table 2 for  "Blog" 
$sqlCommand = "CREATE TABLE blog (
               id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
               blog_title VARCHAR(255),
               blog_body TEXT,
	       blog_views INT NOT NULL default '0',
               FULLTEXT (blog_title,blog_body)
               ) ENGINE=MyISAM";

echo "<h3>Success creating Blog table</h3>";
// Inserting data into the pages table
$sqlCommand = "INSERT INTO pages (page_title,page_body) VALUES
              ('PHP ','Learn to generate a random number using PHP '),
              ('Javascript ','Build a Javascript analog clock   '),
              ('Flash ','Build a Flash Photo gallery '),
              ('XML ','Learn to assemble XML  for your website '),
              ('CSS ','Learn text  techniques using CSS '),
              ('HTML5 ','Learn how to animate Canvas tag using '),
	         ('PHP ','Learn to build calculator using PHP '),
              ('Flash ','Learn to create a full flash webs ')";

echo "<h3>Success populating the pages table with data</h3>";
// Insert  data into the blog table
$sqlCommand = "INSERT INTO blog (blog_title,blog_body) VALUES
              ('Travel','Disney world would have been fun if I were 10 '),
              ('Lifestyle','I graduated school finally '),
              ('Do-it-Yourself','In the bathroom today I made the biggest  '),
              ('New Pet Bird','Today I got a new bird that repeats everything '),
              ('Animals','My cat ate my bird today so as punishment I')";

echo "<h3>Success populating the blog table with data</h3>";
?>