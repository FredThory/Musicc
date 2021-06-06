<!DOCTYPE html>
<html>
<body>

<?php
$jsonobj = '{
    "annotation": {
      "body": {
        "markdown": "hello **world!**"
      }
    },
    "referent": {
      "raw_annotatable_url": "http://seejohncode.com/2014/01/27/vim-commands-piping/",
      "fragment": "execute commands",
      "context_for_display": {
        "before_html": "You may know that you can ",
        "after_html": " from inside of vim, with a vim command:"
      }
    },
    "web_page": {
      "canonical_url": null,
      "og_url": null,
      "title": "Secret of Mana"
    }
  }';

$arr = json_decode($jsonobj, true);

echo $arr["referent"]["context_for_display"]["before_html"] . "<br>";
echo $arr["web_page"]["title"] . "<br>";

?>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.6.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.6.4/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</body>
</html>