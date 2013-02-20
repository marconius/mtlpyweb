mtlpyweb
========

[Montréal-Python Website](http://montrealpython.org)

using [Pelican](http://docs.getpelican.com/en/3.0/) to generate the static pages.

Install
-------


cd <path-to-mtlpyweb>/mtlpyweb

virtualenv .

source bin/activate

python setup.py develop


Generate HTML content
---------------------


cd <path-to-mtlpyweb>/mtlpyweb

make html


Theme
-----

We stole this theme from [pelican-svbtle](https://github.com/wting/pelican-svbtle).

How to import from the wordpress file
-------------------------------------
`mtlpyweb-wordpress -o data/ -m markdown backup.xml`

This code will create a folder with all the blog post in markdown. On Mac OS X, run
the following:

`mtlpyweb-wordpress -o data/ -m markdown_strict backup.xml`

### Requirements for input file

* [Pandoc](http://johnmacfarlane.net/pandoc/) The mac os X package works, or the version in ubuntu
