print("-" *100)
print("Welcome to game divination!")
print("-" *100)


#number secret
number_secret = 42

#colect my number
my_number = (int(input("Enter your number: ")))

#print my number
print("You enter", my_number)

if (number_secret == my_number):
    print("you got the number right", number_secret)
else: 
    print("number incorrect")

print("End-Game")