import os

# Function to append text at the beginning of a PHP file
def append_text_to_php_file(file_path, text_to_append):
    with open(file_path, 'r') as file:
        content = file.read()
    
    with open(file_path, 'w') as file:
        file.write(text_to_append + content)

# Main function to process all PHP files in a folder
def process_php_files_in_folder(folder_path, text_to_append):
    for filename in os.listdir(folder_path):
        if filename.endswith('.php'):
            file_path = os.path.join(folder_path, filename)
            append_text_to_php_file(file_path, text_to_append)

if __name__ == "__main__":
    folder_path = "C:\\xampp\\htdocs\\Project-Mentor-master\\views"  # Replace with the actual folder path
    text_to_append = '''<?php
include '../layout/header.php';
?>'''
    
    process_php_files_in_folder(folder_path, text_to_append)