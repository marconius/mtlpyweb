#!/usr/bin/env python
# -*- coding: utf-8 -*-

""" Generate the logos for the sponsors of a particular
Montréal-Python event. """

import os
from pprint import pprint
from argparse import ArgumentParser
from ConfigParser import RawConfigParser

from resize import fixed_scale

CONF = "sponsors.ini"

LOGO_SIZES = dict(gold=[180, 0.66],
                  silver=[150, 0.5],
                  bronze=[140, 0.5],
                  partner=[180, 0.66])
IMG_BASE = "themes/mtlpy/static/img/sponsors/"
TARGET = "themes/mtlpy/static/img/mp-latest/"
LINE_TMPL = """<a title="%(name)s"date href="%(url)s"><img src="%(logo_img)s"></a>"""

BANNER_SIZE = 512
BANNER_TARGET = "themes/mtlpy/static/img/banner-images"


def parse_args():
    parser = ArgumentParser(description=__doc__)
    parser.add_argument("--conf_file", default=CONF,
                        help="configuration to use [%s]" % CONF)
    return parser.parse_args()


def load_config(fname):
    """ Load the sponsors config in .ini format and return the two
    dicts: one for sponsors, one for events. """

    cp = RawConfigParser()
    cp.read(fname)
    sponsors = {}
    events = {}
    partners = {}
    for sect in cp.sections():
        if sect.startswith("sponsor"):
            key = sect.split("-")[-1]
            sponsors[key] = dict(cp.items(sect))
        elif sect.startswith("mp"):
            key = int(sect.split("-")[-1])
            events[key] = dict(cp.items(sect))
        elif sect.startswith("partner"):
            key = sect.split("-")[-1]
            partners[key] = dict(cp.items(sect))
    return partners, sponsors, events


def main():
    args = parse_args()

    partners, sponsors, events = load_config(args.conf_file)

    for dirname in [TARGET, BANNER_TARGET]:
        if not os.path.isdir(dirname):
            os.mkdir(dirname)

    lines = []
    cur = sorted(events.keys())[-1]
    for level in ["gold", "silver", "bronze"]:
        size, ratio = LOGO_SIZES[level]
        if level in events[cur]:
            cur_sponsors = [s.strip() for s in events[cur][level].split(",")]
            for sponsor in cur_sponsors:
                logo = sponsors[sponsor]["logo"]
                url = sponsors[sponsor]["url"]
                name = sponsors[sponsor]["name"]
                logo_img = os.path.join("/partners", logo)
                old_path = os.path.join(IMG_BASE, logo)
                new_path = os.path.join(TARGET, logo)
                fixed_scale(size, size * ratio, old_path, new_path)
                lines.append(LINE_TMPL % locals())
                banner_path = os.path.join(BANNER_TARGET, logo)
                fixed_scale(BANNER_SIZE, BANNER_SIZE * ratio, old_path, banner_path)

    findex = os.path.join(TARGET, "index.html")
    open(findex, "w").write("\n".join(lines))

    lines2 = []
    for level in ["partner"]:
        size, ratio = LOGO_SIZES[level]
        if level in events[cur]:
            cur_partners = [s.strip() for s in events[cur][level].split(",")]
            for partner in cur_partners:
                logo = partners[partner]["logo"]
                url = partners[partner]["url"]
                name = partners[partner]["name"]
                logo_img = os.path.join("/partners", logo)
                old_path = os.path.join(IMG_BASE, logo)
                new_path = os.path.join(TARGET, logo)
                fixed_scale(size, size * ratio, old_path, new_path)
                lines2.append(LINE_TMPL % locals())
                banner_path = os.path.join(BANNER_TARGET, logo)
                fixed_scale(BANNER_SIZE, BANNER_SIZE * ratio, old_path, banner_path)

    findex = os.path.join(TARGET, "partners.html")
    open(findex, "w").write("\n".join(lines2))

if __name__ == '__main__':
    main()
