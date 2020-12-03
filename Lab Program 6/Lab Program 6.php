<strong style="color:green;background:lightpink;">
<?php
    $handle = fopen("counter.txt","r");
    if(!$handle)
    {
        echo "Could not open the file";
    }
    else{
        $counter =(int)fread($handle,20);
        fclose($handle);
        $counter++;
        echo "<p>Welcome To the Page</p>
              <p align=center><strong>You are visitor Number ". $counter . "</strong></p>"
        $handle = fopen("counter.txt","w");
        fwrite($handle,$counter);
        fclose($handle);
    }
?>