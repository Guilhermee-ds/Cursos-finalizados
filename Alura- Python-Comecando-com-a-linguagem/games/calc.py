num1 = int(input("Enter the first number: "))
num2 = int(input("Enter the two number: "))

calc = int(
    input(
        "Select the operation in number\n (1)Addition\n (2)Subtraction\n (3)Multiplication\n (4)Division\n Select one opction: "
    )
)


if calc == 1:
    result = num1 + num2

elif calc == 2:
    result = num1 - num2

elif calc == 3:
    result = num1 * num2

else:
    result = num1 / num2

print(f"The result of is {result}")
