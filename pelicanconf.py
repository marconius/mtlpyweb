#!/usr/bin/env python
# -*- coding: utf-8 -*- #
import os

AUTHOR = u"Montréal-Python"
SITENAME = u"Montréal-Python"
SITEURL = 'http://localhost:8888'

TIMEZONE = 'America/Montreal'
DEFAULT_LANG = 'en'
LANGUAGES = ['en', 'fr']

MARKUP = ('rst', 'md', 'html')

FEED_DOMAIN = 'http://montrealpython.org'

STATIC_URL = '/theme'

# Blogroll
LINKS =  (('Python.org', 'http://python.org'), )

# Social widget
SOCIAL = (('twitter', 'https://twitter.com/mtlpy'),
          ('github', 'https://github.com/mtlpy'))

SUMMARY_MAX_LENGTH = 25
THEME = 'themes/mtlpy'

DISPLAY_PAGES_ON_MENU = False
DELETE_OUTPUT_DIRECTORY = True
RELATIVE_URLS = True

DIRECT_TEMPLATES = ('index', 'index_fr',
                    'archives', 'archives_fr',
                    'category', 'category_fr')

ARTICLE_URL = ARTICLE_LANG_URL = '{lang}/{date:%Y}/{date:%m}/{date:%d}/{slug}/'
ARTICLE_SAVE_AS = '{lang}/{date:%Y}/{date:%m}/{date:%d}/{slug}/index.html'
ARTICLE_LANG_SAVE_AS = ARTICLE_SAVE_AS

PAGE_URL = PAGE_LANG_URL = '{lang}/{slug}/'
PAGE_SAVE_AS = PAGE_LANG_SAVE_AS = '{lang}/{slug}/index.html'

INDEX_URL = 'en/'
INDEX_FR_URL = 'fr/'
INDEX_SAVE_AS = 'en/index.html'
INDEX_FR_SAVE_AS = 'fr/index.html'

TAG_SAVE_AS = False
