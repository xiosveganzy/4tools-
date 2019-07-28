import os


b="\033[0;34m"
g="\033[1;32m"
w="\033[1;37m"
r="\033[1;31m"
y="\033[1;33m"
cyan = "\033[0;36m"
lgray = "\033[0;37m"
dgray = "\033[1;30m"
ir = "\033[0;101m"
reset = "\033[0m"

def main():
  os.system('clear')
print "==========================".format(r)
print "| Author : Mr.Y0uKn0wM3  |".format(r)
print "| Content : 4 Tools      |".format(r)
print "| Updated at 2019-07-28  |".format(r)
print "==========================".format(r)

print ""

print "==== M E N U ====".format(w)
print ""
print "1) SQL MAP".format(r, w)
print "2 DDOS HAMMER".format(r, w)
print "3) DDOS XERXES".format(r, w)
print "4) Hack CCTV".format(r, w)
print "00) Exit".format(r, w)
print "=================".format(w)
print ""
select = input("\033[1;31m[ \033[1;37mSelect@Number \033[1;31m]\033[1;37m> ")
filtering(select)

def filtering(pilih):
  if pilih == 1:
    sqlmap()
    
   elif pilih == 2:
    hammer()
    
    elif pilih == 3:
      xerxes()
      
      elif pilih == 4:
        cctv()
        
        elif pilih == 00:
          
