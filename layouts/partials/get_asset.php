{{ $stat :=  os.Stat ( printf "/files%v" . ) }}
{{- . -}}?{{- $stat.ModTime.Unix -}}