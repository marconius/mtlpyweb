#!/usr/bin/env python
# -*- coding: utf-8 -*- #
import os

AUTHOR = u"Montréal-Python"
SITENAME = u"Montréal-Python"

TIMEZONE = 'America/Montreal'

DEFAULT_LANG = 'en'

MARKUP = ('rst', 'md', 'html')

SITEURL = 'http://localhost:8888/mtlpyweb/output'
FEED_DOMAIN = 'http://montrealpython.org'
STATIC_URL = 'http://localhost:8888/theme'

# Blogroll
LINKS =  (('Python.org', 'http://python.org'), )

# Social widget
SOCIAL = (('twitter', 'https://twitter.com/mtlpy'),
          ('github', 'https://github.com/mtlpy'))

DEFAULT_PAGINATION = 10

THEME = 'themes/mtlpy'
THEME_STATIC_PATHS = (['static'])

DELETE_OUTPUT_DIRECTORY = False
RELATIVE_URLS = False

TEMPLATE_PAGES = {'styleguide.html': 'styleguide.html' }

ARTICLE_URL = '{lang}/{date:%Y}/{date:%m}/{date:%d}/{slug}/'
ARTICLE_SAVE_AS = '{lang}/{date:%Y}/{date:%m}/{date:%d}/{slug}/index.html'
ARTICLE_LANG_SAVE_AS = '{lang}/{date:%Y}/{date:%m}/{date:%d}/{slug}/index.html'

PAGE_URL = '{slug}/index.html'
TEMPLATE_PAGES = {'styleguide.html': 'styleguide.html',
                  'about.html': 'about.html'}
