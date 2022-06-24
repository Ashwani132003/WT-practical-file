<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    //  To get the Length of string
        echo strlen("Hello world!"); // outputs 12
    // Count words
        echo str_word_count("Hello world!"); // outputs 2  
    // Reverse Words of string  
        echo strrev("Hello world!"); // outputs !dlrow olleH  
    // Starting index of word
        echo strpos("Hello world!", "world"); // outputs 6
    // Replace a word
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!    
?> 
  </body>
</html>