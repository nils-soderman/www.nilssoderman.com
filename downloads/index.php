<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - Resources</title>
  <meta name="description" content="A collection of free resources. Containing Rigs, Scripts, Plugins & more.">
  <meta name="keywords" content="downloads, free, minecraft, blender, rig, software, animation, tool, tools, addon, script">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  <link rel="stylesheet" href="./../resources/css/pages/downloads/downloads.min.css" media="print" onload="this.media='all'">

  <script src="../resources/scripts/pages/downloads/downloads-index.min.js" async></script>
</head>

<body>
  <?php include('./../resources/includes/header.html'); ?>

  <div id="content">
    <div id="loading">Loading . . .</div>
    <div id="page-content" hidden>

      <h3 id="filter-header">Filter:</h3>
      <div id="filter">
        <input id="search-filter" oninput="Filter()" placeholder="Search..." />
        <h4>Categories:</h4>
        <div id="tags">
        </div>
      </div>

      <div id="dl-items">
        <div id="no-results" hidden>No search results found.</div>
      </div>

    </div>
  </div>

  <?php include('./../resources/includes/footer.html'); ?>

</body>

</html>

