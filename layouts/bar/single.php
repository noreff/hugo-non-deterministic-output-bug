{{ define "main" }}
<div>
    <div>
        <?php if ($count) { ?>
        <div>
            <div>
                <div>
                    <?php if (empty($user->mail)) { ?>
                        <a href="/pricing" class="buy-button">Buy</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <h1 class="title">
            <?php echo $query ?> static</h1>
        <div class="description">
            <?php echo $count ?> results</div>
        </div>
    <?php echo $sort_widget ?>
    <div id="content" role="main">
        <div id="main" class="container">
            <!-- begin content -->
            <div class="box">
                <div class="search-results" id="search-results">
                    <?php foreach ($nodes as $node) { echo $node->teaser; } ?>
                </div>
                <?php echo $pager ?>
            </div>
            <!-- end content -->
        </div>
    </div>
    <?php } else { ?>
        <h1 class="title no_results">
            <img src="{{- partial `get_asset.php` `/no-results.svg` -}}"><br>
            Sorry, no results for "<?php echo $query ?>"</h1>
    <?php } ?>
</div>
{{ end }}

{{ define "meta" }}
<title>Search | Website</title>
{{ end }}

{{ define "data_layer" }}
<script>window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({'allowTrigger': 'enable'});
</script>
{{ end }}

{{- define "top_js" -}}
<script src="{{- partial `get_asset.php` `/head_a.min.js` -}}"></script>
{{- end -}}

{{- define "bottom_js" -}}
<?php foreach ($nodes as $node) {
    echo "<script>$node->js </script>";
} ?>
{{- end -}}
