echo "INSTALL BAHAN DULU COEG :V"
sleep 0.1
pkg upgrade && pkg update
pkg install php
pkg install clang
pkg install python
pkg install python2
pip2 install mechanize
pip2 install bs4
pip2 install beautifulsoup
clear
echo "[!] Memasuki Halaman Login [!]"
sleep 1
php tools.php
