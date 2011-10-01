Prerequisites
- rake
- gems : plist, json (check rakefile.rb)


Copy the builder dir content at the root of your XCode project
For instance
---
ll SoftShakeDemo/
total 72
...
drwxr-xr-x  11 cfalguiere  staff   374 30 sep 23:11 SoftShakeDemo/
drwxr-xr-x   5 cfalguiere  staff   170 30 sep 21:54 SoftShakeDemo.xcodeproj/
drwxr-xr-x   6 cfalguiere  staff   204 30 sep 19:33 SoftShakeDemoTests/
drwx------   7 cfalguiere  staff   238 30 sep 23:33 SoftwareFactory/
-rwx------   1 cfalguiere  staff  1533 30 sep 22:46 push.bash*
-rw-r--r--   1 cfalguiere  staff  4877 30 sep 23:25 rakefile.rb
---

Create a provisioning profile at Apple Developer Center and download the certificate.
Replace SoftwareFactory/MY_PROFILE.mobileprovision with you own
For instance : SoftShakeDemo.mobileprovision


Setup your project and provisioning profile in SoftwareFactory/config.yaml
For instance
---
cat SoftwareFactory/config.yaml
# edit application name
app_name: 'SoftShakeDemo'

# edit provisioning profile name
provisioning_profile: 'SoftShakeDemo'
...
---

check rake -T for available tasks

