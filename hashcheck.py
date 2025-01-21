import hashlib

# Define the target hash
target_hash = "your_target_hash_here"

# Function to compute SHA-256 hash of a given number
def compute_hash(number):
    # Ensure the number is a 4-digit string
    number_str = f"{number:04}"
    return hashlib.sha256(number_str.encode()).hexdigest()

# Iterate through all 4-digit numbers
for number in range(10000):
    if compute_hash(number) == target_hash:
        print(f"Match found! The number is {number:04}")
        break
else:
    print("No match found.")
