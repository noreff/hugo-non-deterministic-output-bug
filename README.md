## Hugo compiles non deterministic output

This is minimal reproducible example of issue that I encounter while working with HUGO.

Hugo starting from version 0.63.0 start occasionally producing different output when running `hugo` (without changing anything).

See this gif for example:

![Alt Text](hugo_bug.gif)

I split terminal here into 2 parts
Right part of the terminal (one that is separated vertically) is running `watch n1 'ls -al` commands in `public` folder. 
When I'm running `hugo` command you can see how size of the file is changed.
Note that not a single file was changed.
I'm just constantly running `hugo` and receiving different output in `public` folder each time.

## About my use case

I'm using Hugo to generate php files.

## Notes

After many rounds of testing I discover fue things:

- This starts happening in this release - https://github.com/gohugoio/hugo/releases/tag/v0.63.0.
  More specific - after this commit - https://github.com/gohugoio/hugo/commit/c6d650c8c8b22fdc7ddedc1e42a3ca698e1390d6
  
- It's probably related to partial that I use `get_asset.php`. Here it's content is:

```
{{ $stat :=  os.Stat ( printf "/files%v" . ) }}
{{- . -}}?{{- $stat.ModTime.Unix -}}
```

I know about fingerprinting and SRI available, but I'm using this partial because of the reason. 

- This doesn't happen if I don't use `isPlainText = true` in config.toml

```
[outputFormats]
  [outputFormats.PHP]
    mediaType = "application/x-php"
    baseName = "index"
    isPlainText = true
```

- This doesn't happen if I have output formats other than php 
  (If I have php and html layouts and outputs enabled everything works perfect)