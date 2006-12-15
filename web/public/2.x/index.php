<html>
<head>
<title>java-gnome 2.x</title>
<link rel="stylesheet" href="/web.css" type="text/css">
<style>
div.box {
	background-color: #DDDDDD;
	padding: 15px;
	border: dashed 3px orange;
	margin-left: 100px;
	margin-right: 100px;
	font-size: x-large;
}
.mono {
	font-family: "Bitstream Vera Sans Mono", "Monospaced", "Courier New", mono;
}
.x {
	font-style: italic;
	font-family: "Times New Roman", Serif;
}
</style>
</head>
<body>
<h1 class="title">java-gnome 2.<span class="x" style="padding-left:4px;">x</span></h1>


<div class="box">
<span class="mono" style="font-size: xx-large; font-weight: bold;">
@deprecated 
</span>
<p>
The java-gnome 2.<span class="x">x</span> series of releases are mature and
stable, but have reached end-of-life and are no longer being developed or
supported by anyone.</p> </div>

<p>The original java-gnome project was written by <b>five</b> successive teams
of hackers from 1998-2006. That's <b>nine</b> years! java-gnome  2.<span
class="x">x</span> is reasonably stable and, for what coverage there is, quite
mature. A number of application use it.</p>

<p>Unfortunately, there has been almost zero new coverage activity over the
past several years and the code that is there is full of cruft, inefficiency,
bugs, and serious memory leaks. The codebase, spread across <b>seven</b>-plus
libraries, was virtually impossible to maintain. The website was hideously out
of date and the quality of examples poor. Worst of all, it was exceedingly
difficult for new people to learn how to contribute to java-gnome 2.<span
class="x">x</span>, and as a result it has largely been abandoned.</p>

<p>Addressing these issues are ultimately the major motivating factors for
having undertaken the re-engineering effort which led to java-gnome 4.0.  This
page is for historical reference and to honour the hard work of the fine team
of contributors, hackers, and maintainers who wrote the first generations of
the Java bindings for GTK and GNOME. We owe them a debt of gratitude for their
hard work.</p>

<h2>Latest Releases</h2>

java-gnome <code>2.16.1</code> is the most recent, and likely last, release of
the <code>2.</code><span class="x">x</span> series. It consists of the
following libraries:

<pre>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/glib-java/0.4/glib-java-0.4.1.tar.bz2">glib-java     0.4.1</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/cairo-java/1.0/cairo-java-1.0.6.tar.bz2">cairo-java    1.0.6</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libgtk-java/2.10/libgtk-java-2.10.1.tar.bz2">libgtk-java   2.10.1</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libglade-java/2.12/libglade-java-2.12.7.tar.bz2">libglade-java 2.12.7</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libgnome-java/2.12/libgnome-java-2.12.6.tar.bz2">libgnome-java 2.12.6</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libgconf-java/2.12/libgconf-java-2.12.5.tar.bz2">libgconf-java 2.12.5</a>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libvte-java/0.12/libvte-java-0.12.2.tar.bz2">libvte-java   0.12.2</a>
</pre>

<p>There is little reason to start a new project in java-gnome 2.<span
class="x">x</span>, but if you have an existing application that uses the old
bindings, the you are advised to upgrade to the latest versions of these
libraries available, as they contain bug fixes of considerable importance.

<p>From this point forward, however, each of the packages making up java-gnome
<code>2.16.1</code> have been declared end-of-life and the APIs used have been
formally deprecated. It is no longer being actively maintained by anyone from
the previous or present java-gnome teams. Contributed patches will only be
applied if they address a serious security vulnerability.</p>

<p>Please note that several other libraries are available in the old java-gnome
family; none of them achieved release quality, were abandoned as early as
java-gnome 2.8, and probably don't build anyway. As such you are strongly
discouraged from trying to use them:</p>

<pre>
	<a style="text-decoration: none;" href="http://ftp.gnome.org/pub/gnome/sources/libeds-java/0.5/libeds-java-0.5.1.tar.bz2">libeds-java   0.5.1</a>
	<a style="text-decoration: none;" href="null://">libbonobo-java</a>
	<a style="text-decoration: none;" href="null://">libgtkhtml-java</a>
	<a style="text-decoration: none;" href="null://">libgtkmozembed-java</a>
	<a style="text-decoration: none;" href="null://">libgnomevfs-java</a>
</pre>

<h2>Migrating existing applications</h2>

<p>There is a complete API break between java-gnome 2.<span class="x">x</span>
and the new java-gnome 4.0 bindings. While the style of coding will be
familiar, packages, classes, method names, and arguments are at times very
different. This was necessary in order to ensure an algorithmic mapping of the 
underlying libraries, something sadly lacking in 2.<span class="x">x</span>.
There are also some wholesale API redesigns, with signal handling in particular
being completely new. Finally, internals that were previously exposed are
no longer publicly visible and not part of the public API.

<p>Also, you might note that unlike the above list of libraries with
inconsistent names, java-gnome 4.0 is shipping at present in <!-- FIXME --> a
single unified source release.</p>

<p>There is a considerable installed base of software written in java-gnome,
but much of it is in-house applications that do not have public open source
code bases. As such there will be little community support forthcoming to help
such people upgrade those applications to the new java-gnome APIs.
Operational Dynamics has considerable expertise in doing such migrations and
would be pleased to talk to you on a commercial basis about porting your
existing code to java-gnome 4.0.</p>

</body>
</html>

<!-- vim: set textwidth=78 -->
