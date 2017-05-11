<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages: true
    template: blog
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
