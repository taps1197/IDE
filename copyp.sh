#!/bin/bash
cd mydir
mv input.txt input.py
python3 input.py 2> output.txt
if [ ! -s output.txt ]
then
	python3 input.py > output.txt
fi
cp output.txt /opt/lampp/htdocs/IDE
touch ll.txt
