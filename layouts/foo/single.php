{{ define "main" }}
<div class="maincontent" id="maincontent">
    <div id="content" role="main">
        <div id="main">
            <!-- begin content -->
            <div class="node">
                <div class="content">
                    <div class="section-content">
                        <div class="browse-tabs">
                            <div class="tab-title active">first</div>
                            <div class="tab-title">second</div>
                            <div class="tab-title">third</div>
                        </div>
                        <div>
                            <div class="tab-content" id="browse-latest" style="display: block;">
                                <div class="image-container"><img src="{{ partial `get_asset.php` `/images/1.gif` }} 2x" alt="alt"><h3><a href="/link4" title="title">Text</a></h3></div>
                                <div class="image-container"><img src="{{ partial `get_asset.php` `/images/2.gif` }}" srcset="{{ partial `get_asset.php` `/images/2.gif` }} 2x" alt="alt"><h3><a href="/link1" title="title">Text</a></h3></div>
                                <div class="image-container"><img src="{{ partial `get_asset.php` `/images/3.gif` }}" srcset="{{ partial `get_asset.php` `/images/3.gif` }} 2x" alt="alt"><h3><a href="/link2" title="title">Text</a></h3></div>
                                <div class="image-container"><img src="{{ partial `get_asset.php` `/images/4.gif` }}" srcset="{{ partial `get_asset.php` `/images/4.gif` }} 2x" alt="alt"><h3><a href="/link3" title="title">Text</a></h3></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="section-content">
                            <div><span class="fact-number users"><?php echo $count_users ?></span>Registered Users</div>
                            <div><span class="fact-number elements"><?php echo $count_elements ?></span>Number of elements</div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
</div>
{{ end }}

{{ define "meta" }}
<title>Some title FOO</title>
<meta name="description" content="description" />
<meta property="og:title" content="title" />
<meta property="og:description" content="description" />
<meta name="keywords" content="keywords" />
{{ end }}

{{- define "top_js" -}}
<link rel="image_src" href="{{- partial `get_asset.php` `/logo.gif` -}}" />
{{- end -}}

{{ define "data_layer" }}
<script>window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({'allowTrigger': 'enable'});
</script>
{{ end }}

{{ define "bottom_js" }}
<script>
    function some_script() {
        $j('.some-class').hide();
        $j('.some-other-class').show();
    }
</script>
{{ end }}