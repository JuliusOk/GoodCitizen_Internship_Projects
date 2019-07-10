#!/bin/bash
# echo "Hey their, what is your name?"
# read name
# echo "nice meeting you $name"

# echo "addition"
# echo "enter x"
# read x
# echo "enter y"
# read y
# echo "$x+$y = $[x+y]"

# echo "*****************simple calculator**************"
# sum=0
# i="y"
# echo "enter first number"
# read n1
# echo "enter second number"
# read n2
# while [ $i = "y" ]
# do
# echo "1.Addition"
# echo "2.Subtraction"
# echo "3.Multiplication"
# echo "4.Division"
# echo "Enter choice"
# read ch
# case $ch in
# 1)sum=$(echo " $n1 + $n2" | bc -l)
# echo "Addition is =" $sum;;
# 2)sum=$(echo "$n1 - $n2" | bc -l)
# echo "Sub is =" $sum;;
# 3)sum=$(echo "$n1 * $n2" | bc -l)
# echo "Mul is =" $sum;;
# 4)sum=$(echo "$n1 / $n2" | bc -l)
# echo "div is =" $sum;;
# *)echo "invalid choice"
# esac
# echo "Do you want to continue"
# read i
# if [ $i != "y" ]
# then
# exit
# fi
# done

# Sorting the array in Bash 
# using Bubble sort 

# # Static input of Array
# echo "enter the number of elements to be in the array" 
# read n

# arr=(10 8 20 100 12)

# echo "Array in original order"
# echo ${arr[*]} 

# # Performing Bubble sort 
# for ((i = 0; i<5; i++)) 
# do
	
# 	for((j = i; j<5-i-1; j++)) 
# 	do
	
# 		if ((${arr[j]} > ${arr[$((j+1))]})) 
# 		then
# 			# swap 
# 			temp=${arr[$j]} 
# 			arr[$j]=${arr[$((j+1))]} 
# 			arr[$((j+1))]=$temp 
# 		fi
# 	done
# done

# echo "Array in sorted order :"
# echo ${arr[*]} 

echo "Enter the order of sorting, 1 for ascending and 2 for decending"
read test

if [ $test -eq 1 ];
then
    echo "enter maximum number of elements in the array"
    read n
    # taking input from user
    echo -n "enter  Numbers in array: "
    for (( i = 0; i < $n; i++ ))
    do
    read nos[$i]
    done
    #printing the number before sorting
    echo -n "  Numbers in an array are: "
    for (( i = 0; i < $n; i++ ))
    do
    echo ${nos[$i]}
    done
    # Now do the Sorting of numbers
    for (( i = 0; i < $n ; i++ ))
    do
    for (( j = $i; j < $n; j++ ))
    do
    if [ ${nos[$i]} -gt ${nos[$j]}  ]; then
    t=${nos[$i]}
    nos[$i]=${nos[$j]}
    nos[$j]=$t
    fi
    done
    done
    # Printing the sorted number in descending order
    echo -e "\nSorted Numbers "
    for (( i=0; i < $n; i++ ))
    do
    echo ${nos[$i]}
    done

elif [ $test -eq 2 ];
    then
    echo "enter maximum number of elements in the array"
    read n
    # taking input from user
    echo "enter  Numbers in array: "
    for (( i = 0; i < $n; i++ ))
    do
    read nos[$i]
    done
    #printing the number before sorting
    echo "  Numbers in an array are: "
    for (( i = 0; i < $n; i++ ))
    do
    echo ${nos[$i]}
    done
    # Now do the Sorting of numbers
    for (( i = 0; i < $n ; i++ ))
    do
    for (( j = $i; j < $n; j++ ))
    do
    if [ ${nos[$i]} -lt ${nos[$j]}  ]; then
    t=${nos[$i]}
    nos[$i]=${nos[$j]}
    nos[$j]=$t
    fi
    done
    done
    # Printing the sorted number in descending order
    echo -e "\nSorted Numbers "
    for (( i=0; i < $n; i++ ))
    do
    echo ${nos[$i]}
    done

else 
    echo "wrong input"
fi
