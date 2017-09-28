<?php
$leftbracket = new Tag("span","bracket");
$leftbracket->_tagcontent="&lt;/";
$rightbracket = new Tag("span","bracket");
$rightbracket->_tagcontent = "&gt; - 2017";
$be = new Tag("span","becode");
$be->_tagcontent = "be";
$code = new Tag("span","becode");
$code->_tagcontent = "code";
$footer = new Footer(" &copy; Gu2 - ");
echo $footer->_htmltag;
echo $footer->_tagcontent;
tagDisplay($be);
tagDisplay($leftbracket);
tagDisplay($code);
tagDisplay($rightbracket);
echo $footer->closeTag();
?>
  </body>
    <script type="text/javascript" src="<?php echo SCRIPT;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo SCRIPT;?>jquery.js"></script>
</html>
