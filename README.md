# String Sorter

## Description
String Sorter is a PHP application designed to sort input strings using various sorting strategies, including Bubble Sort, Merge Sort, and Quick Sort.

## Requirements
1. **Sorting Functionality:**
    - Given an input string, the application should produce the sorted output.
      - **Example:**
        - Input: `ecbda`
        - Output: `abcde`

2. **User Interface:**
    - The user interface includes the following components:
        - Input text box for user input.
        - Select box to choose a sorting strategy (Bubble Sort, Merge Sort, Quick Sort).
        - Button to initiate the sorting process.
        - Output label to display the sorted result.

3. **Design Patterns:**
    - Implemented design patterns:
        - **Strategy Pattern:** Different sorting algorithms are encapsulated as strategies, making them interchangeable.
        - **MVC Pattern:** The application follows the Model-View-Controller (MVC) pattern without relying on any framework.

4. **Development Practices:**
    - The code adheres to best development practices, including validation checks to ensure data integrity and security.

5. **Automated Testing (Optional):**
    - Automated tests are available to verify the functionality of individual sorting algorithms.
      - To run tests, navigate to the `/test` folder and execute the following commands:
        - `cd /test`
        - `php BubbleSort.php`
        - `php MergeSort.php`
        - `php QuickSort.php`

## Usage
1. Clone the repository to your local machine.
2. Open the application in a PHP-supported environment.
3. Use the provided user interface to enter an input string and select a sorting strategy.
4. Click the sort button to view the sorted output.

## Testing
To run automated tests for individual sorting algorithms, follow these steps:
```bash
cd /test
php BubbleSort.php
php MergeSort.php
php QuickSort.php
