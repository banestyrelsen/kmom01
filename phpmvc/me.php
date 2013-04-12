<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$vjByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat diam sit amet metus venenatis tincidunt. Phasellus tincidunt, dolor at pulvinar euismod, odio dolor interdum sem, quis suscipit risus arcu ullamcorper magna. Proin rhoncus sollicitudin enim non euismod. Suspendisse potenti. Aliquam sit amet purus tellus, id hendrerit velit. Quisque urna lectus, auctor ut euismod sed, adipiscing in mauris. Aliquam pellentesque porta leo, at consequat nibh bibendum ac. Mauris a nunc eget neque tempus cursus. Nullam dui nisi, lobortis a blandit ac, posuere vitae justo. Curabitur ac magna odio, non dapibus eros. Nunc metus lorem, iaculis id tempus vitae, pellentesque sed augue. Phasellus ut turpis sed mauris consectetur porttitor vel vel nunc. Praesent eu volutpat nulla. Fusce dolor massa, fringilla non elementum quis, commodo et erat. Donec pulvinar sapien vitae justo adipiscing sit amet consequat ligula pulvinar. Integer porttitor, dolor quis suscipit sagittis, nulla est facilisis nibh, nec sagittis arcu turpis a nunc.</p>

				<p>Vivamus leo magna, placerat eget convallis non, lobortis in mi. Donec nec vulputate mi. Duis mollis lacus sit amet diam accumsan non dapibus leo elementum. Nunc nunc sem, pellentesque consectetur sollicitudin a, dignissim ac eros. Aliquam euismod porttitor eleifend. Pellentesque laoreet, ipsum pulvinar dictum blandit, risus metus auctor orci, quis commodo nisl sapien vel mauris. Fusce dictum odio porttitor est eleifend eleifend vel ac lectus. Pellentesque sit amet pulvinar sem. Quisque venenatis velit nec justo vestibulum et tincidunt tortor tincidunt. Aenean blandit faucibus enim. Suspendisse accumsan enim vel risus ornare rhoncus.</p>
				
				<p>Suspendisse rhoncus metus sit amet velit posuere et tincidunt magna eleifend. Cras felis augue, venenatis sed lacinia et, ornare sit amet augue. Etiam imperdiet mauris id augue ultricies volutpat gravida libero consectetur. Praesent fermentum faucibus purus et pellentesque. Sed luctus sem mi, a imperdiet nulla. Proin aliquet mattis justo, sed tempus turpis malesuada a. Nulla auctor mauris non urna imperdiet eu vulputate magna eleifend. Donec facilisis sapien et nisl ultricies eleifend. Ut id leo nec elit vestibulum rutrum in sit amet diam. Vestibulum laoreet volutpat dolor, sit amet ullamcorper urna vulputate non. Curabitur eleifend porta dui, sed malesuada ipsum suscipit vel. Vestibulum ornare pulvinar quam, a facilisis felis hendrerit tempor. Mauris et nibh justo, in suscipit purus. Nullam consectetur lorem id elit hendrerit elementum. Phasellus iaculis, dolor vel aliquet varius, felis mauris rutrum massa, nec mattis sem lorem non justo.</p>
				
				<p>Aliquam aliquam accumsan est eget porttitor. Vivamus non felis felis, in euismod diam. Suspendisse tristique adipiscing libero a adipiscing. Phasellus imperdiet ultricies auctor. Nunc nec nisl tortor, non facilisis quam. Sed blandit, tellus id elementum congue, nibh quam feugiat nunc, cursus mollis lectus justo sed ante. Integer et magna urna, sit amet gravida mauris. In vel dui vitae nisi consectetur vulputate. Donec semper purus vitae mauris consectetur lacinia auctor justo interdum.</p>
				
				<p>Morbi lacinia molestie sem, posuere lobortis erat placerat non. In feugiat augue eu sapien lacinia vestibulum. Donec euismod justo ut nisi feugiat vestibulum. Donec vitae auctor sem. Pellentesque blandit lacus nec eros rhoncus pellentesque. Donec sit amet suscipit ligula. Morbi at purus risus.</p>

  
{$vjByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
