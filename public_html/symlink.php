<?php
if(symlink("/laravelAPI/public/images", "/public_html/images"))
echo "done";
else
echo "not done";
?>