<?php
/**
 * @file
 * Template file for the theming example text form.
 *
 * Available custom variables:
 * - $text_form: A string containing the pre-rendered form.
 * - $text_form_content: An array of form elements keyed by the element name.
 *
 * The default example below renders the entire form and its form elements in
 * a default order provided by Drupal.
 *
 * Alternatively, you may print each form element in the order you desire,
 * adding any extra html markup you wish to decorate the form like this:
 *
 * <?php print $text_form_content['element_name']; ?>
 *
 * The following snippet will print the contents of the $text_form_content
 * array, hidden in the source of the page, for you to discover the individual
 * element names.
 *
 * <?php print '<!--' . print_r($text_form_content, TRUE) . '-->'; ?>
 *
 */
?>
<!-- split-combine template -->
<script type="text/javascript">

var pwd = "<?php echo $pwd; ?>";

function getImageUiE(src)
{
		var img = document.createElement("img");
		img.src = src;
		return new UiElement(img, img.height, img.width);
}

var i = 0;
var cxing = new Character("1");
cxing.partials[i++] = new Partial('1', 2, getImageUiE(pwd + "/xing/xing.png"));
cxing.partials[i++] = new Partial('1.1', 2, getImageUiE(pwd + "/xing/xing-s.png"));
cxing.partials[i++] = new Partial('1.1.1', 0, getImageUiE(pwd + "/xing/xing-sl.png"));
cxing.partials[i++] = new Partial('1.1.2', 0, getImageUiE(pwd + "/xing/xing-sr.png"));
cxing.partials[i++] = new Partial('1.2', 0, getImageUiE(pwd + "/xing/xing-x.png"));

i = 0;
var cfan = new Character("2");
cfan.partials[i++] = new Partial('2', 2, getImageUiE(pwd + "/fan/fan.png"));
cfan.partials[i++] = new Partial('2.1', 3, getImageUiE(pwd + "/fan/fan-s.png"));
cfan.partials[i++] = new Partial('2.1.1', 0, getImageUiE(pwd + "/fan/fan-sl.png"));
cfan.partials[i++] = new Partial('2.1.2', 2, getImageUiE(pwd + "/fan/fan-sm.png"));
cfan.partials[i++] = new Partial('2.1.2.1', 0, getImageUiE(pwd + "/fan/fan-sms.png"));
cfan.partials[i++] = new Partial('2.1.2.2', 0, getImageUiE(pwd + "/fan/fan-smx.png"));
cfan.partials[i++] = new Partial('2.1.3', 0, getImageUiE(pwd + "/fan/fan-sr.png"));
cfan.partials[i++] = new Partial('2.2', 0, getImageUiE(pwd + "/fan/fan-x.png"));


var ptsMgr = new PartialManager(cfan.partials);

</script>

<!-- img src="images/xing/xing.png"></img -->
<div id="canvas" style="border:1px solid blue; width: 600px; height: 400px; margin: 0 auto 0 auto; position: relative;">
</div>
<a href="javascript:canvas.splitOnce();">Split</a>

<script type="text/javascript">

var canvas = new Canvas(document.getElementById("canvas"));
canvas.decorate();
canvas.paint(ptsMgr.getLowestPartials());

</script>

<!-- /split-combine template -->
