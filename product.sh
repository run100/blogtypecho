#!/bin/bash
  
/usr/bin/git pull origin master
chown -R www:www /home/www/blogtypecho                                                                                                              
/usr/bin/git push
