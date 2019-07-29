# name = input("Please enter the name of the first student: ")
# phy = input("Please enter the name of the first student: ")
# bio = input("Please enter the name of the first student: ")
# chem = input("Please enter the name of the first student: ")
# math = input("Please enter the name of the first student: ")

# print("input for " + name + " is, physics " + phy + ", biology " + bio + ", chemistry " + chem + " and math " +math)

# is_male = True
# is_tall = True

# if(is_male and is_tall):
#     print("your a male")
# elif(is_male and is_tall):
#     print("your a short male")
# elif(not is_male and is_tall):

# #     if(phy <=50){
# #         if (phy <=60){

#             if(phy <= 80){
#                 print("B")
# }
# print("A")
# }

# }

# # }

# num1 = float(input("Input number one: "))
# num2 = float(input("Input number one: "))
# num3 = float(input("Input number one: "))

# def max(num1, num2, num3):
#     if num1 >=num2 and num1 >= num3:
#         print(num1)
#     elif num2 >= num1 and num2 >= num3:
#         print(num2)
#     else:
#         print(num3)
# #
# print(max(num1, num2, num3))


# calculator

# num1 = float(input("Enter first number: "))
# num2 = float(input("Enter second number: "))

# operation = float(input("enter operation for perform (+ or 1 for addition, - or 2 for subtraction, * or 3 for
# multiplication and / or 4 for division: "))

# if operation == 1 or operation == "+":
#     print(num1 + num2)

# elif operation == 2 or operation == "-":
#     print(num1 - num2)

# elif operation == 3 or operation == "*":
#     print(num1 * num2)

# elif operation == 4 or operation == "/":
#     print(num1 / num2)

# else:
#     print("wrong operation chosen")


# base_num = float(input("Enter base number: "))
# power_num = float(input("Enter base number: "))

# def raise_to_power(base_num, power_num):
#     result = 1
#     for index in range(power_num):
#         result = result * base_num
#     return result


# print(raise_to_power(3, 4))

# # Python Program - Calculate Grade of Student

# print("Enter 'x' for exit.");
# print("Enter marks obtained in 5 subjects: ");
# mark1 = input();
# if mark1 == 'x':
#     exit();
# else:
#     mark1 = int(mark1);
#     mark2 = int(input());
#     mark3 = int(input());
#     mark4 = int(input());
#     mark5 = int(input());
#     sum = mark1 + mark2 + mark3 + mark4 + mark5;
#     average = sum/5;

#     if(average>=91 and average<=100):

#     	print("Your Grade is A+");

#     elif(average>=81 and average<=90):
#     	print("Your Grade is A");
#     elif(average>=71 and average<=80):
#     	print("Your Grade is B+");
#     elif(average>=61 and average<=70):
#     	print("Your Grade is B");
#     elif(average>=51 and average<=60):
#     	print("Your Grade is C+");
#     elif(average>=41 and average<=50):
#     	print("Your Grade is C");
#     elif(average>=0 and average<=40):
#     	print("Your Grade is F");
#     else:
#     	print("Strange Grade..!!");


# import sys

# A = 6
# B = 5
# C = 4
# D = 3
# E = 2
# O = 1
# F = 0

# i = 0

# result = []
# result2 = []

# if len(sys.argv) == 2:

# 	number = int(sys.argv[1])

# for i in range(number): 
# # number =float(input("Enter number of students: "))
# # while i < number:
#     sum1 = 0

#     print("")
#     name = input("Enter candidate's name: ")

#     print("Enter marks scored by " + name)

#     try:
#         physics = float(input("Physics: "))
#         Chemistry = float(input("Chemistry: "))
#         Biology = float(input("Biology: "))
#         Math = float(input("Math: "))
#         print("")

#         if physics >= 80:
#             print("Physics A, " + str(A) + " points")
#             float(A)
#             sum1 += A

#         elif physics >= 70:
#             print("Physics B, " + str(B) + " points")
#             float(B)
#             sum1 += B

#         elif physics >= 60:
#             print("Physics C, " + str(C) + " points")
#             float(C)
#             sum1 += C


#         elif physics >= 50:
#             print("Physics D, " + str(D) + " points")
#             float(D)
#             sum1 += D

#         elif physics >= 40:
#             print("Physics E, " + str(E) + " points")
#             float(E)
#             sum1 += E

#         elif physics >= 30:
#             print("Physics O, " + str(O) + " point")
#             float(O)
#             sum1 += O

#         else:
#             print("Physics F, " + str(F) + " points")

#         print("")
#         if Chemistry >= 80:
#             print("Chemistry A, " + str(A) + " points")
#             float(A)
#             sum1 += A

#         elif Chemistry >= 70:
#             print("Chemistry B, " + str(B) + " points")
#             float(B)
#             sum1 += B

#         elif Chemistry >= 60:
#             print("Chemistry C, " + str(C) + " points")
#             float(C)
#             sum1 += C

#         elif Chemistry >= 50:
#             print("Chemistry D, " + str(D) + " points")
#             float(D)
#             sum1 += D

#         elif Chemistry >= 40:
#             print("Chemistry E, " + str(E) + " points")
#             float(E)
#             sum1 += E

#         elif Chemistry >= 30:
#             print("Chemistry 0, " + str(O) + " point")
#             float(O)
#             sum1 += O

#         else:
#             print("Chemistry F, " + str(F) + " points")

#         print("")

#         if Biology >= 80:
#             print("Biology A, " + str(A) + " points")
#             float(A)
#             sum1 += A

