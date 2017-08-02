 # down
 # rsync -av --progress --rsh='ssh -p 987' --exclude='error_log' piter@pedro2.data99.com.ar:/home/piter/www/ ./

 # up
 rsync -av --progress --rsh='ssh -p 987' \
    --exclude='.git' \
    ./ piter@pedro2.data99.com.ar:/home/piter/www/
