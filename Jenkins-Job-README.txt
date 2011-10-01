===================
Prerequisites
===================
Jenkins (CI Tool)

Jenkins Plugins :
- Static Code Analysis Plug-ins
- Clang Scan-Build Plugin
- Git Plugin
- Jenkins promoted builds plugin
- Task Scanner Plugin
- Warnings Plugin

External tools
- checker (clang-analyzer) : clang output parser  (version 255)
- ocunit2junit.rb : OCUnit output parser

Checker can be found at http://clang-analyzer.llvm.org/index.html
You can find a handly checker installer at https://gist.github.com/866297
You must add clang-analyzer to the Jenkins system configuration

OCUnit2JUnit can be downloaded at https://github.com/ciryon/OCUnit2JUnit/blob/master/ocunit2junit.rb


===================
Configuration
===================

A sample job is provided.
Copy the sample-jenkins-job directory into the job directory of jenkins. You may have to restart Jenkins.
For instance
---
ll ../../CIServer/jenkins/jobs/
total 0
drwxr-xr-x@  4 cfalguiere  staff   136  1 oct 11:31 ./
drwxr-xr-x@ 31 cfalguiere  staff  1054  1 oct 11:32 ../
drwx------  10 cfalguiere  staff   340  1 oct 10:37 SoftShakeDemo/
drwx------  10 cfalguiere  staff   340  1 oct 11:35 sample-jenkins-job/
---
The sample load downloads and build the SoftShakeDemo. The demo includes the builder scripts.


The sample job is configured to run ocunit2junit from a tools directory next to the jenkins dir.
Copy ocunit2junit.rb into the tools directory or change the location in the job.

ll CIServer/
total 74760
drwxr-xr-x@  8 cfalguiere  staff       272 30 sep 19:55 ./
drwx------  14 cfalguiere  staff       476  1 oct 11:21 ../
-rw-r--r--@  1 cfalguiere  staff      6148 26 sep 18:05 .DS_Store
drwxr-xr-x@ 31 cfalguiere  staff      1054  1 oct 11:32 jenkins/
-rwxr-xr-x   1 cfalguiere  staff       203 30 sep 19:55 jenkins.sh*
-rw-r--r--@  1 cfalguiere  staff  38260672 21 sep 09:00 jenkins.war
-rwx------   1 cfalguiere  staff       121 30 sep 11:25 setenv.sh*
drwxr-xr-x   5 cfalguiere  staff       170 26 sep 19:03 tools/





