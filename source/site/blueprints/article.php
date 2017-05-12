<?php if(!defined('KIRBY')) exit ?>

title: Article

files: true

pages: false

fields:
  title:
    label: Title
    type:  title

  coverimage:
    label: Cover Image
    type: image
    width: 1/2

  date:
    icon: calendar
    label: Date
    type: date
    format: LL
    placeholder: Select a date…
    default: today
    required: true
    width: 1/2

  text:
    label: Text
    type: textarea
