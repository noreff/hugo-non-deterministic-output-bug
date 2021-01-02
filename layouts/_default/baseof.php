<?php
# Grab data used on every page from PHP
global $user;
$dynamic_data = json_encode(drupal_dynamic_data());
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    {{- block "meta" . -}}{{- end -}}
    <script type="application/javascript">var dynamic_data = <?php echo $dynamic_data ?></script>
    <script src="{{- partial `get_asset.php` `/head.min.js` -}}"></script>
    {{ block "data_layer" . }}{{ end }}
    <link rel="canonical" href="<?php echo get_current_page_url() ?>" />
    <meta property="og:url" content="<?php echo get_current_page_url() ?>" />
    {{ block "top_js" . }}{{ end }}
    <link rel="stylesheet" href="{{- partial `get_asset.php` `/head.min.css` -}}" type="text/css">        <!-- end -->
</head>
<body>
<div id="container">
    <!-- header,  including menu -->
    <div id="header-wrapper">

        <!-- logo/search -->
        <div class="header">
            <div class="logo">
                <a href="/"><img
                            src='{{- partial `get_asset.php` `/logo.svg` -}}'
                            alt="Logo"></a>
            </div>
            <div class="search" id="search">
                <form action="/search/" method="post" autocomplete="off">
                    <div>
                        <div class="search-input">
                            <div class="form-item">
                                <input type="text" maxlength="128" name="edit[keys]" size="15" value="" class="form-text form-autocomplete"  />
                            </div>
                            <input type="submit" name="op" value="Search"  class="form-submit" />
                        </div>
                    </div>
                </form>
            </div>
            {{ partial "navigation.php" . }}
        </div>
    </div>
    {{ block "main" . }}{{ end }}
    {{ partial "footer.php" . }}
    {{ block "bottom_js" . }}{{ end }}
</body>
</html>