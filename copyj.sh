#!/bin/bash
cd mydir
mv input.txt input.java
javac input.java 2> output.txt
if [ ! -s output.txt ]
then
	foo=$(cat /opt/lampp/htdocs/class.txt)
	javac input.java
	java $foo > output.txt
fi
cp output.txt /opt/lampp/htdocs/IDE
mv input.java input.txt
