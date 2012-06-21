<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>tadas on pagodabox</title>
  <meta name="description" content="tadas on pagoda box">
  <meta name="author" content="tadas">
<!--  <link rel="stylesheet" href="css/styles.css?v=1.0">-->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
    <h1>'gitflow' flow</h1>

<h2>Links</h2>

<ul>
<li><a href="https://github.com/nvie/gitflow">HOME</a></li>
<li><a href="https://github.com/nvie/gitflow/wiki/Command-Line-Arguments">Command-Line-Arguments</a></li>
<li><a href="http://nvie.com/posts/a-successful-git-branching-model/">A successful Git branching model</a></li>
</ul>

<h2>Init new or convert existing</h2>

<p>$ git flow init <br />
...answer some questions</p>

<h2>Feature</h2>

<p>$ git flow <strong>feature</strong> start <em>FEATURENAME</em> <br />
...will create new branch <em>FEATURENAME</em> from <strong><em>develop</em></strong> branch</p>

<p>$ git flow <strong>feature</strong> finish <em>FEATURENAME</em> <br />
...will merge feature branch with <em>develop</em> branch and delete <em>FEATURENAME</em> branch</p>

<h2>Release</h2>

<p>$ git flow <strong>release</strong> start <em>VERSION</em> <br />
...will create new branch <em>VERSION</em> from <strong><em>develop</em></strong> branch  </p>

<p>$ git flow <strong>release</strong> finish <em>VERSION</em> <br />
...will merge back <em>VERSION</em> branch with <em>develop</em> and <em>master</em> branch <br />
...will mark merge with release TAG <br />
...wil delete <em>VERSION</em> branch</p>

<h2>Hotfix</h2>

<p>$ git flow <strong>hotfix</strong> start <em>FIXNAME</em> <br />
...will create new branch <em>FIXNAME</em> from <strong><em>master</em></strong> branch  </p>

<p>$ git flow <strong>hotfix</strong> finish <em>FIXNAME</em> <br />
...will merge back <em>FIXNAME</em> branch with <em>develop</em> and <em>master</em> branch <br />
...will mark merge with release TAG </p>


<!--  <script src="js/scripts.js"></script>-->
</body>
</html>