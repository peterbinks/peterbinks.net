<?php if(!defined('KIRBY')) exit ?>


title: Blog

pages:
  template: article
  sort: flip
  num: date

options:
  template: false
  status: false

icon: newspaper-o

files: true

fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
