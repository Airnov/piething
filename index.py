import math

def calculate_pi(iterations):
    pi = 0
    sign = 1
    for i in range(1, iterations + 1):
        term = 2 * i - 1
        pi += sign * (4 / term)
        sign *= -1
    return pi
def main():
    iterations = 1
    while True:
        print(f"Current value of PI after {iterations} iterations: {calculate_pi(iterations)}")
        choice = input("Enter the number of iterations (0 to quit): ")
        if choice.isdigit():
            iterations = int(choice)
            
            if iterations == 0:
                break
        else:
            print("Invalid input. Please enter a positive integer or 0 to quit.")
if __name__ == "__main__":
    main()

