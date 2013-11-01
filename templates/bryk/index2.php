<?php
    /**
    * Template for Joomla by StMarsh
    * @author      StMarsh
    * @copyright   Copyright (c) 2013
    * @license     GNU GPL
    */
    defined('_JEXEC') or die('Restricted access');

// check modules
$showRightColumn	= ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css"/>


    <script type="text/javascript" src="/javascript/jquery-1.6.4.min.js"></script>
    <script src="/javascript/prefixfree.min.js"></script>
    <script type="text/javascript" src="/javascript/flipclock.min.js"></script>

</head>

<body>

<div id="wrap">
    <div id="header" class="Cont12">
        <h1><a href="/"><?php echo $app->getCfg('sitename'); ?></a></h1>
        <div id="headTopR"> <jdoc:include type="modules"  name="position-15" /></div>
        <div class="line"></div>
        <div id="headBot"> <jdoc:include type="modules"  name="position-13" /></div>
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/splash.png" alt="splash" />

    </div> <!-- header -->
    <div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>">
        <?php if ($navposition=='left' and $showleft) : ?>
            <div class="left1 <?php if ($showRightColumn==NULL){ echo 'leftbigger';} ?>" id="nav">
                <jdoc:include type="modules" name="position-7" style="beezDivision" headerLevel="3" />
                <jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
                <jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />
            </div><!-- end navi -->
        <?php endif; ?>

        <div id="<?php echo $showRightColumn ? 'wrapper' : 'wrapper2'; ?>"
            <?php if (isset($showno)){echo 'class="shownocolumns"';}?>>

            <div id="main">

                <?php if ($this->countModules('position-12')): ?>
                    <div id="top"><jdoc:include type="modules" name="position-12"   />
                    </div>
                <?php endif; ?>

                <jdoc:include type="message" />
                <jdoc:include type="component" />

            </div><!-- end main -->

        </div><!-- end wrapper -->

        <?php if ($showRightColumn) : ?>
            <h2 class="unseen">
                <?php echo JText::_('TPL_BEEZ2_ADDITIONAL_INFORMATION'); ?>
            </h2>
            <div id="close">
                <a href="#" onclick="auf('right')">
                    <span id="bild"><?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE'); ?></span>
                </a>
            </div>
            <div id="right">
                <a id="additional"></a>
                <jdoc:include type="modules" name="position-6" style="beezDivision" headerLevel="3"/>
                <jdoc:include type="modules" name="position-8" style="beezDivision" headerLevel="3"  />
                <jdoc:include type="modules" name="position-3" style="beezDivision" headerLevel="3"  />
            </div><!-- end right -->
        <?php endif; ?>

        <?php if ($navposition=='center' and $showleft) : ?>

            <div class="left <?php if ($showRightColumn==NULL){ echo 'leftbigger';} ?>" id="nav" >

                <jdoc:include type="modules" name="position-7"  style="beezDivision" headerLevel="3" />
                <jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
                <jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />


            </div><!-- end navi -->
        <?php endif; ?>
        <?php if ($this->countModules('position-9')): ?>
            <div class="box box1"> <jdoc:include type="modules" name="position-9" /></div>
        <?php endif; ?>
        <?php if ($this->countModules('position-10')): ?>
            <div class="box box2"> <jdoc:include type="modules" name="position-10" /></div>
        <?php endif; ?>
        <?php if ($this->countModules('position-11')): ?>
            <div class="box box2"> <jdoc:include type="modules" name="position-11" /></div>
        <?php endif ; ?>
    </div> <!-- end contentarea -->
    <div id="footer">
        <jdoc:include type="modules"  name="position-14" />
    </div> <!-- #footer -->
    <jdoc:include type="modules"  name="debug" />
</div> <!-- #wrapper -->
</body>
</html>

