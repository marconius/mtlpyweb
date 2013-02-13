mtlpyweb
========

[Montréal-Python Website](http://montrealpython.org)

using [Pelican](http://docs.getpelican.com/en/3.0/) to generate the static pages. 


How to import from the wordpress file
-------------------------------------
First install the project using either setup
`apt-get install pandoc`

`python setup.py develop`
or by buildout
`python bootstrap.py`

`mtlpyweb-wordpress --wpfile  -o data/ -m markdown backup.xml`

This code will create a folder with all the blog post in markdown

How to generate html files
--------------------------
`make html`
