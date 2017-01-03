#!/bin/bash
cc=/usr/bin/gcc
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=/usr/bin/g++
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=/usr/bin/python2
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=/usr/bin/javac
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi

cc=/usr/bin/jar
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi


cc=/usr/bin/php
if [ ! -x "$cc" ]; then
    echo "$cc not found or it's not executable"
    exit 47
fi



echo "Dependencies Satisfied"

exit 0;
