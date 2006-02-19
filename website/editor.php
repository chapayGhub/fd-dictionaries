<?php
 include_once 'inc/gettext.php';
 include_once 'inc/links.php'
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title><?php echo _('FreeDict-Editor') ?></title>
 <META http-equiv="Content-Type" content="text/html;charset=utf-8">
 <link rel="stylesheet" type="text/css" href="<?php echo fdict_url('s.css') ?>">
</head>

<body>

<h1>FreeDict-Editor</h1>

<div style="float:right"><a href="http://xmlsoft.org/"><img
  src="<?php echo fdict_url('images/Libxml2-Logo-180x168.gif') ?>" alt="libxml2" border=0 hspace=10></a></div>

<p><?php printf(_("The %sdocumentation%s coming with this application includes the list
of features in the %sintroduction%s."), '<a href="editordoc.html">', '</a>',
'<a href="editordoc.html#freedict-editor-introduction">', '</a>') ?></p>

<p><?php printf(_("No release of the FreeDict-Editor has been made yet.
You can do an anonymous check out the <tt>freedict-editor</tt>
module from %sCVS%s and try compiling it yourself:"),
'<a href="http://sourceforge.net/cvs/?group_id=1419">', '</a>') ?></p>

<blockquote cite="http://sourceforge.net/cvs/?group_id=1419"><small><tt>cvs -d:pserver:anonymous@cvs.sourceforge.net:/cvsroot/freedict login<br>
cvs -z3 -d:pserver:anonymous@cvs.sourceforge.net:/cvsroot/freedict co -P freedict-editor</tt></small></blockquote>

<p><?php printf(_("For the %srequirements%s, please also refer to the documentation."),
  '<a href="editordoc.html#freedict-editor-requirements">', '</a>') ?></p>

<p><?php printf(_("If you use %sDebian%s unstable, you can add this to your %s:"),
  '<a href="http://debian.org/">', '</a>', '<tt>/etc/apt/sources.list</tt>') ?></p>

<blockquote><small><tt>deb <a href="http://freedict.org/debian-repository">http://freedict.org/debian-repository</a> binary/<br>
deb-src <a href="http://freedict.org/debian-repository">http://freedict.org/debian-repository</a> source/</tt></small></blockquote>
