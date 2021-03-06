<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

// check modules
$showbottom			= ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft			= ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
	$showno = 0;
}

JHtml::_('behavior.framework', true);

// get params
$color				= $this->params->get('templatecolor');
$logo				= $this->params->get('logo');
$navposition		= $this->params->get('navposition');
$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams		= $app->getTemplate(true)->params;


$doc->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/position.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/layout.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/print.css', $type = 'text/css', $media = 'print');

$files = JHtml::_('stylesheet', 'templates/'.$this->template.'/css/general.css', null, false, true);
if ($files):
	if (!is_array($files)):
		$files = array($files);
	endif;
	foreach($files as $file):
		$doc->addStyleSheet($file);
	endforeach;
endif;

$doc->addStyleSheet('templates/'.$this->template.'/css/'.htmlspecialchars($color).'.css');
if ($this->direction == 'rtl') {
	$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template_rtl.css');
	if (file_exists(JPATH_SITE . '/templates/' . $this->template . '/css/' . $color . '_rtl.css')) {
		$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/'.htmlspecialchars($color).'_rtl.css');
	}
}

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/hide.js', 'text/javascript');

?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />

<script type="text/javascript">
	var big ='<?php echo (int)$this->params->get('wrapperLarge');?>%';
	var small='<?php echo (int)$this->params->get('wrapperSmall'); ?>%';
	var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN', true); ?>';
	var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE', true); ?>';
	var bildauf='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/plus.png';
	var bildzu='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/minus.png';
	var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN', true); ?>';
	var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE', true); ?>';
	var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE', true); ?>';
	var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER', true); ?>';
	var reset='<?php echo JText::_('TPL_BEEZ2_RESET', true); ?>';
	var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER', true); ?>';
	var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE', true); ?>';
	var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT', true); ?>';
	var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE', true); ?>';
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/flipclock.css" />
    <script type="text/javascript" src="/javascript/jquery-1.6.4.min.js"></script>
    <script src="/javascript/prefixfree.min.js"></script>
    <script type="text/javascript" src="/javascript/flipclock.min.js"></script>

<?php $Itemid = JRequest::getInt( 'Itemid', 1, 'get' );
$option = JRequest::getVar('option', null);
$view = JRequest::getVar('view', null);
$document = & JFactory::getDocument();
$user = & JFactory::getUser();
$menu = & JSite::getMenu();
?>
</head>
<?php
if ($menu->getActive() == $menu->getDefault()) {
echo "<body>";
} else {
    echo "<body id='nHome'>";
}
?>
<div id="all">
        <div id="back">
            <div id="header">
                <div class="logoheader">
                    <h1 id="logo">
                    <?php /*if ($logo): */?>
                    <a href="/joomlaT/" >
                        <img src="<?php /*echo $this->baseurl */?>/<?php /*echo htmlspecialchars($logo); */?>"  alt="<?php /*echo htmlspecialchars($templateparams->get('sitetitle'));*/?>" />
                    </a>
                    <?php /*endif;*/?>
                    <?php /*if (!$logo ): */?>
                    <?php /*echo htmlspecialchars($templateparams->get('sitetitle'));*/?>
                    <?php /*endif; */?>
                    <span class="header1">
                    <?php /*echo htmlspecialchars($templateparams->get('sitedescription'));*/?>
                    </span></h1>
                </div><!-- end logoheader -->
                <ul class="links">
                    <li class="fb">
                        <a href="http://www.facebook.com/pages/GeekHub/158983477520070"> </a>
                    </li>
                    <li class="vk">
                        <a href="http://vkontakte.ru/geekhub"> </a>
                    </li>
                    <li class="tw">
                        <a href="http://twitter.com/#!/geek_hub"> </a>
                    </li>
                    <li class="yb">
                        <a href="http://www.youtube.com/user/GeekHubchannel"> </a>
                    </li>
                </ul>
                <span class="line"></span>
                <div id="pos15">
                    <jdoc:include type="modules" name="position-15" />
                </div>
                <div id="GeekHubNews">
                    <jdoc:include type="modules" name="position-13" />
                </div>
                <img alt="splash" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/splash.png">

            </div><!-- end header -->
            <div id="wrapper">
                <?php if ($showleft) : ?>
                    <div id="nav">
                        <jdoc:include type="modules" name="position-7" />
                        <jdoc:include type="modules" name="position-4" />
                        <jdoc:include type="modules" name="position-5" />
                    </div><!-- end nav -->
                <?php endif; ?>
                <div id="main">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div><!-- end main -->
                <div id="footer-outer">
                    <div id="bottop">
                        <div class="box box1"> <jdoc:include type="modules" name="position-9" /></div>
                        <div class="box box2"> <jdoc:include type="modules" name="position-10" /></div>
                        <div class="box box3"> <jdoc:include type="modules" name="position-11" /></div>
                    </div>
                    <div id="footer">
                        <jdoc:include type="modules" name="position-14" />
                    </div><!-- end footer -->
                </div><!-- end footer-outer -->
            </div><!-- end wrapper -->

            <jdoc:include type="modules" name="debug" />
        </div><!-- back -->

</div><!-- all -->


</body>
</html>
