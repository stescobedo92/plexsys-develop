#!/bin/bash

# define working address
ADDRESS=localhost:8080

# get source dir
SOURCE="${BASH_SOURCE[0]}"
while [ -h "$SOURCE" ]; do # resolve $SOURCE until the file is no longer a symlink
  DIR="$( cd -P "$( dirname "$SOURCE" )" >/dev/null 2>&1 && pwd )"
  SOURCE="$(readlink "$SOURCE")"
  [[ $SOURCE != /* ]] && SOURCE="$DIR/$SOURCE" # if $SOURCE was a relative symlink, we need to resolve it relative to the path where the symlink file was located
done
DIR="$( cd -P "$( dirname "$SOURCE" )" >/dev/null 2>&1 && pwd )"

# start php server
php -S $ADDRESS -t $DIR/web/ &

# get server PID
serverPID=$!

# wait to server compleatly start
sleep 5

# remove build folder content
ls $DIR/build/ | grep -v ".gitignore" | xargs -I {} rm -r "$DIR/build/"{}

# build static site using httrack
httrack -O build/ http://$ADDRESS/

# kill server
kill $serverPID

# copy dynamic scripts
BUILD_SITE_ADDRESS=`echo "$ADDRESS" | tr : _`
cp -R $DIR/web/vendor $DIR/build/$BUILD_SITE_ADDRESS/
cp $DIR/web/composer.json $DIR/build/$BUILD_SITE_ADDRESS/
cp $DIR/web/composer.lock $DIR/build/$BUILD_SITE_ADDRESS/
cp $DIR/web/contact.php $DIR/build/$BUILD_SITE_ADDRESS/
