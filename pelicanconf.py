#!/usr/bin/env python
# -*- coding: utf-8 -*- #
import os

AUTHOR = u"Montréal-Python"
SITENAME = u"Montréal-Python"
SITEURL = ''

TIMEZONE = 'America/Montreal'

DEFAULT_LANG = 'en'
MARKUP = ('rst', 'md', 'html')

SITEURL = os.path.dirname(__file__)
FEED_DOMAIN = 'http://montrealpython.org'
#PAGE_URL = '{slug}.html'

# Blogroll
LINKS =  (('Python.org', 'http://python.org'), )

# Social widget
SOCIAL = (('twitter', 'https://twitter.com/mtlpy'),
          ('github', 'https://github.com/mtlpy'))

DEFAULT_PAGINATION = 10

THEME = 'themes/mtlpy'

RELATIVE_URLS = False
