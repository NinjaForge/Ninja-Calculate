<?php
/* 
* package : Ninja Calculator Module
* author : Theo van der Sluijs
* link : http://www.vandersluijs.nl, http://www.ninjoomla.com
* Description : Just a nifty calculator
* copyright : Copyright (C) 2007 VanderSluijs.nl, in cooperation with www.ninjoomla.com - Code so sharp, it hurts.
* email: theo@vandersluijs.nl
* date:  October 2007
* Release: 1.1
* PHP Code License : http://www.gnu.org/copyleft/gpl.html GNU/GPL 
* JavaScript Code & CSS  : http://creativecommons.org/licenses/by-nc-sa/3.0/
*/
/*###################################################################
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.
//
//You should have received a copy of the GNU General Public License
//along with this program; if not, write to the Free Software
//Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
###################################################################*/

// no direct access to file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

//special code for HTML purists
//Process the buildin css file
$addcss = intval (trim( $params->get( 'addcss', 1 )));
$addcsstohead = intval (trim( $params->get( 'addcsstohead', 0 )));
$liveurl = JURI::base();
  if ($addcss) {
//Insert link to head (onece)/
$linktag = '<link rel="stylesheet" type="text/css" href="'.JURI::base().'modules/mod_calculator/mod_calculator/mod_calculator.css" />'."\n";
if ($addcsstohead) {
$buffer = ob_get_contents();
$pos = strpos ($buffer, '</head>');
$buffer = substr ($buffer, 0, $pos) . "\n$linktag\n". substr($buffer, $pos);
ob_clean();
echo $buffer;
}else{
echo $linktag;
}
}
?>
<!-- 
call the j-script
-->
<script language="javascript" src="<?php echo JURI::base();?>modules/mod_calculator/mod_calculator/mod_calculator.js" type="text/javascript"></script>
<!-- 
div for calculator 
-->
  <div id="calc_container">
    <div id="calc_outcome" class="inputbox">0</div>
    <div class="calc_buttonrow">
      <div class="calc_button_left"><input type="button" value="CE" class="button" style="width:30px" onClick="calc('CE')"></div>
      <div class="calc_button_left"><input type="button" value="C" class="button" style="width:30px" onClick="calc('C')"></div>
      <div class="calc_button_left"><input type="button" value="+/-" class="button" style="width:30px" onClick="calc('+/-')"></div>
      <div class="calc_button_right"><input type="button" value="%" class="button" style="width:30px" onClick="calc('%')"></div>
    </div>
    <div class="calc_buttonrow">
      <div class="calc_button_left"><input type="button" value="7" class="button" style="width:30px" onClick="calc('7')"></div>
      <div class="calc_button_left"><input type="button" value="8" class="button" style="width:30px" onClick="calc('8')"></div>
      <div class="calc_button_left"><input type="button" value="9" class="button" style="width:30px" onClick="calc('9')"></div>
      <div class="calc_button_right"><input type="button" value="/" class="button" style="width:30px" onClick="calc('/')"></div>
    </div>
    <div class="calc_buttonrow">
      <div class="calc_button_left"><input type="button" value="4" class="button" style="width:30px" onClick="calc('4')"></div>
      <div class="calc_button_left"><input type="button" value="5" class="button" style="width:30px" onClick="calc('5')"></div>
      <div class="calc_button_left"><input type="button" value="6" class="button" style="width:30px" onClick="calc('6')"></div>
      <div class="calc_button_right"><input type="button" value="x" class="button" style="width:30px" onClick="calc('*')"></div>
    </div>
    <div class="calc_buttonrow">
      <div class="calc_button_left"><input type="button" value="1" class="button" style="width:30px" onClick="calc('1')"></div>
      <div class="calc_button_left"><input type="button" value="2" class="button" style="width:30px" onClick="calc('2')"></div>
      <div class="calc_button_left"><input type="button" value="3" class="button" style="width:30px" onClick="calc('3')"></div>
      <div class="calc_button_right"><input type="button" value="-" class="button" style="width:30px" onClick="calc('-')"></div>
    </div>
    <div class="calc_buttonrow">
      <div class="calc_button_left"><input type="button" value="0" class="button" style="width:30px" onClick="calc('0')"></div>
      <div class="calc_button_left"><input type="button" value="." class="button" style="width:30px" onClick="calc('.')"></div>
      <div class="calc_button_left"><input type="button" value="=" class="button" style="width:30px" onClick="calc('=')"></div>
      <div class="calc_button_right"><input type="button" value="+" class="button" style="width:30px" onClick="calc('+')"></div>
    </div>  
  </div>
<!--
end div for calculator 
special calc_spacer for div overlap 
-->
 <div class="calc_spacer"></div> 