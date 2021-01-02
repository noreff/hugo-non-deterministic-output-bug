#!/bin/env bash

origsum=`hugo --quiet && sha1sum public/bar/index.php | awk '{print $1}'` && echo origsum=$origsum

i=0
sum=$origsum
while [[ $sum == $origsum ]]; do
  sum=`hugo --quiet && sha1sum public/bar/index.php | awk '{print $1}'` && echo $sum $i && ((i++))
done

