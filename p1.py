import os

# Check if a path is a directory
path = '/xampp/htdocs/phpprg'
if os.path.isdir(path):
    print(f"{path} is a directory.")
else:
    print(f"{path} is not a directory.")
