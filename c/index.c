#include <stdio.h>

int main()
{
// printf ("Hello World!\n");
// return 3;

// printf("number %d, number %d\n", 1 + 2, 10);
// exit (3);
	char name;
	printf("Enter name of the student: ");
	scanf("%s",&name);
	int marks;
	printf("Enter marks scored by %s: ", &name);
	scanf("%d",&marks);

	if (marks <0 || marks > 100){
		printf("wrong input\n");
	}
	else if (marks < 50){
		printf("Failed\n");
	}
	else if (marks < 70){
		printf("Promising marks\n");
	}
	else {
		printf("Keep is up\n");
	}



int i = 0;
while (i < 4){
    
	int A;
    A = 6;
    int B = 5, C = 4, D = 3, E = 2, O = 1, F = 0, physics, Biology, Chemistry, Math;
	int sum1 = 0;

	char name;    // physics, Biology, Chemistry;


    printf("Enter candidate name: ");

    printf("Enter marks scored by %s", &name);
    printf("\n");

    	printf("Physics: ");
        scanf("%d",&physics);

        printf("Chemistry: ");
        scanf("%d",&Chemistry);

        printf("Biology: ");
        scanf("%d",&Biology);

        printf("Math: ");
        scanf("%d",&Math);

        printf("\n");

        if (physics >= 80){
            printf("Physics %d, ",6);
            sum1 += 6;}
}
}
    //     elif physics >= 70:
    //         print("Physics B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif physics >= 60:
    //         print("Physics C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C


    //     elif physics >= 50:
    //         print("Physics D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif physics >= 40:
    //         print("Physics E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif physics >= 30:
    //         print("Physics O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Physics F, " + str(F) + " points")

    //     print("")
    //     if Chemistry >= 80:
    //         print("Chemistry A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Chemistry >= 70:
    //         print("Chemistry B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Chemistry >= 60:
    //         print("Chemistry C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Chemistry >= 50:
    //         print("Chemistry D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Chemistry >= 40:
    //         print("Chemistry E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Chemistry >= 30:
    //         print("Chemistry 0, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Chemistry F, " + str(F) + " points")

    //     print("")

    //     if Biology >= 80:
    //         print("Biology A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Biology >= 70:
    //         print("Biology B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Biology >= 60:
    //         print("Biology C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Biology >= 50:
    //         print("Biology D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Biology >= 40:
    //         print("Biology E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Biology >= 30:
    //         print("Biology O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Biology F, " + str(F) + " points")

    //     print("")
    //     if Math >= 80:
    //         print("Math A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Math >= 70:
    //         print("Math B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Math >= 60:
    //         print("Math C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Math >= 50:
    //         print("Math D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Math >= 40:
    //         print("Math E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Math >= 30:
    //         print("Math O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Math F, " + str(F) + " points")

    //     print("")

    //     point = print(name + " Your points are " + str(sum1) + " out of 24")
    //     result2.append(name)
    //     result.append(sum1)
    //     print("")
    //     print(result2, result)
    //     print("")
    //     points = max(result)
    //     print(str(points) + " are the best points scored by "+str(name))

    //     i += 1



    // except:
    //     print("invalid input, please re-run the program and enter marks in decimals")

    //     break
    // print("")
    // name = input("Enter candidate's name: ")

    // print("Enter marks scored by " + name)

    // try:
    //     physics = float(input("Physics: "))
    //     Chemistry = float(input("Chemistry: "))
    //     Biology = float(input("Biology: "))
    //     Math = float(input("Math: "))
    //     print("")

    //     if physics >= 80:
    //         print("Physics A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif physics >= 70:
    //         print("Physics B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif physics >= 60:
    //         print("Physics C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C


    //     elif physics >= 50:
    //         print("Physics D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif physics >= 40:
    //         print("Physics E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif physics >= 30:
    //         print("Physics O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Physics F, " + str(F) + " points")

    //     print("")
    //     if Chemistry >= 80:
    //         print("Chemistry A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Chemistry >= 70:
    //         print("Chemistry B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Chemistry >= 60:
    //         print("Chemistry C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Chemistry >= 50:
    //         print("Chemistry D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Chemistry >= 40:
    //         print("Chemistry E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Chemistry >= 30:
    //         print("Chemistry 0, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Chemistry F, " + str(F) + " points")

    //     print("")

    //     if Biology >= 80:
    //         print("Biology A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Biology >= 70:
    //         print("Biology B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Biology >= 60:
    //         print("Biology C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Biology >= 50:
    //         print("Biology D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Biology >= 40:
    //         print("Biology E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Biology >= 30:
    //         print("Biology O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Biology F, " + str(F) + " points")

    //     print("")
    //     if Math >= 80:
    //         print("Math A, " + str(A) + " points")
    //         float(A)
    //         sum1 += A

    //     elif Math >= 70:
    //         print("Math B, " + str(B) + " points")
    //         float(B)
    //         sum1 += B

    //     elif Math >= 60:
    //         print("Math C, " + str(C) + " points")
    //         float(C)
    //         sum1 += C

    //     elif Math >= 50:
    //         print("Math D, " + str(D) + " points")
    //         float(D)
    //         sum1 += D

    //     elif Math >= 40:
    //         print("Math E, " + str(E) + " points")
    //         float(E)
    //         sum1 += E

    //     elif Math >= 30:
    //         print("Math O, " + str(O) + " points")
    //         float(O)
    //         sum1 += O

    //     else:
    //         print("Math F, " + str(F) + " points")

    //     print("")

    //     point = print(name + " Your points are " + str(sum1) + " out of 24")
    //     result2.append(name)
    //     result.append(sum1)
    //     print("")
    //     print(result2, result)
    //     print("")
    //     points = max(result)
    //     print(str(points) + " are the best points scored by "+str(name))

    //     i += 1



    // except:
    //     print("invalid input, please re-run the program and enter marks in decimals")

    //     break