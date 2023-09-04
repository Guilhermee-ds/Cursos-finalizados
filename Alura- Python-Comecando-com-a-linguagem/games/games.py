import forca
import divination

print("-" * 100)
print("Select the game to play")
print("-" * 100)

print("(1) forca\n(2) divination\n")

game = int(input("what game:"))

if game == 1:
    print("Gaming forca")
    forca.game()
elif game == 2:
    print("Gaming divination")
    divination.game()
