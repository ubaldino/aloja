#!/usr/bin/env python2
while 1 :
    t = int( input() )
    if t == 0:
        break
    line = map( int , raw_input().split() )
    s = 0
    for x in range( t ):
        if line[x] >= 1000:
            s += 1
    print s