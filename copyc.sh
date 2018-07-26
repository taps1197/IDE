#!/bin/bash
cd mydir
mv input.txt input.c
g++ input.c 2> output.txt
if [ ! -s output.txt ]
then
	gcc input.c
	./a.out > output.txt
fi
cp output.txt /opt/lampp/htdocs/IDE
touch ll.txt
