#!/bin/bash

cc=`which gcc`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=`which g++`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=`which python2`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=`which javac`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=`which jar`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi


cc=`which php`
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

echo "Dependencies Satisfied"

exit 0;
