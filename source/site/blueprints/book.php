<?php if(!defined('KIRBY')) exit ?>

title: Book
pages: false
  template: page
files: true
fields:
  Title:
    label: Title
    type:  text
  Image:
    label: Cover
    type:  image
  Description:
    label: Description
    type:  textarea