#         elif Biology >= 70:
#             print("Biology B, " + str(B) + " points")
#             float(B)
#             sum1 += B

#         elif Biology >= 60:
#             print("Biology C, " + str(C) + " points")
#             float(C)
#             sum1 += C

#         elif Biology >= 50:
#             print("Biology D, " + str(D) + " points")
#             float(D)
#             sum1 += D

#         elif Biology >= 40:
#             print("Biology E, " + str(E) + " points")
#             float(E)
#             sum1 += E

#         elif Biology >= 30:
#             print("Biology O, " + str(O) + " point")
#             float(O)
#             sum1 += O

#         else:
#             print("Biology F, " + str(F) + " points")

#         print("")
#         if Math >= 80:
#             print("Math A, " + str(A) + " points")
#             float(A)
#             sum1 += A

#         elif Math >= 70:
#             print("Math B, " + str(B) + " points")
#             float(B)
#             sum1 += B

#         elif Math >= 60:
#             print("Math C, " + str(C) + " points")
#             float(C)
#             sum1 += C

#         elif Math >= 50:
#             print("Math D, " + str(D) + " points")
#             float(D)
#             sum1 += D

#         elif Math >= 40:
#             print("Math E, " + str(E) + " points")
#             float(E)
#             sum1 += E

#         elif Math >= 30:
#             print("Math O, " + str(O) + " point")
#             float(O)
#             sum1 += O

#         else:
#             print("Math F, " + str(F) + " points")

#         print("")

#         point = print(name + " Your points are " + str(sum1) + " out of 24")
#         result2.append(name)
#         result.append(sum1)
#         print("")
#         print(result2, result)
#         print("")
#         points = max(result)
#         print(str(points) + " are the best points scored by "+str(name))

#         i += 1


#     except:
#         print("invalid input, please re-run the program and enter marks in decimals")

#         break

# print("")
# print("")
# points = max(result)
# print(str(points) + " are the best points")


# get opt
# argparse
# organise the output into tables

# import sys
# import argparse
# print(sys.argv)

# parser = argparse.ArgumentParser(description='process some integers.')
# parser.add_argument('integers', metavar='N', type=int, nargs='+', help='an integer for accumulator')
# parser.add_argument('--sum', dest='accumulate', action='store_const', const=sum, default=max)
# args = parser.parse_args()
# print(args.accumulate(args.integers))

# projecteuler.com
# hackerranks


# def solveMeFirst(a, b):
#     # Hint: Type return a+b below

#     num1 = int(input(""))
#     num2 = int(input(""))
#     sum = num1 + num2
#     return sum

#     # res = solveMeFirst(num1, num2)
#     # print(res)

# 	solveMeFirst(num1,num2)
# # print(res)

# print(res)


# number 1
# num = [3, 5]
# max = 1000

# result = 0
# for x in num:
#     for i in range(0,max):
#         if x*i < max:
#             result += x*i
# print(result)


# result = 0
# for i in range(0,max):
#     if i%3 == 0 or i%5 == 0:
#         result += i

# print(result)

# number 2
# a, b = 1, 1
# total = 0
# while a <= 4000000:
#     if a % 2 == 0:
#         total += a
#     a, b = b, a+b  # fibonacci formilae
# print(total)


# number 3
# n = 600851475143
# i = 2
# while i * i < n:
#      while n % i == 0:
#          n = n / i
#      i = i + 1


# number 4
# print(n)
# def is_pal(c):
#     return int(str(c)[::-1]) == c

# maxpal = 0
# for a in range(999, 99, -1):
#     for b in range(a, 99, -1):
#         prod = a * b
#         if is_pal(prod) and prod > maxpal:
#             maxpal = prod

# print(maxpal)

# n = 1

# num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

# for i in num:
# 	if n%num == 0:
# 		print
# for row in rows:
#     if n % 25:
#         row.STATUS = "Minor"
#     else:
#         row.STATUS = "Major"


# def simpleArraySum(ar):

#     n = 10
#     sum1 = 0
#     ar = [1,2,3,4,5,6,7,8,9,10]
#     for i in ar:

#         sum1 +=1
#     return sum1

# print(sum(ar[]))

# def sum(numbers):
#     total = 0
#     for x in numbers:
#         total += x
#     return total
# print(sum((8, 2, 3, 0, 7)))

import sys


def simpleArraySum(n, ar):
    return sum(ar)
    n = int(input().strip())
    ar = list(map(int, input().strip().split(' ')))
    result = simpleArraySum(n, ar)
    print(result)

ar = [1,2,3,4,5,6]

# # return sum(ar) # Complete this function

# n = int(input().strip()) 
# ar = list(map(int, input().strip().split(' '))) 
# result = simpleArraySum(n, ar) 
# print(result) this solves for python 3




#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'diagonalDifference' function below.
#
# The function is expected to return an INTEGER.
# The function accepts 2D_INTEGER_ARRAY arr as parameter.
#

def diagonalDifference(arr):
    # Write your code here
    counter = 0
    counter2 = len(arr) - 1
    left_arr = []
    right_arr = []
    for i in range(len(arr)):
        left_arr.append(arr[counter][counter])
        counter += 1
    print(left_arr)

    counter = 0
    for i in range(len(arr)):
        right_arr.append(arr[counter][counter2])
        counter += 1
        counter2 -= 1
    print(right_arr)

    return abs(sum(left_arr) - sum(right_arr))

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    arr = []

    for _ in range(n):
        arr.append(list(map(int, input().rstrip().split())))

    result = diagonalDifference(arr)

    fptr.write(str(result) + '\n')

    fptr.close()

