{{ define "main" }}
BLOCK: main foo
{{ end }}

{{ define "meta" }}
BLOCK: meta foo
{{ end }}

{{- define "top_js" -}}
BLOCK: top_js foo
{{- end -}}

{{ define "data_layer" }}
BLOCK: data_layer foo
{{ end }}

{{ define "bottom_js" }}
BLOCK: bottom_js foo
{{ end }}
