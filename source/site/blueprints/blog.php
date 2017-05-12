<?php if(!defined('KIRBY')) exit ?>


title: Blog

pages: true

options:
  template: false

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
