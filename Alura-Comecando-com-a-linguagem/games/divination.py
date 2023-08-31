print("-" *100)
print("Welcome to game divination!")
print("-" *100)


#number secret
number_secret = 42

#colect my number
my_number = (int(input("Enter your number: ")))

#print my number
print("You enter", my_number)


#condition
right = my_number == number_secret
larger = my_number > number_secret
lower = my_number < number_secret

if (right):
    print("you got the number right", number_secret)
else:
    if (larger):
        print("your number is larger than the secret number")
    elif (lower):
        print("your number is lower than the secret number")
        print("number incorrect")

print("End-Game")