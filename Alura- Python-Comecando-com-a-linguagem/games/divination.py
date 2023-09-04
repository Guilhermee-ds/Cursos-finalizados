import random


def game():
    print("-" * 100)
    print("Welcome to game divination!")
    print("-" * 100)

    # number secret
    number_secret = round(random.randrange(1, 101))
    total_try = 0
    points = 1000

    print("what level of dificuldate?", number_secret)
    print("(1) easy\n(2) medium\n(3) Hard\n")

    # define one level of dificuldate
    nivel = int(input("set a level:"))
    if nivel == 1:
        total_try = 20
    elif nivel == 2:
        total_try = 10
    else:
        total_try = 5

    for rd in range(1, total_try + 1):
        print("Try:{} of {}".format(rd, total_try))  # string intapulation
        # colect my number
        my_number = int(input("Enter your number: "))

        # print my number
        print("You enter", my_number)

        if my_number < 1 or my_number > 100:
            print("Please enter number large 1")
            continue

        # condition
        right = my_number == number_secret
        larger = my_number > number_secret
        lower = my_number < number_secret

        if right:
            print(
                "you got the number right", number_secret, "and get", points, " pontos"
            )
            break
        else:
            if larger:
                print("your number is larger than the secret number")
            elif lower:
                print("your number is lower than the secret number")
                print("number incorrect")
            points_lost = abs(number_secret - my_number)  # - calculate points
            points = points - points_lost

    print("End-Game")
    print("number correct is", number_secret)


if __name__ == "__main__":  # execute  file
    game()
