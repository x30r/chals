import random

random_num = random.randint(1,100000)
print "Choose a number between 1-100000 to get the flag:"

while True:
       res = input("guess: ")
       if res == random_num:
               print "flag{y0u_g0t_me}"
               break
       else:
               continue
