<?php if(!defined('KIRBY')) exit ?>


title: Blog

pages: true
    sortable: true
    num: date

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
