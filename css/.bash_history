ls
ls -a
ssh-keygen -t rsa -b 4096
ls
ls -a
rm -rf vitya*
ssh-keygen -t rsa -b 4096
ls
cd .ssh/
ls -l
cat vitya.pem.pub > authorized_keys
ls -l
chmod 600 authorized_keys 
vim authorized_keys 
exit
history 
exit
