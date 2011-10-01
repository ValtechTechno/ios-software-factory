#!/bin/bash
#
# git-github-repo-setup.bash was written by Claude Falguiere
#
# Usage:
# git-github-repo-setup.bash
#
# Description
# init a repo for the XCode app
#

# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#  edit  YOUR_APP_NAME YOUR_REPO YOUR_NAME YOUR_EMAIL

APP_NAME=YOUR_APP_NAME
REPO_NAME=git@YOUR_REPO.git

git config --global user.name "YOUR_NAME"
git config --global user.email "YOUR_EMAIL"

# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++

#mkdir SoftShakeDemo # created by XCode
cd $APP_NAME
git init
cp ../.gitignore .
touch README
git add README
git commit -m 'first commit'
git remote add origin ${REPO_NAME}
git push -u origin master
