<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: true
    template: blogarticle
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
