-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 10:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testyourskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin123@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `std_id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`std_id`, `student_name`, `email`, `phone`, `query`) VALUES
(9, 'rohan', 'rohansadhukhan88@gmail.com', 7003459639, 'how to login ?'),
(10, 'rohan', 'a@gmail.com', 12345, 'fgf'),
(11, 'r', 'r@gmail.com', 12345, 'gh'),
(12, 'demo', 'demo@gmail.com', 12345, 'demo'),
(13, 'n', 'n@gmail.com', 12345, 'fg'),
(14, 'n', 'a@gmail.com', 3, 'f'),
(15, 'j', 'D@gmail.com', 3, 'gf'),
(16, 'r', 'r@gmail.com', 12345, 'th'),
(17, 'hg', 'gh@gmail.com', 12345, 't'),
(18, 'Rohan Sadhukhan', 'sadhukhanrohan15@gmail.com', 7003459639, 'Can i take Retest?\r\n'),
(19, 'Sneha Mondal', 'sadhukhanrohan15@gmail.com', 917003459639, 'Can i take Retest?\r\n'),
(20, 'Priya Singh', 'Priya@gmail.com', 5698733659, 'how to login?'),
(21, 'Bijesh Gupta', 'root@gmail.com', 7003459639, 'how to start xam ?'),
(22, 'Bijesh Gupta', 'root@gmail.com', 7003459639, 'how to start xam ?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `experience` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `name`, `email`, `experience`) VALUES
(6, 'Rakesh Ghosh', 'abc@gmail.com', 'The Website is very good for test my skill.'),
(10, 'Rohan Sadhukhan', 'sadhukhanrohan15@gmail.com', 'Awsome !'),
(11, 'sneha mondal', 'sneha@gmail.com', 'my skills are really improved!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `q_id` int(11) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `question` varchar(500) NOT NULL,
  `op1` varchar(200) NOT NULL,
  `op2` varchar(200) NOT NULL,
  `op3` varchar(200) NOT NULL,
  `op4` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`q_id`, `topic`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES
(6, 'Php Mcq Test1', 'What does PHP stand for?????1', 'Personal Home Page', ' Hypertext Preprocessor', ' Both OptionA & OptionB', 'Only OptionB', '3'),
(7, 'Php Mcq Test1', 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', '3'),
(8, 'Php Mcq Test1', 'Can we write html code in php file?', 'Yes', 'No', 'Maybe', 'It depends on the system', '1'),
(9, 'Php Mcq Test1', 'Which of the following is/are a PHP code editor?', 'Notepad', 'Notepad++', 'Adobe Dreamweaver', 'All The Above', '4'),
(10, 'Php Mcq Test1', 'Which of the following must be installed on your computer so as to run PHP script?', 'Adobe Dreamweaver ', ' XAMPP', 'Apache and PHP', 'OptionB & OptionC', '4'),
(11, 'Php Mcq Test1', 'Which version of PHP introduced Try/catch Exception?\r\n', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 and later', '4'),
(12, 'Php Mcq Test1', ' How should we add a single line comment in our PHP code?\r\n', '/?', '//', ' /* */', 'OptionB & OptionC', '4'),
(13, 'Php Mcq Test1', 'Which of the following PHP statement/statements will store 111 in variable num?', 'int $num = 111;', 'int mum = 111;', '$num = 111;', '111 = $num;', '3'),
(14, 'Php Mcq Test1', 'PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', 'server-side scripting', 'Both B and C', '3'),
(15, 'Php Mcq Test1', 'Which of the following is the latest version of php?', ' 7.1', ' 7.2', ' 7.3', '8.0', '4'),
(16, 'Php Mcq Test2', ' Which is the right way of declaring a variable in PHP?', ' $3hello', '$_hello', '$This', 'OptionB & OptionC', '4'),
(17, 'Php Mcq Test2', 'Which of the following PHP statements will output Hello World on the screen?', 'echo (\"Hello World\");', 'print (\"Hello World\");', 'printf (\"Hello World\");', 'All The Above', '4'),
(18, 'Php Mcq Test2', 'Who is known as the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', '1'),
(19, 'Php Mcq Test2', 'Which of the following is not true?', 'PHP can be used to develop web applications.', 'PHP makes a website dynamic', 'PHP applications can not be compile', 'PHP can not be embedded into html.', '4'),
(20, 'Php Mcq Test2', 'Which of the following function returns the number of characters in a string variable?', 'count($variable)', 'len($variable)', 'strcount($variable)', 'strlen($variable)', '4'),
(21, 'Php Mcq Test2', 'Which of the below statements is equivalent to $add += $add?', ' $add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', '2'),
(22, 'Php Mcq Test2', 'Which statement will output $x on the screen?', 'echo “$x”;', 'echo “$$x”;', 'echo “/$x”;', 'echo “$x;”;', '1'),
(23, 'Php Mcq Test2', 'Which of the following function returns a text in title case from a variable?', 'ucwords($var)', 'upper($var)', 'toupper($var)', 'ucword($var)', '1'),
(24, 'Php Mcq Test2', 'Which of the following method sends input to a script via a URL?', 'Get', 'Post', 'Both', 'None', '1'),
(25, 'Php Mcq Test2', 'When you need to obtain the ASCII value of a character which of the following function you apply in PHP?', 'chr( );', 'asc( );', 'ord( );', 'val( );', '3'),
(28, 'Php Mcq Test3', 'Which of the conditional statements is/are supported by PHP?', 'if statements', 'if-else statements', 'if-elseif statements', 'All The Above', '4'),
(29, 'Php Mcq Test3', ' Which of the looping statements is/are supported by PHP?', 'for loop', 'do-while loop', 'foreach loop', 'All The Above', '4'),
(30, 'Php Mcq Test3', 'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?\r\n', '12', '1', 'Error', '5', '4'),
(31, 'Php Mcq Test3', 'Who is the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', '1'),
(32, 'Php Mcq Test3', 'Which of the following type of variables are named and indexed collections of other values', ' Strings', 'Array', ' Objects', ' Resources', '2'),
(33, 'Php Mcq Test3', 'Which of the following is correct about NULL?', 'NULL is a special type that only has one value: NULL.', 'The special constant NULL is capitalized by convention, but actually it is case insensitive.', 'Both of the above.', 'None of the above.', '3'),
(34, 'Php Mcq Test3', 'PHP recognizes constructors by the name _________\r\n', 'classname()', ' _construct()', 'function _construct()', 'function __construct()', '4'),
(35, 'Php Mcq Test3', 'Which one of the following property scopes is not supported by PHP?', 'friendly', 'final', 'public', 'static', '1'),
(36, 'Php Mcq Test3', 'Which one of the following functions is used to determine whether a class exists?\r\n', 'exist()', 'exist_class()', 'class_exist()', '__exist()', '3'),
(37, 'Php Mcq Test3', 'Which keyword is used to refer to properties or methods within the class itself?', 'private', 'public', 'protected', '$this', '4'),
(38, 'C Mcq Test1', 'Who invented C Language.?', 'Charles Babbage', 'Grahambel', 'Dennis Ritchie', 'Steve Jobs', '3'),
(39, 'C Mcq Test1', 'C Language is a successor to which language.?', 'FORTRAN', ' D Language', 'BASIC', 'B Language', '4'),
(40, 'C Mcq Test1', ' C is a which level language.?', 'Low Level', 'High Level', 'Low + High', 'None', '2'),
(41, 'C Mcq Test1', 'Low level language is .?', 'Human readable like language.', 'language with big program size.', 'language with small program size.', 'Difficult to understand and readability is questionable.', '4'),
(42, 'C Mcq Test1', ' High level language is a .?', 'Human readable like language.', 'language with small program size.', 'language with big program size.', 'language which is difficult to understand and not human readable.', '1'),
(43, 'C Mcq Test1', 'What is required in each C program?', 'The program must have at least one function.', 'The program does not require any function.', 'Input data', 'Output data', '1'),
(44, 'C Mcq Test1', 'C is _______ type of programming language.?', 'Object Oriented', 'Procedural', 'Bit level language', 'Functional', '2'),
(45, 'C Mcq Test1', 'What is the present C Language Standard.?', 'C99 ISO/IEC 9899:1999', 'C11 ISO/IEC 9899:2011', 'C05 ISO/IEC 9899:2005', 'C10 ISO/IEC 9899:2010', '1'),
(46, 'C Mcq Test1', 'What are the new features of C11 or ISO IEC 9899 2011 standard.?', 'Type generic Macros, Static Assertions', 'Multi Threading, Anonymous Unions, quick_exit', 'Bounds Checking Interfaces, Anonymous Strurctures', 'All', '4'),
(47, 'C Mcq Test1', 'C language was invented in which laboratories.?', 'Uniliver Labs', 'IBM Labs', 'AT&T Bell Labs', 'Verizon Labs', '3'),
(48, 'C Mcq Test2', 'BCPL Language is also called..?', 'C Language', 'B Language', 'D Language', 'None', '4'),
(49, 'C Mcq Test2', 'C language was invented to develop which Operating System.?', 'Android', 'Linux', 'Ubuntu', 'Unix', '4'),
(50, 'C Mcq Test2', 'C language was invented in the year.?\r\n', '1999', '1978', '1972', '1990', '3'),
(51, 'C Mcq Test2', 'C language is used in the development of .?', 'Databases', 'Graphic applications', 'Word Processors', 'All of the above', '4'),
(52, 'C Mcq Test2', 'A C program is a combination of.?', 'Statements', 'Functions', 'Variables', 'All of the above', '4'),
(53, 'C Mcq Test2', ' Choose correct answer..\r\n\r\n#include<stdio.h>\r\nmain()\r\n{\r\n	/* Multi Line Comment\r\n	This line is ignored by compiler\r\n	*/\r\n	printf(\"Hello C..\"); \r\n}', '#include is a Preprocessor Directive', '<stdio.h> is a header file with predefined functions like printf, scanf etc', '#include main() {  } is a mandatory function to be included in every C Program.', 'All the above', '4'),
(54, 'C Mcq Test2', 'Correct way of commenting a single line is.?', '/*printf(\"Hello C..\"); printf(\"How are you.\");', '//printf(\"Hello C..\"); printf(\"How are you.\");', '/*printf(\"Hello C..\"); printf(\"How are you.\");*/', '/printf(\"Hello C..\");/ printf(\"How are you.\");', '2'),
(55, 'C Mcq Test2', 'Single Line Comment // is also called.?', 'C++ Style Comment', 'Java Style Comment', 'PHP Style Comment', 'All the above', '4'),
(56, 'C Mcq Test2', 'What is the output of this statement \"printf(\"%d\", (a++))\"?', 'The value of (a + 1)', 'The current value of a', 'Error message', 'Garbage', '2'),
(57, 'C Mcq Test2', 'What is an Identifier in C Language.?', ' Name of a Function or Variable', 'Name of a Macros', 'Name of Structure or Union', 'All the above.', '4'),
(58, 'C Mcq Test3', 'An Identifier may contain.?', ' Letters a-z, A-Z in Basic character set. Unicode alphabet characters other languages', ' Underscore _ symbol', 'Numbers 0 to 9 Unicode Numbers in other languages', 'All the above', '4'),
(59, 'C Mcq Test3', 'What is the number of characters used to distinguish Identifier or Names of Functions and Global variables.?\r\n', '31', '32', '33', '28', '1'),
(60, 'C Mcq Test3', ' What is length of an Identifier that is unique for Non Global Variables and Non Function Names.?', '32', '63', '64', '68', '2'),
(61, 'C Mcq Test3', 'An Identifier can start with.?', 'Alphabet', 'Underscore ( _ ) sign', 'Any character that can be typed on a keyboard', 'Option A & Option B', '4'),
(62, 'C Mcq Test3', 'C Programs are used in .?', 'Any Electronic device which works on some logic and Operating System.', 'Washing machine', 'Fridge, Microwave Ovens', 'All the above', '4'),
(63, 'C Mcq Test3', 'What are the types of Constants in C Language.?\r\n', 'Primary Constants', 'Secondary Constants', 'Basic Constants and Advanced Constants', 'Primary Constants and Secondary Constants', '4'),
(64, 'C Mcq Test3', 'Choose correct statements', 'A constant value does not change. A variable value can change according to needs.', 'A constant can change its values. A variable can have one constant value only.', 'There is no restriction on number of values for constants or variables.', 'Constants and Variables can not be used in a singe main function.', '1'),
(65, 'C Mcq Test3', 'Find an integer constant.', '3.145', '34', '\"125\"', 'None of the above', '2'),
(66, 'C Mcq Test3', 'Find a Floating Point constant.', '12.3E5', '12e34', '125.34857', 'All the above.', '4'),
(67, 'C Mcq Test3', ' Number of Keywords present in C Language are .?', '32', '34', '62', '64', '1'),
(68, 'Java Mcq Test1', 'Who is known as father of Java Programming Language?', 'James Gosling', 'M. P Java', 'Charel Babbage', 'Blais Pascal', '1'),
(69, 'Java Mcq Test1', 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', '1'),
(70, 'Java Mcq Test1', 'In java control statements break, continue, return, try-catch-finally and assert belongs to?', 'Selection statements', 'Loop Statements', 'Transfer statements', 'Pause Statement', '3'),
(71, 'Java Mcq Test1', 'Which provides runtime environment for java byte code to be executed?', 'JDK', 'JVM', 'JRE', 'JAVAC', '2'),
(72, 'Java Mcq Test1', 'What is byte code in Java?', 'Code generated by a Java compiler', 'Code generated by a Java Virtual Machine', 'Name of Java source code file', 'Block of code written inside a class', '1'),
(73, 'Java Mcq Test1', 'Which of the following are not Java keywords ?', 'double', 'switch', 'then', 'instanceof', '3'),
(74, 'Java Mcq Test1', 'Which of these have highest precedence?', '()', '++', '*', '>>', '1'),
(75, 'Java Mcq Test1', 'Which of these class is superclass of every class in Java?', 'String class', 'Object class', 'Abstract class', 'ArrayList class', '2'),
(76, 'Java Mcq Test1', 'Data type long literals are appended by _____', 'Uppercase L', 'Lowercase L', 'Long', 'Both A and B', '4'),
(77, 'Java Mcq Test1', 'Java language was initially called as ________', 'Sumatra', 'J++', 'Oak', 'Pine', '3'),
(78, 'Java Mcq Test2', 'What is garbage collection in the context of Java?', 'Java deletes all unused java files on the system.', 'Memory used by the object with no reference is automatically reclaimed.', 'The JVM cleans output of Java program with error.', 'Any unused package in a program automatically gets deleted.', '2'),
(79, 'Java Mcq Test2', 'Which one is a template for creating different objects ?', 'An Array', 'A class', 'Interface', 'Method', '2'),
(80, 'Java Mcq Test2', 'Which symbol is used to contain the values of automatically initialized arrays?', 'Brackets', 'Braces', 'Parentheses', 'Comma', '2'),
(81, 'Java Mcq Test2', 'Which one is true about a constructor ?', 'A constructor must have the same name as the class it is declared within.', 'A constructor is used to create objects.', 'A constructor may be declared private.', 'All of the above', '4'),
(82, 'Java Mcq Test2', 'Which of these operators is used to allocate memory to array variable in Java?', 'alloc', 'malloc', 'new malloc', 'new', '4'),
(83, 'Java Mcq Test2', 'Which of these is returned by Greater Than, Less Than and Equal To (i.e Relational) operator ?', 'Fload', 'Integer', 'Boolean', 'Double', '3'),
(84, 'Java Mcq Test2', 'Which statement transfer execution to different parts of your code based on the value of an expression?', 'If', 'Switch', 'Nested-if', 'if-else-if', '2'),
(85, 'Java Mcq Test2', 'Modulus operator (%) can be applied to which of these?', 'Integers', 'Floating - point numbers', 'Both A and B', 'None of These', '3'),
(86, 'Java Mcq Test2', 'What feature of OOP has a super-class sub-class concept?', 'Hierarchical inheritance', 'Single inheritance', 'Multiple inheritances', 'Multilevel inheritance', '1'),
(87, 'Java Mcq Test2', 'Which of the following are not the methods of the Thread class?', 'yield()', 'sleep(long msec)', 'go()', 'stop()', '3'),
(88, 'Java Mcq Test3', 'Division operator has ____ precedence over multiplication operator', 'Heighest', 'Least', 'Equal', 'None of These', '3'),
(89, 'Java Mcq Test3', 'What is the full form of JVM ?', 'Java Very Large Machine', 'Java Verified Machine', 'Java Very Small Machine', 'Java Virtual Machine', '4'),
(90, 'Java Mcq Test3', 'In Java code, the line that begins with /* and ends with */ is known as?', 'Multiline comment', 'Single line comment', 'Both A & B', 'None of these', '1'),
(91, 'Java Mcq Test3', 'Which of the following are not Java modifiers?', 'public', 'private', 'friendly', 'transient', '3'),
(92, 'Java Mcq Test3', 'Which of this keyword must be used to inherit a class?', 'super', 'this', 'extent', 'extends', '4'),
(93, 'Java Mcq Test3', 'If super class and subclass have same variable name, which keyword should be used to use super class?', 'super', 'this', 'upper', 'classname', '1'),
(94, 'Java Mcq Test3', 'In order to restrict a variable of a class from inheriting to subclass, how variable should be declared?', 'Protected', 'Private', 'Public', 'Static', '2'),
(95, 'Java Mcq Test3', ' Which of these method of Object class can clone an object?', 'Objectcopy()', 'copy()', 'Object clone()', 'clone()', '3'),
(96, 'Java Mcq Test3', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', '3'),
(97, 'Java Mcq Test3', ' What is the return type of the hashCode() method in the Object class?', 'Object', 'int', 'long', 'void', '2'),
(99, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', 'Damage', 'Dammege', 'Damaige', 'Dammage', '1'),
(100, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', 'Itinaray', 'Itinarery', 'Itinarery', 'Itinerary', '4'),
(105, 'Spelling', ' Choose the correct spelt word out of the given alternatives.', ' Scriptur', ' Skripture', 'Scripcher', ' Scripture', '4'),
(106, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', 'Commander', ' Comander', 'Comander', 'Comandar', '1'),
(107, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', ' Pasanger', 'Passenger', ' Pessenger', 'Pessenger', '2'),
(108, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', ' Busisness', 'Business', ' Buisiness', 'Bussiness', '2'),
(109, 'Spelling', 'Choose the correct spelt word out of the given alternatives.', 'Puerille', 'Puerile', 'Puerrile', ' Purrile', '2'),
(110, 'Spelling', ' Choose the correct spelt word out of the given alternatives.', ' Careir', ' Carreer', 'Caireer', 'Career', '4'),
(111, 'Spelling', ' Choose the correct spelt word out of the given alternatives.', 'Gaurante', ' Guaruntee', ' Garuntee', 'Guarantee', '4'),
(112, 'Spelling', ' Choose the correct spelt word out of the given alternatives.', ' Forcaust', 'Forcast', 'Forecaste', 'Forecast', '4'),
(113, 'Antonyms', 'Choose the correct antonym of the given word:\r\nGarrulous', 'Talkative', 'Taciturn', 'Enlightening', 'Frank', '2'),
(114, 'Antonyms', 'Choose the correct antonym of the given word:\r\nCapricious', 'Solitary', 'Phlegmatic', 'Constant', 'Redoubtable', '3'),
(115, 'Antonyms', 'Choose the correct antonym of the given word:\r\nRestitution', 'Constitution', 'Cataclysm', 'Inflation', 'Deprivation', '2'),
(116, 'Antonyms', 'Choose the correct antonym of the given word:\r\nQuiescent', 'Mendicant', 'Malignant', 'Exempt', 'Restless', '4'),
(117, 'Antonyms', 'Choose the correct antonym of the given word:\r\nAmalgamate', 'Segregate', 'Scintillate', 'Procrastinate', 'Recriminate', '1'),
(118, 'Antonyms', 'She detests government jobs.', ' Adores', ' Approves of', ' Is fond of', ' Is interested in', '1'),
(119, 'Antonyms', 'Her character is very mild.', 'Rude', ' Bad', ' Gentle', ' Angry', '3'),
(120, 'Antonyms', 'His brother was a brave soldier.', 'Noble', 'Clever', 'Coward', ' Courageous', '3'),
(121, 'Antonyms', 'The new officer is a brash young man.', ' Arrogant', 'Handsome', ' Kind', 'Polite', '4'),
(122, 'Antonyms', 'Many snakes are innocuous.', 'Harmful', ' Deadly', ' Ferocious', ' Poisonous', '1'),
(123, 'Time and Distance', ' Hemant covers a certain distance with his own speed , but when he reduces his speed by 10 km/hr\r\nhis time duration for the journey increases by 40 hrs, while if he increases his speed by 5km/hr from\r\nhis original speed he takes 10hrs less than the original time taken . Find the distance covered by him.', ' 1200km', ' 1500km', ' 1350km', 'None', '2'),
(124, 'Time and Distance', ' A train met with an accident 60km away from station A. It completed the remaining journey at\r\n5/6th of the original speed and reached station B 1hr 12mins late. Had the accident taken place 60km\r\nfurther, it would have been only 1hr late. what was the original speed of the train?', ' 50km/hr', '45km/hr', '60km/hr', ' None', '3'),
(125, 'Time and Distance', ' Two man start together to walk a certain distance, one at 4 km/hr and another at 5 km/hr. The\r\nformer arrives half an hour before the latter. Find the distance.', ' 10km', '15km', ' 20km', ' 8km', '1'),
(126, 'Time and Distance', 'In a flight of 600 km, an aircraft was slowed down due to bad weather. Its average speed for\r\nthe trip was reduced by 200 km/hr and the time of flight increased by 30 minutes. The duration of the\r\nflight is:', ' 2hrs', ' 1hr 30min', '2hrs 15min', '1hr', '4'),
(127, 'Time and Distance', 'Two racers start running towards each other, one from A to B and another from B to A. They\r\ncross each other after one hour and the first racer reaches B, 5/6 hour before the second racer reaches\r\nA. If the distance between A and B is 50 km. what is the speed of the slower racer?\r\n', '15km/hr', ' 20km/hr', ' 25km/hr', ' None', '2'),
(128, 'Time and Distance', '  P and Q run at the speed 40m/s and 20m/s resp on the circular track of 800m, as its\r\ncircumference , when would the P and Q meet for the first time at the starting point if they start\r\nsimultaneously from the same point.', ' 40sec', ' 50sec', ' 55sec', ' None', '1'),
(129, 'Time and Distance', 'The speeds of Ram and Raj are 30 km/h and 40 km/h. Initially Raj is at a place L and Ram is at\r\na place M. The distance between L and M is 650 km. Ram started his journey 3 hours earlier than Raj\r\nto meet each other. If they meet each other at a place P somewhere between L and M, then the distance\r\nbetween P and M is?', ' 225km', ' 300km', '250km', '330km', '4'),
(130, 'Time and Distance', 'The ratio between the speed of a car and a bike is 16 : 15 respectively. Also, a bus covered a\r\ndistance of 480 km in 8 hrs. The speed of the bus is three-fourth the speed of the car. How much\r\ndistance will the bike cover in 6 h?\r\n', '320km', '360km', '450km', 'None', '3'),
(131, 'Time and Distance', ' How many seconds will a train 50 m in length, travelling at the rate of 42 km an hour, rate to\r\npass another train 80 m long, proceeding in the same direction at the rate of 30 km an hour?\r\n', '45sec', '39sec', '50sec', ' None', '2'),
(132, 'Time and Distance', 'A man rides his bike 20 km at an average speed of 8 km/hr and again travels 45 km at an\r\naverage speed of 10 km/hr. What is his average speed for the ride approximately?\r\n', '10.8km/hr', ' 8.5km/hr', '9.3km/hr', '10.2km/hr', '3'),
(133, 'Problem Set1', ' A __________ is an ordered collection of objects.', 'Relation', 'Function', 'Set', 'Proposition', '3'),
(134, 'Problem Set1', 'The set O of odd positive integers less than 10 can be expressed by _____________', '{1, 2, 3}', '{1, 3, 5, 7, 9}', '{1, 2, 5, 9}', '{1, 5, 7, 9, 11}', '2'),
(135, 'Problem Set1', 'Power set of empty set has exactly _________ subset.', 'One', 'Two', 'Zero', 'Three', '1'),
(136, 'Problem Set1', 'What is the Cartesian product of A = {1, 2} and B = {a, b}?', '{(1, a), (1, b), (2, a), (b, b)}', '{(1, 1), (2, 2), (a, a), (b, b)}', '{(1, a), (2, a), (1, b), (2, b)}', '{(1, 1), (a, a), (2, a), (1, b)}', '3'),
(137, 'Problem Set1', 'The Cartesian Product B x A is equal to the Cartesian product A x B.', 'True', 'False', 'Zero', 'None Of These', '2'),
(138, 'Problem Set1', 'What is the cardinality of the set of odd positive integers less than 10?', '10', '5', '3', '20', '2'),
(139, 'Problem Set1', 'Which of the following two sets are equal?', 'A = {1, 2} and B = {1}', 'A = {1, 2} and B = {1, 2, 3}', 'A = {1, 2, 3} and B = {2, 1, 3}', 'A = {1, 2, 4} and B = {1, 2, 3}', '3'),
(140, 'Problem Set1', 'The set of positive integers is _____________', 'Infinite', 'Finite', 'Subset', 'Empty', '1'),
(141, 'Problem Set1', 'What is the Cardinality of the Power set of the set {0, 1, 2}?', '8', '6', '7', '9', '1'),
(142, 'Problem Set1', 'The members of the set S = {x | x is the square of an integer and x < 100} is ________________', '{0, 2, 4, 5, 9, 58, 49, 56, 99, 12}', '{0, 1, 4, 9, 16, 25, 36, 49, 64, 81}', ' {1, 4, 9, 16, 25, 36, 64, 81, 85, 99}', '{0, 1, 4, 9, 16, 25, 36, 49, 64, 121}', '2'),
(143, 'Problem Set2', 'If n(A) = 20 and n(B) = 30 and n(A U B) = 40 then n(A ∩ B) is?\r\n', '20', '30', '40', '10', '4'),
(144, 'Problem Set2', 'Let the players who play cricket be 12, the ones who play football 10, those who play only cricket are 6, then the number of players who play only football are ___________, assuming there is a total of 16 players.', '16', '8', '4', '10', '3'),
(145, 'Problem Set2', 'Which among the following can be taken as the discrete object?', 'People', 'Rational numbers', 'Integers', 'All of the mentioned', '4'),
(146, 'Problem Set2', 'Which option contains two equal sets?', 'X = {5, 6} and Y = {6}', 'X = {5, 6, 8, 9} and Y = {6, 8, 5, 9}', 'X = {5, 6, 9} and Y = {5, 6}', 'X = {5, 6} and Y = {5, 6, 3}', '2'),
(147, 'Problem Set2', 'The cardinality of the Power set of the set {1, 5, 6} is______________.', '5', '6', '8', '10', '3'),
(148, 'Problem Set2', 'How many elements in the Power set of set A= {{Φ}, {Φ, {Φ}}}?\r\n', '4 elements', '2 elements', '6 elements', '5 elements', '1'),
(149, 'Problem Set2', 'Mathematics can be broadly categorized into how many types?', '3 types', '2 types', '5 types', '4 types', '2'),
(150, 'Problem Set2', 'The number of reflexive closure of the relation {(0,1), (1,1), (1,3), (2,1), (2,2), (3,0)} on the set {0, 1, 2, 3} is________.\r\n', '36', '6', '16', '26', '2'),
(151, 'Problem Set2', 'How many relations exist from set X to set Y if the set X and set Y has 7 and 8 elements?', '256', '272', '356', '56', '1'),
(152, 'Problem Set2', 'What is the value of Floor(8.4) + Ceil(9.9)?\r\n', '18', '19', '20', '17', '1'),
(153, 'Problem Set3', 'Which option is the negation of the bits \"1001011\"?', '11011011', '10110100', '0110100', '1100100', '3'),
(154, 'Problem Set3', 'Which of the following Law of Boolean proofs the X.X=X?', 'Identity Law', 'Double Complement Law', 'Complement Law', 'Idempotent Law', '4'),
(155, 'Problem Set3', 'According to the symmetric matrix, which of the following statement is correct?', 'A = AT', 'All the diagonal elements of a symmetric matrix are One', 'A = -AT', 'All the diagonal elements of a symmetric matrix are Zero.', '1'),
(156, 'Problem Set3', 'Which of the following matrix having only one row and multiple columns?', 'Diagonal Matrix', 'Row Matrix', 'Column Matrix', 'None of the mentioned', '2'),
(157, 'Problem Set3', ' Which of the following function is also referred to as an injective function?', 'Many-to-one', 'Onto', 'One-to-One', 'None of the mentioned', '3'),
(158, 'Problem Set3', ' Which of the following function is not a mathematics function?', 'many to one', 'one-to-many', 'one to one', 'All of the mentioned', '2'),
(159, 'Problem Set3', 'Mathematics can be broadly categorized into how many types?', '3 types', '2 types', '5 types', '4 types', '2'),
(160, 'Problem Set3', 'The cardinality of the Power set of the set {1, 5, 6} is______________.', '5', '6', '8', '10', '3'),
(161, 'Problem Set3', ' If n(A) = 20 and n(B) = 30 and n(A U B) = 40 then n(A ∩ B) is?', '20', '30', '40', '10', '4'),
(162, 'Problem Set3', 'The difference of {1, 2, 3, 6, 8} and {1, 2, 5, 6} is the set ____________', '{1, 3}', '{5, 6, 8}', '{3, 8}', '{2, 6, 5}', '3'),
(163, 'Spotting Errors', 'I did not know where they were going ', 'nor could I understand', 'why had they left so soon', ' No error', 'None of these', '3'),
(164, 'Spotting Errors', ' The teacher let the boy off ', 'with a warning though he', ' was convinced with his guilt.', 'No error', 'None of these', '3'),
(165, 'Spotting Errors', 'If I would be a millionaire, ', 'I would not be wasting my time', 'waiting for a bus.', 'No error ', 'None of these', '1'),
(166, 'Spotting Errors', 'It would be ', 'more better', 'If you could paint', 'the gate green.', ' No error ', '1'),
(167, 'Spotting Errors', 'He walked five miles which are really a great distance ', 'for a man like him ', 'who is not only old but also ill.', ' No error', 'Error', '1'),
(168, 'Spotting Errors', 'When things’get difficult.\r\n', ' you just have to', ' grit your teeth and preserve', 'No error', 'None of these', '3'),
(169, 'Spotting Errors', 'When things’get difficult,\r\n', 'you just have to', 'grit your teeth and preserve. ', ' No error', 'None of these', '3'),
(170, 'Spotting Errors', 'Now, it can be easily said ', 'that the population of this city is greater ', 'than any other city in India. ', 'None of these', 'No error', '4'),
(171, 'Spotting Errors', 'If we exercise regularly', 'we will be ', ' more healthier. ', ' No error', 'None of these', '3'),
(172, 'Spotting Errors', 'You will get ', ' all the informations', 'if you read this booklet carefully', 'No error ', 'None of these', '2'),
(173, 'Problems on Trains', 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '4'),
(174, 'Problems on Trains', 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', '2'),
(175, 'Problems on Trains', 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', '200 m', '225 m', '245 m', '250 m', '3'),
(176, 'Problems on Trains', 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:', '1 : 3', '3 : 2', '3 : 4', 'None of these', '2'),
(177, 'Problems on Trains', 'A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?', '120 m', '240 m', '300 m', 'None of these', '2'),
(178, 'Problems on Trains', 'A train 240 m long passes a pole in 24 seconds. How long will it take to pass a platform 650 m long?', '65 sec', '89 sec', '100 sec', '150 sec', '2'),
(179, 'Problems on Trains', 'Two trains of equal length are running on parallel lines in the same direction at 46 km/hr and 36 km/hr. The faster train passes the slower train in 36 seconds. The length of each train is:', '50 m', '72 m', '80 m', '82 m', '1'),
(180, 'Problems on Trains', 'A train 360 m long is running at a speed of 45 km/hr. In what time will it pass a bridge 140 m long?', '40 sec', '42 sec', '45 sec', '48 sec', '1'),
(181, 'Problems on Trains', 'Two trains are moving in opposite directions @ 60 km/hr and 90 km/hr. Their lengths are 1.10 km and 0.9 km respectively. The time taken by the slower train to cross the faster train in seconds is:', '36', '45', '48', '49', '3'),
(182, 'Problems on Trains', 'A jogger running at 9 kmph alongside a railway track in 240 metres ahead of the engine of a 120 metres long train running at 45 kmph in the same direction. In how much time will the train pass the jogger?', '3.6 sec', '18 sec', '36 sec', '72 sec', '3'),
(183, 'Problems on Ages', 'The present age of Kabir is 50 years and that of his wife, Sarah is 40 years. How long ago was the ratio of their ages 3:2?', '20 Years', '21 Years', '15 Years', '30 Years', '1'),
(184, 'Problems on Ages', 'The sum of ages of 5 children born in a family at the intervals of 4 years each is 50 years. What is the age of the eldest child?', '15 years', '16 years', '20 years', '30 years', '3'),
(185, 'Problems on Ages', 'The present ages of three persons, Raj, Rajesh and Ravi is in proportions 4: 7: 9. Eight years ago, the sum of their ages was 56. What is the present age of Ravi?', '22 Years', '43 Years', '36 Years', '76 Years', '3'),
(186, 'Problems on Ages', 'The present age of Aradhana and Aadrika is in the ratio 3:4. 5 years back, the ratio of their ages was 2:3. What is the present age of Aradhana?', '12 years', '15 years', '20 years', '22 years', '2'),
(187, 'Problems on Ages', '. If the total ages of Iqbal and Shikhar is 12 years more than the total age of Shikhar and Charu. Charu is how many years younger than Iqbal?', '11 years', '13 years', '15 years', 'None of the above', '4'),
(188, 'Problems on Ages', ' A father is twice as old as his daughter. If 20 years ago, the age of the father was 10 times the age of the daughter, what is the present age of the father?', '40 years', '32 years', '33 years', '45 years', '4'),
(189, 'Problems on Ages', 'Arun is 2 years older than Bharat who is twice as old as Charat. If the total of the ages of Arun, Bharat and Charat be 27, then how old is Bharat?', '10 years', '15 years', '12 years', '13 years', '1'),
(190, 'Problems on Ages', 'The sum of the ages of a daughter and mother is 56 years; after four years the age of the mother will be three times that of the daughter. What is the age of the daughter and the mother respectively?', '12 years, 41 years', '12 years, 30 years', '11 years, 34 years', '12 years, 44 years', '4'),
(191, 'Problems on Ages', 'Raju age after 15 years will be 5 times his age 5 years back, What is the present age of Raju\r\n', '15', '14', '10', '8', '3'),
(192, 'Problems on Ages', 'Sachin is younger than Rahul by 7 years. If the ratio of their ages is 7:9, find the age of Sachin', '23.5', '24.5', '12.5', '14.5', '2'),
(193, 'Time and Work', '5 men and 2 boys working together can do four times as much work as a man and a boy. Working capacity of man and boy is in the ratio', '1:2', '2:1', '1:3', '2:3', '2'),
(194, 'Time and Work', '10 women can complete a work in 7 days and 10 children take 14 days to complete the work. How many days will 5 women and 10 children take to complete the work?', '7 days', '8 days', '9 days', '10 days', '7'),
(195, 'Time and Work', '4 men and 6 women finish a job in 8 days, while 3 men and 7 women finish it in 10 days. In how many days will 10 women working together finish it ?', '40 days', '30 days', '60 days', '50 days', '1'),
(196, 'Time and Work', 'A piece of work can be done by 6 men and 5 women in 6 days or 3 men and 4 women in 10 days. It can be done by 9 men and 15 women in how many days ?', '2 days', '3 days', '4 days', '5 days', '2'),
(197, 'Time and Work', 'Two pipes can fill the cistern in 10hr and 12 hr respectively, while the third empty it in 20hr. If all pipes are opened simultaneously, then the cistern will be filled in', '7 hr', '7.5 hr', '8 hr', '8.5 hr', '2'),
(198, 'Time and Work', 'A and B can together complete a piece of work in 4 days. If A alone can complete the same work in 12 days, in how many days can B alone complete that work ?', '6 days', '5 days', '8 days', '7 days', '1'),
(199, 'Time and Work', 'A can finish a work in 18 days and B can do same work in half the time taken by A. then working together, what part of same work they can finish in a day', '1/6', '1', '1/8', '1/9', '1'),
(200, 'Time and Work', 'A tyre has two punctures. The first puncture alone would have made the tyre flat in 9 minutes and the second alone would have done it in 6 minutes. If air leaks out at a constant rate, how long does it take both the punctures together to make it flat ? ', '315min', '325min', '335min', '345min', '3'),
(201, 'Time and Work', 'A is twice as good as workman as B and together they finish a piece of work in 18 days. In how many days will B alone finish the work.', '50 days', '54 days', '55 days', '60 days', '2'),
(202, 'Time and Work', 'A does half as much work as B in three-fourth of the time. If together they take 18 days to complete the work, how much time shall B take to do it', '25 days', '26 days', '28 days', '30 days', '4'),
(203, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', 'Reporter', 'Publisher', 'Printer', 'Reader', '4'),
(204, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', 'Guitar', 'Flute ', 'Violin', 'Sitar', '2'),
(205, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', 'February', 'March', 'July', 'December', '1'),
(206, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', ' Diagonal', 'Tangent', 'Diameter', 'Radius', '1'),
(207, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', ' Kidney', 'Heart', 'Lung', 'Ear', '2'),
(208, 'Verbal Classification', 'Choose the word which is least like the other words in the group.\r\n', 'Peanut �', 'Mustard', 'Gram', 'Rice', '4'),
(209, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', 'Brass', 'Duralumin', 'Germanium', 'Bronze', '3'),
(210, 'Verbal Classification', 'Choose the word which is least like the other words in the group.', 'Physics', 'Optics', 'Mechanics', 'Dynamics', '1'),
(211, 'Verbal Classification', 'Choose the word which is least like the other words in the group', 'Chocolate', 'Bread', 'Biscuits', 'Cake', '1'),
(212, 'Verbal Classification', 'Choose the word which is least like the other words in the group', 'Apple', 'Cashew', 'Grapes', 'Pineapple', '2'),
(213, 'Height and Distance', 'Two ships are sailing in the sea on the two sides of a lighthouse. The angle of elevation of the top of the lighthouse is observed from the ships are 30° and 45° respectively. If the lighthouse is 100 m high, the distance between the two ships is:', '173 m', '200 m', '273 m', '300 m', '3'),
(214, 'Height and Distance', 'The angle of elevation of a ladder leaning against a wall is 60° and the foot of the ladder is 4.6 m away from the wall. The length of the ladder is:', '2.3 m', '4.6 m', '7.8 m', '9.2 m', '4'),
(215, 'Height and Distance', 'An observer 1.6 m tall is 203 away from a tower. The angle of elevation from his eye to the top of the tower is 30°. The height of the tower is:', '21.6 m', '23.2 m', '24.72 m', 'None of these', '1'),
(216, 'Height and Distance', 'From a point P on a level ground, the angle of elevation of the top tower is 30°. If the tower is 100 m high, the distance of point P from the foot of the tower is:', '149 m', '156 m', '173 m', '200 m', '3'),
(217, 'Height and Distance', 'The angle of elevation of the sun, when the length of the shadow of a tree 3 times the height of the tree, is:', '30°', '45°', '60°', '90°', '1'),
(218, 'Height and Distance', 'A pole stands vertically, inside a saclene triangular park ABC, if the angle of elevation of the top of the pole from each corner of the park is same, then in ΔABC, the foot of the pole is at the', 'centroid', 'circumcentre', 'incentre', 'orthocentre', '2'),
(219, 'Height and Distance', 'A vertical stick 12 cm long casts a shadow 8 cm long on the ground. At the same time, a tower casts a shadow 40 m long on the ground. The height of the tower is', '72 m', '60 m', '65 m', '70 m', '2'),
(220, 'Height and Distance', 'The angle of elevation of a ladder leaning against a wall is 60º and the foot of the ladder is 4.6 m away from the wall. The length of the ladder is:', '3 m', '6 m', '8 m', '2 m', '3'),
(221, 'Height and Distance', ': An observer 1.6 m tall is 203 away from a tower. The angle of elevation from his eye to the top of the tower is 30º. The heights of the tower is:', '6 m', '2 m', '72 m', 'None of these', '1'),
(222, 'Height and Distance', 'From a point P on a level ground, the angle of elevation of the top tower is 30º. If the tower is 100 m high, the distance of point P from the foot of the tower is:', '149 m', '156 m', '173 m', '200 m', '3'),
(225, 'Logical Games', 'What letter comes next: O T T F F S S ?', 'E', 'G', 'A', 'C', '1'),
(226, 'Logical Games', 'What common English verb becomes its own past tence by rearranging its letters?', ' Eat', 'See', 'Run', 'Make', '1'),
(227, 'Logical Games', 'Why did the chicken cross the road?', 'Following someone', 'To meet someone', 'To get to the other side', 'To eat something', '3'),
(228, 'Logical Games', 'Is it correct to say \"the yolk of eggs is white\" or \"the yolk of eggs are white\"?', ' Neither, the yolk of eggs are yellow', 'Yes', 'No', 'Do not know', '1'),
(229, 'Logical Games', 'If a rooster lays an egg on the exact peak of a barn, which side does it fall?', 'Roosters do not lay eggs.', 'Right side', 'It will fly', 'It do not fall', '1'),
(230, 'Logical Games', 'It occurs once in a minute, twice in a moment, but never in an hour.', 'The letter S', 'The letter R', 'The letter N', 'The letter M', '4'),
(231, 'Logical Games', 'When is it bad luck to meet a white cat?\r\n', 'when you are the mouse', 'When it is winter', 'When it is raining', 'When you are the lizard ', '1'),
(232, 'Logical Games', 'Dead on the field lie ten soldiers in white, felled by three eyes, black as night. What happened?', 'A bowling ball knocked down ten pins.', 'A bowling ball knocked down ten black pins', 'Soldires 3 eyes are black', '10 soldires died', '1'),
(233, 'Logical Games', 'It is weightless, you can see it. If you put it in a barrel it will make it lighter?', ' Hole', 'All of these', 'None of these', 'Paper', '1'),
(234, 'Logical Games', 'Take one out and scratch my head I am now black but once was red.', 'Match', 'Fish', 'Red pen', 'none of these', '1'),
(235, 'Capital and Currencies', 'Which of the following is  capital of Afghanistan ?\r\n', 'Brussels', 'Kabul', 'Afghani', 'Baku', '2'),
(236, 'Capital and Currencies', 'Dinar is the currency of which of the following countries ?', 'Bahrain', 'Brazil', 'Bhutan', 'Georgia', '1'),
(237, 'Capital and Currencies', 'Which of the following is currency of Brunei ?', 'Dirham', 'Dinar', 'Dollar', 'Riyal', '3'),
(238, 'Capital and Currencies', 'Dhaka is capital of which of the following country ?', 'Nepal ', 'Pakisthan', 'Bhutan', 'Bangladesh', '4'),
(239, 'Capital and Currencies', 'Which of the following is currency of Bhutan ?', 'Rupee', 'Pula', 'Dollar', 'Ngultrum', '4'),
(240, 'Capital and Currencies', 'Phnom Penh is the capital of which of the following country ?', 'Denmark', 'Canada', 'Cambodia', 'Cuba', '3'),
(241, 'Capital and Currencies', 'Euro is the currency of which of the following country ?', 'Colombia', 'Cyprus', 'Chile', 'Canada', '2'),
(242, 'Capital and Currencies', 'Which of the following is capital of Georgia ?\r\n', 'Tbilisi', 'Thimph', 'Tehran', 'Riga', '1'),
(243, 'Capital and Currencies', 'Indonesia’s currency is …………………', 'Rial', 'Dollar', 'Rupee', 'yen', '3'),
(244, 'Capital and Currencies', 'Capital city of Israel is ……………….', 'Tehran', 'Jerusalem', 'Baghdad', 'Astana', '2'),
(245, 'Neighbouring Country', 'What is the name of the mountain chain that crosses northern Pakistan, India, Nepal, and Bhutan?\r\n', 'The Himalayas', 'The Deccans', 'The Ghats', 'The Aryans', '1'),
(246, 'Neighbouring Country', 'Which Asian river is extremely valuable because it flows through a desert area?', 'The Indus River', 'The Brahmaputra', 'The Ganges River', 'The Irrawaddy', '1'),
(247, 'Neighbouring Country', 'What were the deltas of Bangladesh formed by?', 'The Brahmaputra River', 'Summer monsoons', 'Volcanoes', 'Winter dry spells', '1'),
(248, 'Neighbouring Country', 'Which religion has the most followers in India?', 'Islam', 'Buddhism', 'Christianity', 'Hinduism', '4'),
(249, 'Neighbouring Country', 'India and Pakistan became two separate nations in the 1940s because of differences in what?', 'Religion', 'Political systems', 'Climate', ' Mineral resources', '1'),
(250, 'Neighbouring Country', 'One reason for the great number of people living on the Ganges River Plain is the plains ___.', 'Fertile soils', 'High elevation ', 'Oil wells', 'Cool climate', '1'),
(251, 'Neighbouring Country', 'About how many people built the Taj Mahal?', '20,000', '15,000', '5,000', '3,000', '1'),
(252, 'Neighbouring Country', 'What makes the eastern part of India wetter than the western part?', 'Tsunamis', 'Monsoons', 'Droughts', 'Earthquakes', '2'),
(253, 'Neighbouring Country', 'Where are Indias main coal and iron deposits?\r\n', 'Along the Brahmaputra River', 'In the Himalayas', 'West of Calcutta', 'West of Madras', '3'),
(254, 'Neighbouring Country', 'Millet, grown by farmers on Indias Deccan Plateau, is what?', 'Tea served in religious ceremonies', 'A vine used to make rope', 'A grain used to make bread', 'A tree used to make rubber', '3'),
(255, 'Countries and Sports', 'The famous football player Maradona belongs to which among the following countries?', 'Brazil', 'Chile', 'Argentina', 'Italy', '3'),
(256, 'Countries and Sports', 'Which among the following players of India was famous as “Pocket Dynamo”? ', 'Leander Paes', ' Vijender Singh', 'KD Jadhav', 'Gurbux Singh', '3'),
(257, 'Countries and Sports', '“National Football Museum” which keeps FIFA collection is located in which country?', 'Switzerland', 'Canada', 'England', 'France', '3'),
(258, 'Countries and Sports', 'Murugappa Gold Cup is related to which among the following sports?', 'Football', 'Hockey', 'Cricket', 'Table Tennis', '2'),
(259, 'Countries and Sports', 'In which year was the Olympic Symbol designed?', '1915', '1912', '1920', '1924', '2'),
(260, 'Countries and Sports', 'Who had established the World Series Cricket in 1970s?', 'Kerry Packer', 'David Johnson', 'Allen Hill', 'Alfred Shaw', '1'),
(261, 'Countries and Sports', 'Which country has been the most successful at the BWF World Championships ever since its inception in 1977?', 'Indonesia', 'Malaysia', 'China', 'Denmark', '3'),
(262, 'Countries and Sports', 'Who is the captain of Indian National Football team?', 'Sunil Chhetri', 'Gurpreet Singh Sandhu', 'Sandesh Jhingan', 'Jeje Lalpekhlua', '2'),
(263, 'Countries and Sports', 'Who is the most successful rider in the 2018 UCI Road World Championship?', 'Trixi Worrack', 'Evelyn Stevens', 'Chantal Blaak', 'Carmen Small', '1'),
(264, 'Countries and Sports', 'Which racing event is associated with the UCI Continental Circuits?\r\n', 'Road racing', 'Mountain racing', 'BMX', 'All of the above', '1'),
(265, 'Biology', 'Which of the following is not a part of the digestive system?', 'Small Intestine', 'Rectum', ' Pharynx', 'Spleen', '4'),
(266, 'Biology', 'What is the number of “True Ribs” in human body?', '12', '14', '16', '18', '2'),
(267, 'Biology', 'In which among the following categories, Nepenthes khasiana or Indian Pitcher Plant can be placed?', 'Saprophyte', 'Xerophyte', 'Insectivorous', 'Halophyte', '3'),
(268, 'Biology', 'Which among the following plant hormone plays most important role in establishing dormancy in seeds?', 'Ethylene', 'Gibberellic acid', 'Abscisic Acid', 'Auxin', '3'),
(269, 'Biology', 'In which among the following diseases, Seed Therapy is used now a days for treatment?', 'AIDS', 'Tuberculosis', 'Cancer', 'Asthama', '3'),
(270, 'Biology', 'Which part of the Central Nervous System controls “reflex Actions” ?', 'Mesencephalon', 'Rhombencephalon', 'Medulla oblongata', 'Spinal Chord', '4'),
(271, 'Biology', 'Which among the following fishes does not have Central Nervous System?', 'Dog Fish', 'Cuttle Fish', 'Jelly Fish', 'Star Fish', '3'),
(272, 'Biology', 'Stapes, the smallest and the lightest bone in human body, is the part of which organ ?', 'Ear', 'Nose', 'Neck', 'Hand', '1'),
(273, 'Biology', 'Which ancient Indian physician is known as the ‘Father of Surgery’?', 'Charaka', 'Sushruta', 'Nagarjuna', 'Vagbhatta', '2'),
(274, 'Biology', 'Which among the following is a common end product of Anaerobic Respiration?', 'Acetic Acid', 'Carbonic Acid', 'Lactic Acid', 'Hydrochloric Acid', '3'),
(275, 'Computer', 'Name of the screen that recognizes touch input is :', 'Recog screen', 'Point Screen', 'Touch Screen', 'Android Screen', '3'),
(276, 'Computer', 'Identify the device through which data and instructions are entered into a computer', 'Software', 'Output device', 'Input device', 'Memory', '3'),
(277, 'Computer', 'Computer Moniter is also known as :', 'DVU', 'UVD', 'VDU', 'CCTV', '3'),
(278, 'Computer', 'Arrange in ascending order the units of memory TB, KB, GB, MB', 'TB>MB>GB>KB', 'MB>GB>TB>KB', 'TB>GB>MB>KB', 'GB>MB>KB>TB', '3'),
(279, 'Computer', 'Which one of these stores more data than a DVD ?', 'CD Rom', 'Floppy', 'Blue Ray Disk', 'Red Ray Disk', '3'),
(280, 'Computer', 'The output shown on the computer monitor is called', 'VDU', 'Hard Copy', 'Soft Copy', 'Screen Copy', '3'),
(281, 'Computer', 'Eight Bits make up a', 'byte', 'megabyte', 'kilobyte', 'None', '1'),
(282, 'Computer', 'Which one is the result of the output given by a computer', 'Data', 'Istruction', 'Information', 'Excursion', '3'),
(283, 'Computer', 'Which one of these also known as read/write memory ?', 'ROM', 'RAM', 'DVD', 'Hard Disk', '2'),
(284, 'Computer', 'The printed output from a computer is called', 'Copy', 'Soft Copy', 'Hard Copy', 'Paper', '3'),
(285, 'Chemistry', 'Which of the following is the poorest conductor of heat in comparison to other options?', 'Silver', 'Copper', 'Lead', 'Mercury', '3'),
(286, 'Chemistry', 'Which of the following is also known as wood alcohol? ', 'Methanol', 'Ethanol', 'Propanal', 'Butanol', '1'),
(287, 'Chemistry', 'Which among the following oxides cause the Acid rain ? ', 'Carbon monoxide and carbon dioxide', 'Nitrous oxide and sulphur dioxide', 'Carbon dioxide and nitrous oxide', 'Sulphur dioxide and carbon monoxide', '2'),
(288, 'Chemistry', 'Which among the following substances is most suitable for making Compact Discs?', 'PVC', 'Polyethylene', 'Polyamides', 'Polycarbonates', '4'),
(289, 'Chemistry', 'What happens to the weight of Iron, when it rusts?', 'Increases for long time', 'Decreases then increases', 'Increases then decreases', 'Remains the same', '3'),
(290, 'Chemistry', 'Which among the following is a common salt in Detergents?', 'Sulphate', 'Nitrate', 'Sulphonate', 'Carbonate', '1'),
(291, 'Chemistry', 'When Sulphur is heated with rubber, the process is commonly known as ?', 'Galvanization', 'Sulphonation', 'Vulcanization', 'Hydrodesulfurization', '3'),
(292, 'Chemistry', 'Carnotite is a mineral of which among the following metals?', 'Lead', 'Uranium', 'Aluminium', 'Iron', '2'),
(293, 'Chemistry', 'Haematite & Magnetite are ______?', 'Iron Ores', 'Copper Ores', 'Manganese Ores', 'Zinc Ores', '1'),
(294, 'Chemistry', 'Calcium Magnesium Silicate is commonly called as ________?', 'Asbestos', 'Borax', 'Baking Soda', 'Washing Soda', '1'),
(296, 'Physics', 'A man presses more weight on earth at :', 'Sitting position', 'Standing Position', 'Lying Position', 'None of these', '2'),
(297, 'Physics', 'A piece of ice is dropped in a vesel containing kerosene. When ice melts, the level of kerosene will', 'Rise', 'Fall', 'Remain Same', 'None of these', '2'),
(298, 'Physics', 'Youngs modulus is the property of', 'Gas only', 'Both Solid and Liquid', 'Liquid only', 'Solid only', '4'),
(299, 'Physics', 'An artificial Satellite revolves round the Earth in circular orbit, which quantity remains constant?', 'Angular Momentum', 'Linear Velocity', 'Angular Displacement', 'None of these', '1'),
(300, 'Physics', 'If electrical conductivity increases with the increase of temperature of a substance, then it is a:', 'Conductor', 'Semiconductor', 'Insulator', 'Carborator', '2'),
(301, 'Physics', 'If a lift is going up with acceleration, the apparent weight of a body is', 'More or less the true weight', 'Equal to the true weight', 'Less than the true weight', 'More than the true weight', '4'),
(302, 'Physics', 'Product of Force and Velocity is called:', 'Work', 'Power', 'Energy', 'Momentum', '2'),
(303, 'Physics', 'Which one of the following has the highest value of specific heat ?', 'Alcohol', 'Methane', 'Kerosene', 'Water', '4'),
(304, 'Physics', 'With the increase of pressure, the boiling point of any substance', 'Increases ', 'Decreases', 'Remains Same ', 'Becomes zero', '1'),
(305, 'Physics', 'Elecronegativity is the measure of', 'Metallic character', 'Non-metallic character', 'Basic Character', 'None of these', '2');
INSERT INTO `question_table` (`q_id`, `topic`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES
(306, 'Current Affairs 2019', 'Which one Bank is not one of the three Banks that will be merged to form the third largest Bank in India', 'Vijaya Bank', 'Bank of Baroda', 'Indian Bank', 'Dena Bank', '3'),
(307, 'Current Affairs 2019', 'Who becomes the first person to declare as a fugitive economic offender under the new Fugitive Economic Offenders Act', 'Vijay Mallya', 'Nirav Modi', 'Lalit Modi', 'Mehul Choksi', '1'),
(308, 'Current Affairs 2019', 'Which movie wins the Best Motion Picture, Drama in the 2019 Golden Globes', 'Green Book', 'The Wife', 'Roma', 'Bohemian Rhapsody', '4'),
(309, 'Current Affairs 2019', 'In which city, the 2019 Pravasi Bhartiya Divas will be held', 'Varanasi', 'Kanpur', 'Ahmedabad', 'Ahmedabad', '1'),
(310, 'Current Affairs 2019', 'Which State Government recently decided to exit from the Centres ambitious Ayushman Bharat- Pradhan Mantri Jan Aarogya Yojana', 'Karnataka', 'Rajasthan', 'Jammu Kashmir', 'West Bengal', '4'),
(311, 'Current Affairs 2019', 'In which state, India’s longest single-lane steel cable suspension bridge inaugurated', 'Assam', 'Mizoram', 'Meghalaya', 'Arunachal Pradesh', '4'),
(312, 'Current Affairs 2019', 'The Lok Sabha has passed the ___th constitutional amendment bill to provide reservations to the economically weaker sections', '120', '122', '124', '125', '3'),
(313, 'Current Affairs 2019', 'Which one is the first State in India to implement 10% quota for economically weak in general category', 'Bihar', 'Gujarat', 'Punjab', 'Maharashtra', '2'),
(314, 'Current Affairs 2019', 'Indias first National Film Museum opens in', ' Delhi', 'Mumbai', 'Chennai', 'Pune', '2'),
(315, 'Current Affairs 2019', 'Who becomes fastest Indian to reach 100 ODI wickets', 'Ravindra Jadeja', 'Ravichandran Ashwin', 'Jasprit Bumrah', 'Mohammed Shami', '4'),
(316, 'Current Affairs 2020', 'Which State Assembly becomes the first in India to pass a resolution demanding to scrap of the Citizenship Amendment Act (CAA)', ' Kerala', 'Punjab', 'assam', 'West Bengal', '1'),
(317, 'Current Affairs 2020', 'Under Swachh Survekshan League 2020, in one lakh to 10 lakh population category, which city is adjudged as Indias cleanest city\r\n(', 'Ranchi', 'Raipur', 'Guwahati', 'Jamshedpur', '4'),
(318, 'Current Affairs 2020', ' The Lai Haraoba festival is observed by which state', 'Sikkim', 'Mizoram', 'Tripura', 'Nagaland', '3'),
(319, 'Current Affairs 2020', ' Which one become the first country to ban sun cream that is harmful to corals', 'Nauru', 'Palau', 'Tuvalu', 'Ivory Coast', '2'),
(320, 'Current Affairs 2020', 'Which city hosted the Indian Science Congress in 2020', 'Chennai', 'Kolkata', 'Bengaluru', 'Mumbai', '3'),
(321, 'Current Affairs 2020', ' Which film wins the Best Motion Picture - Drama award in the 77th Golden Globe', '1917', 'Joker', 'The Irishman', 'Marriage Story', '1'),
(322, 'Current Affairs 2020', 'Which player receive the Polly Umrigar Award for the best international cricketer (2018-19)', 'Virat Kohli', 'Jasprit Bumrah', ' Rohit Sharma', ' Mohammed Shami', '2'),
(323, 'Current Affairs 2020', 'Which port is renamed as Shyama Prasad Mukherjee Port', 'Kolkata Port', 'CParadip Port', 'Paradip Port', 'Visakhapatnam Port', '1'),
(324, 'Current Affairs 2020', 'Who became the fastest Indian spinner to claim 100 wickets in One-day Internationals', 'Ravichandran Ashwin', 'Ravindra Jadeja', 'Kuldeep Yadav', 'Yuzvendra Chahal', '3'),
(325, 'Current Affairs 2020', 'Who became the first woman parade adjutant in Army Day Parade', 'Captain Tania Shergill', 'Captain Swati Singh', 'Captain Priya Jhingan', 'None of these', '1'),
(326, 'Current Affairs 2021', 'Alexander Ellis has been appointed as the new __ High Commissioner to India', 'US', ' British', 'Germany', 'Italy', '2'),
(327, 'Current Affairs 2021', 'Which state government decided to start world’s largest floating solar project by 2023', 'Tamil Nadu', 'West Bengal', 'Karnataka', 'Madhya Pradesh', '4'),
(328, 'Current Affairs 2021', 'Which country recently amends National Anthem to honour indigenous people', 'Australia', 'Japan', 'Germany', 'South Africa', '1'),
(329, 'Current Affairs 2021', 'National Youth Day is celebrated on', '7th January', '8th January', '10th January', '12th January', '4'),
(330, 'Current Affairs 2021', 'Justice Hima Kohli has become the first woman Chief Justice of __ High Court', 'Telangana', 'Kerala', 'Andhra Pradesh', 'Tamil Nadu', '1'),
(331, 'Current Affairs 2021', 'The India Meteorological Department (IMD) inaugrated Indias highest Meteorological Centre (MC) in', 'Ladakh', 'Arunachal Pradesh', 'Sikkim', 'Jammu and Kashmir', '1'),
(332, 'Current Affairs 2021', 'Which one is the first country to approve Covid-19 vaccine of Oxford-AstraZeneca', 'USA', 'England', 'Japan', 'India', '2'),
(333, 'Current Affairs 2021', 'Indias first National Sports University has been launched in', 'Sikkim', 'Manipur', 'Kerala', ' Punjab', '2'),
(334, 'Current Affairs 2021', 'Which countrys President will be the chief guest at Indias Republic Day Parade on January 26, 2021 after UK Prime Minister Boris Johnson cancelled his visit to India due to Covid-19', 'Bolivia', 'Uruguay', 'Guyana', 'Suriname', '4'),
(335, 'Current Affairs 2021', 'Indias first Air Taxi service has been launched in', 'Mumbai', 'Manali', 'Chandigarh', 'Lucknow', '3'),
(336, 'Simple Interest', 'Kabir paid Rs. 9600 as interest on a loan he took 5 years ago at 16% rate of simple interest. What was the amount he took as loan?', 'Rs. 16400', 'Rs. 12000', 'Rs. 12500', 'Rs. 18000', '2'),
(337, 'Simple Interest', 'In 4 years the simple interest on certain sum of money is 9/25 of the principal. The annual rate of interest is', ' 4%', '4(1/2)%', '9%', '10%', '3'),
(338, 'Simple Interest', 'If simple interest for 2 years for a sum is Rs. 600 and compound interest for the same sum for 2 years and same rate of interest is Rs. 645, what will be the rate of interest?', '10%', '15%', '30%', '5%', '2'),
(339, 'Simple Interest', 'Guddi invested some money in a bank at rate of 6% per annum. At simple interest, after 9 years, she got Rs. 8470. How much did she invest?', ' Rs. 5250', 'Rs. 6550', 'Rs. 6400', 'Rs. 5500', '4'),
(340, 'Simple Interest', 'What will be the Sum if Simple Interest is ₹x at x% for x years?', '₹(100/x)', '₹(100x)', '₹(100/x2)', '₹(x)', '1'),
(341, 'Simple Interest', 'What is the Capital of a Money Lender if the Rate of interest falls from 13% p.a to 12½% p.a and his yearly income diminishes by ₹104?', '₹20,600', '₹24,000', '₹21,400', ' ₹20,800', '4'),
(342, 'Simple Interest', 'If ₹64 Amount to ₹83.20 in 2 years, what will ₹86 Amount to in 4 years at the same Rate percent per annum?', '₹127.60', '₹147.60', '₹137.60', ' ₹117.60', '3'),
(343, 'Simple Interest', 'How much time will be required for a Sum of money to double itself at 61⁄4% per annum Simple Interest?', '12 Years', '6 Years', '16 Years', '24 Years', '3'),
(344, 'Simple Interest', '₹800 Amounts to ₹920 in 3 years at Simple Interest. If the interest rate is increased by 3%, what would it amount to?', '₹1182', '₹996', ' ₹1026', '₹992', '4'),
(345, 'Simple Interest', 'Principal + Interest =?', 'Amount', 'Simple Interest', 'Profit', 'Rate', '1'),
(346, 'Number Series', 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', '2'),
(347, 'Number Series', 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '7', '10', '12', '13', '2'),
(348, 'Number Series', 'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?', '20', '22', '23', '26', '2'),
(349, 'Number Series', 'Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?', '22', '24', '25', '23', '3'),
(350, 'Number Series', 'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?', '12', '14', '27', '53', '2'),
(351, 'Number Series', 'Look at this series: 21, 9, 21, 11, 21, 13, 21, ... What number should come next?', '14', '15', '21', '23', '2'),
(352, 'Number Series', 'Look at this series: 58, 52, 46, 40, 34, ... What number should come next?', '26', '28', '30', '32', '2'),
(353, 'Number Series', 'Look at this series: 3, 4, 7, 8, 11, 12, ... What number should come next?', '7', '10', '14', '15', '4'),
(354, 'Number Series', 'Look at this series: 8, 22, 8, 28, 8, ... What number should come next?', '9', '29', '32', '34', '4'),
(355, 'Number Series', 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', '14', '13', '12', '1'),
(356, 'Series', 'Find the missing number in the series?\r\n4, 18, ?, 100, 180, 294, 448', '48', '50', '58', '60', '1'),
(357, 'Series', 'Find the missing number in the following series?\r\n3, 5, 5, 19, 7, 41, 9, ?\r\n', '71', '61', '79', '69', '1'),
(358, 'Series', 'What should come in place of question mark (?) in the following number series?\r\n 132       156       ?         210          240          272 \r\n', '196', '182', '199', '204', '2'),
(359, 'Series', 'Find the wrong number in the series.\r\n1, 2, 6, 15, 31, 56, 91\r\n', '31', '15', '56', '91', '4'),
(360, 'Series', '1, 2, 3, 10, ?, 9802', '99', '199', '299', '999', '1'),
(361, 'Series', 'Find the wrong number in the series.\r\n3, 8, 15, 24, 34, 48, 63\r\n', '15', '24', '34', '48', '3'),
(362, 'Series', 'Find the wrong number in the given series.\r\n8, 27, 125, 343, 1381\r\n', '27', '8', '343', '1381', '4'),
(363, 'Series', '8, 15, 28, 53, ?, 199', '101', '102', '103', '104', '2'),
(364, 'Series', '. Find out the wrong term in the series 2, 3, 4, 4, 6, 8, 9, 12, 16', '9', '12', '16', '8', '1'),
(365, 'Series', '. Find the wrong number in the series\r\n7, 28, 63, 124, 215, 342, 511\r\n', '28', '124', '215', '342', '1'),
(366, 'History', 'Who is regarded as the ‘father of modern India’?', 'Raja Ram Mohan Roy', 'Swami Dayananda Saraswati', 'Sri Aurobindo', ' Bhagat Singh', '1'),
(367, 'History', 'What was the name of Rabindranath Tagores novel on Swadeshi Movement? ', 'Chokherbali', 'Ghare Baire', 'Chaturanga', 'Char Adhyay', '2'),
(368, 'History', 'What was the original name of Swami Dayananda Saraswati? ', 'Gowri Shankar', 'Abhi Shankar', 'Mula Shankar', 'Daya Shankar', '3'),
(369, 'History', 'Diu was the colony under which power?', 'Dutch', 'English', 'Portuguese', 'French', '3'),
(370, 'History', 'When Mahatma Gandhi was first arrested during Satyagraha?', '1906', '1908', '1907', '1909', '2'),
(371, 'History', 'When Mahatma Gandhi was arrested who took over the leadership of salt Satyagraha?', 'Vinoba Bhabe', 'Abbas Tybaji', 'Sardar B Patel', 'Maulana Abul Kalam Azad', '2'),
(372, 'History', 'Who said this famous dialogue: “Sab lal ho jayega” ', 'Guru Govind Singh', 'Ajit Singh', 'Tegh Bahaur', ' Ranjit Singh', '4'),
(373, 'History', 'Pritilata Waddedar died in which incident? ', ' Chattogram Armoury Raid', 'Feni Expedition', 'Carpole Expedition', 'Attack on Pahartali European Club', '4'),
(374, 'History', 'When did Vasco da Gama arrive in Calicut?', ' 1497', '1495', '1494', '1498', '4'),
(375, 'History', 'When was the swadeshi movement started?', ' 1902', ' 1905', ' 1908', ' 1909', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `std_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`std_id`, `name`, `email`, `password`, `phone`, `date`) VALUES
(1, 'Reettwick Ghosh', 'reettwick225@gmail.com', '202cb962ac59075b964b07152d234b70', 9735780116, '2021-05-18'),
(8, 'admin', 'admin@gmail.com', '3929262652cb6594a5c26c97a904a292', 1234567892, '2021-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `std_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `topic` varchar(400) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`std_id`, `name`, `topic`, `score`) VALUES
(164, 'admin', 'Antonyms', 6),
(165, 'admin', 'Current Affairs 2019', 3),
(166, 'admin', 'Antonyms', 6),
(167, 'admin', 'Current Affairs 2019', 3),
(168, 'admin', 'Current Affairs 2019', 3),
(169, 'admin', 'Series', 3),
(173, 'admin', 'Computer', 2),
(174, 'admin', 'C Mcq Test1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_result`
--
ALTER TABLE `student_result`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
