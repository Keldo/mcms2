<?php
/*
Plugin name: Example Plugin
Text Domain: example-plugin
Author: Rebecca Boisvert <rboisvert@dwosi.us>
Author URI: https://www.dwosi.us
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Description: This is the example module for the microCMS
Requires at least: Since 1.5
Requires PHP: 7.4.8
Version: 0.1.0
*/
$plugin_version = '0.1.0';
?> 
<!-- This file should have html mixed with a little PHP to produce whatever content that you want. -->
<link rel="stylesheet" href="mc-content/plugins/example-plugin/public/css/style.css">
<div class="example-plugin">
<h2>Example Plugin</h2>
  <p>This is an example plugin version <?php echo $plugin_version;?></p>
  <h3>Why it was created</h3>
  <p>It was made with love, to demonstrate how to create a simple plugin for the microCMS.</p>
  <p>Of course, it can be extended to build bigger and better with more functionality. That is entirely up to you.</p>
  <p>~ RB</p>
</div>
<div class="example-plugin">
<h3>One can learn from the simplest of things!</h3>
  <p>Did you know, that you can learn PHP just by trying your hand at simple plugins? or even themes?</p>
  <p>That is basically part of why the microCMS was created. To teach.</p>
  <p>By coding simple things, and understanding what it is that you are creating, you learn and eventually move on to
  bigger and better things, but please, never look down on the others who are just starting to learn.</p>
  <p><i>"Code is like Poetry, not everyone is good at it, but everyone can learn how to do it"</i><br>~SC</p>
</div>
