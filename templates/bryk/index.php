<?php
    /**
    * Template for Joomla by StMarsh
    * @author      StMarsh
    * @copyright   Copyright (c) 2013
    * @license     GNU GPL
    */
    defined('_JEXEC') or die('Restricted access');
    JHtml::_('behavior.framework', true);
    $app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

    <jdoc:include type="head" />

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
        <div id="headTopR"> <jdoc:include type="modules"  name="position-15" style="horz" /></div>
        <div class="line"></div>
        <div id="headBot"> <jdoc:include type="modules"  name="position-13" /></div>
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/splash.png" alt="splash" />

    </div> <!-- header -->
    <div id="content">
        <div id="home">
            <div><jdoc:include type="modules"  name="position-2" /></div>
            <jdoc:include type="component" />
            <jdoc:include type="message" />

        </div>
        <div id="bottom">
            <?php if ($this->countModules('position-9')): ?>
                <div class="box box1"> <jdoc:include type="modules" name="position-9" /></div>
            <?php endif; ?>
            <?php if ($this->countModules('position-10')): ?>
                <div class="box box2"> <jdoc:include type="modules" name="position-10" /></div>
            <?php endif; ?>
            <?php if ($this->countModules('position-11')): ?>
                <div class="box box3">
                    {mosmap width=’500′|height=’400′|lat=’49.4260'|lon=’32.0948′|zoom=’10′| zoomType=’Large’|zoomNew=’1′|mapType=’Normal’| showMaptype=’1′|overview=’0′|text=’Черкассы’|lang=»}
                </div>
            <?php endif ; ?>
        </div>
    </div> <!-- content -->
    <div id="footer">
        <jdoc:include type="modules"  name="position-14" />
    </div> <!-- #footer -->
    <jdoc:include type="modules"  name="debug" />
</div> <!-- #wrapper -->
</body>
</html>